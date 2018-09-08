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

class ServiceController extends Controller
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
        $data['site_title'] = $data['page_title'] = 'Services List';
        $data['breadcrumb'] = '<ul class="page-breadcrumb breadcrumb"><li><a href="">Home</a><i class="fa fa-circle"></i></li><li><a href="#">Services</a><i class="fa fa-circle"></i></li><li><a href="#">List</a></li></ul>';
        $data['view'] = 'admin.services.list';
        $services  = _arefy(\Models\Services::where('status','!=','trashed')->get());
        if ($request->ajax()) {
            return DataTables::of($services)
            ->editColumn('action',function($item){
                $html    = '<div class="edit_details_box">';
                $html   .= '<a href="'.url(sprintf('admin/services/%s',___encrypt($item['id']))).'" title="View Detail"><i class="fa fa-fw fa-eye"></i> | </a>';
                $html   .= '<a href="'.url(sprintf('admin/services/%s/edit',___encrypt($item['id']))).'"  title="Edit Detail"><i class="fa fa-edit"></i></a> | ';
                if($item['status'] == 'active'){
                    $html   .= '<a href="javascript:void(0);" 
                        data-url="'.url(sprintf('admin/services/status/?id=%s&status=inactive',$item['id'])).'" 
                        data-request="ajax-confirm"
                        data-ask_image="'.url('/images/inactive-user.png').'"
                        data-ask="Would you like to change '.$item['title'].' status from active to inactive?" title="Update Status"><i class="fa fa-fw fa-ban"></i></a>';
                }elseif($item['status'] == 'inactive'){
                    $html   .= '<a href="javascript:void(0);" 
                        data-url="'.url(sprintf('admin/services/status/?id=%s&status=active',$item['id'])).'" 
                        data-request="ajax-confirm"
                        data-ask_image="'.url('/images/active-user.png').'"
                        data-ask="Would you like to change '.$item['title'].' status from inactive to active?" title="Update Status"><i class="fa fa-fw fa-check"></i></a>';
                }elseif($item['status'] == 'pending'){
                    $html   .= '<a href="javascript:void(0);" 
                        data-url="'.url(sprintf('admin/services/status/?id=%s&status=active',$item['id'])).'" 
                        data-request="ajax-confirm"
                        data-ask_image="'.url('/images/active-user.png').'"
                        data-ask="Would you like to change '.$item['title'].' status from pending to active?" title="Update Status"><i class="fa fa-fw fa-check"></i></a>';
                }
                $html   .= '</div>';
                                
                return $html;
            })
            ->editColumn('status',function($item){
                return ucfirst($item['status']);
            })
             ->editColumn('title',function($item){
                return ucfirst($item['title']);
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        $data['html'] = $builder
            ->parameters([
                "dom" => "<'row' <'col-md-6 col-sm-12 col-xs-4'l><'col-md-6 col-sm-12 col-xs-4'f>><'row filter'><'row white_box_wrapper database_table table-responsive'rt><'row' <'col-md-6'i><'col-md-6'p>>",
            ])
            ->addColumn(['data' => 'title', 'name' => 'title','title' => 'Title','orderable' => false, 'width' => 120])
            ->addColumn(['data' => 'description', 'name' => 'description','title' => 'Description','orderable' => false, 'width' => 120])
            ->addColumn(['data' => 'status','name' => 'status','title' => 'Status','orderable' => false, 'width' => 120])
            ->addAction(['title' => '', 'orderable' => false, 'width' => 120]);
        return view('home')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(Request $request){
        $data['site_title'] = $data['page_title'] = 'Create Service';
        $data['view'] = 'admin/services/add';
        return view('home',$data);
    }
    public function store(Request $request){
        $validation = new Validations($request);
        $validator  = $validation->createService();
        if($validator->fails()){
            $this->message = $validator->errors();
        }else{
            $data['title']              =!empty($request->title)?$request->title:'';
            $data['image']              = !empty($request->profile_picture)?$request->profile_picture:'';
            $data['status']             = 'active';
            $data['description']        =!empty($request->description)?$request->description:'';
            $data['updated_at']         =date('Y-m-d H:i:s');
            $data['created_at']         =date('Y-m-d H:i:s');

             $image = $request->file('profile_picture');
               $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
               $path = public_path().'/uploads/services';
                if(!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true);
                }

               $destinationPath = public_path('uploads/services');
               $img = Image::make($image->getRealPath());
               $img->resize(100, 100, function ($constraint) {
                   $constraint->aspectRatio();
               })->save($destinationPath . '/' . $input['imagename']);

               $destinationPath = public_path('images/image');
               $image->move($destinationPath, $input['imagename']);
               $data['image'] = $input['imagename'];

            $inserId = \Models\Services::add($data);
            if($inserId){
                $this->status = true;
                $this->modal  = true;
                $this->alert    = true;
                $this->message  = "Service has been added successfully.";
                $this->redirect = url('admin/services');
            } 
        } 
        return $this->populateresponse();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $data['site_title'] = $data['page_title'] = 'Edit Service';
        $data['view'] = 'admin.services.edit';
        $id = ___decrypt($id);
        $data['serviceDetails'] = _arefy(\Models\Services::list('single',$id));
        //dd($data['associateDetails']);
        return view('home',$data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{       $id = ___decrypt($id);
        $request->request->add(['id'=>$id]);
        $validation = new Validations($request);
        $validator  = $validation->createService('edit');
        if($validator->fails()){
            $this->message = $validator->errors();
        }else{
            $data['title']              =!empty($request->title)?$request->title:'';
            $data['image']              = !empty($request->profile_picture)?$request->profile_picture:'';
            $data['status']             = 'active';
            $data['description']        =!empty($request->description)?$request->description:'';
            $data['updated_at']         =date('Y-m-d H:i:s');
            $data['created_at']         =date('Y-m-d H:i:s');

            $image = $request->file('profile_picture');
               $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
               $path = public_path().'/uploads/services';
                if(!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true);
                }

               $destinationPath = public_path('uploads/services');
               $img = Image::make($image->getRealPath());
               $img->resize(100, 100, function ($constraint) {
                   $constraint->aspectRatio();
               })->save($destinationPath . '/' . $input['imagename']);

               $destinationPath = public_path('images/image');
               $image->move($destinationPath, $input['imagename']);
               $data['image'] = $input['imagename'];
            $inserId = \Models\Services::change($id,$data);
            if($inserId){
                $this->status = true;
                $this->modal  = true;
                $this->alert    = true;
                $this->message  = "Service has been updated successfully.";
                $this->redirect = url('admin/services');
            } 
        } 
        return $this->populateresponse();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changeStatus(Request $request){
        $validation = new Validations($request);
        $validator = $validation->changeStatus();

        if($validator->fails()){
            $this->message = $validator->errors();
        }else{
            $userData                = ['status' => $request->status, 'updated_at' => date('Y-m-d H:i:s')];
            $isUpdated               = \Models\Services::change($request->id,$userData);

            if($isUpdated){
                if($request->status == 'trashed'){
                    $this->message = 'Deleted Service successfully.';
                }else{
                    $this->message = 'Updated Service successfully.';
                }
                $this->status = true;
                $this->redirect = true;
                $this->jsondata = [];
            }
        }
       return $this->populateresponse();
    }

}
