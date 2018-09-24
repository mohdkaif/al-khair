<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use Validations\Doctor as Validations;
require '../vendor/autoload.php';
use File;
// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Request $request){
        $this->middleware('auth');
        parent::__construct($request);
        
    }

    public function index(Request $request, Builder $builder){
        $data['site_title'] = $data['page_title'] = 'Appointments List';
        $data['breadcrumb'] = '<ul class="page-breadcrumb breadcrumb"><li><a href="">Home</a><i class="fa fa-circle"></i></li><li><a href="#">Appointments</a><i class="fa fa-circle"></i></li><li><a href="#">List</a></li></ul>';
        $data['view'] = 'admin.appointments.list';
        $appointments  = _arefy(\Models\Appointments::list('array','','','',true));
        $date = date('Y-m-d');
        if ($request->ajax()) {
            return DataTables::of($appointments)
            ->editColumn('action',function($item){
            $html    = '<div>';
            $html   .= '<a href="javascript:void(0);" 
                        data-url="'.url(sprintf('admin/appointments/delete/?id=%s',$item['id'])).'" 
                        data-request="ajax-confirm"
                        data-ask_image="'.url('/images/inactive-user.png').'"
                        data-ask="Would you like to delete '.$item['name'].' ?" title="Delete"><i class="fa fa-fw fa-ban"></i></a>';

                $html   .= '</div>';
                                
                return $html;
            })
             ->editColumn('name',function($item){
                $html    = '<div style="color:red">'.ucfirst($item['name']);

                $html   .= '</div>';
                if($item['appointment_date']==date('Y-m-d')){
                    return $html;
                }
                else{
                    return ucfirst($item['name']);
                }
            })
              ->editColumn('email',function($item){
                $item['email'] = !empty($item['email'])?$item['email']:'N:A';
                $html    = '<div style="color:red">'.ucfirst($item['email']);

                $html   .= '</div>';
                if($item['appointment_date']==date('Y-m-d')){
                    return $html;
                }
                else{
                    return $item['email'];
                }
            })
               ->editColumn('requirement',function($item){
                $item['requirement'] = !empty($item['requirement'])?$item['requirement']:'N:A';
                $html    = '<div style="color:red">'.ucfirst($item['requirement']);

                $html   .= '</div>';
                if($item['appointment_date']==date('Y-m-d')){
                    return $html;
                }
                else{
                    return $item['requirement'];
                }
            })
            ->editColumn('type',function($item){
                $html    = '<div style="color:red">'.ucfirst($item['type']);

                $html   .= '</div>';
                if($item['appointment_date']==date('Y-m-d')){
                    return $html;
                }
                else{
                    return ucfirst($item['type']);
                }
            })
            ->editColumn('appointment_date',function($item){
                $html    = '<div style="color:red">'.ucfirst($item['appointment_date']);

                $html   .= '</div>';
                if($item['appointment_date']==date('Y-m-d')){
                    return $html;
                }
                else{
                    return ucfirst($item['appointment_date']);
                }
            })
            ->editColumn('phone',function($item){
                $html    = '<div style="color:red">'.ucfirst($item['phone']);

                $html   .= '</div>';
                if($item['appointment_date']==date('Y-m-d')){
                    return $html;
                }
                else{
                    return ucfirst($item['phone']);
                }
            })
            ->rawColumns(['name','phone','email','type','requirement','appointment_date'])
            ->make(true);
        }

        $data['html'] = $builder
            ->parameters([
                "dom" => "<'row' <'col-md-6 col-sm-12 col-xs-4'l><'col-md-6 col-sm-12 col-xs-4'f>><'row filter'><'row white_box_wrapper database_table table-responsive'rt><'row' <'col-md-6'i><'col-md-6'p>>",
            ])
            ->addColumn(['data' => 'name', 'name' => 'name','title' => 'Name','orderable' => false, 'width' => 120])
            ->addColumn(['data' => 'phone', 'name' => 'phone','title' => 'Mobile Number','orderable' => false, 'width' => 120])
            ->addColumn(['data' => 'email', 'name' => 'email','title' => 'Email','orderable' => false, 'width' => 120])
            ->addColumn(['data' => 'type', 'name' => 'type','title' => 'Type','orderable' => false, 'width' => 120])
            ->addColumn(['data' => 'requirement','name' => 'requirement','title' => 'Requirement','orderable' => false, 'width' => 120])
            ->addColumn(['data' => 'appointment_date','name' => 'appointment_date','title' => 'Appointment Date','orderable' => false, 'width' => 120]);
        return view('home')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function changeStatus(Request $request){
        $validation = new Validations($request);
        $validator = $validation->changeStatus();

        if($validator->fails()){
            $this->message = $validator->errors();
        }else{
            $userData                = ['status' => $request->status, 'updated_at' => date('Y-m-d H:i:s')];
            $isUpdated               = \Models\Appointments::change($request->id,$userData);

            if($isUpdated){
                if($request->status == 'trashed'){
                    $this->message = 'Deleted Doctor successfully.';
                }else{
                    $this->message = 'Updated Doctor successfully.';
                }
                $this->status = true;
                $this->redirect = true;
                $this->jsondata = [];
            }
        }
       return $this->populateresponse();
    }

}
