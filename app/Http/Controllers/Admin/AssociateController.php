<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use Validations\Associate as Validations;

class AssociateController extends Controller
{
    
    public function __construct(Request $request){
        $this->middleware('auth');
        parent::__construct($request);
        
    }

    public function index(Request $request, Builder $builder){
        $data['site_title'] = $data['page_title'] = 'Associate List';
        $data['breadcrumb'] = '<ul class="page-breadcrumb breadcrumb"><li><a href="">Home</a><i class="fa fa-circle"></i></li><li><a href="#">Associates</a><i class="fa fa-circle"></i></li><li><a href="#">Manage</a></li></ul>';
        $data['view'] = 'admin.associate.list';
        $users  = _arefy(\Models\Users::where('status','!=','trashed')->where('type','=','associate')->get());
        if ($request->ajax()) {
            return DataTables::of($users)
            ->editColumn('action',function($item){
                $html    = '<div class="edit_details_box">';
                $html   .= '<a href="'.url(sprintf('admin/associate/%s',___encrypt($item['id']))).'" title="View Detail"><i class="fa fa-fw fa-eye"></i> | </a>';
                $html   .= '<a href="'.url(sprintf('admin/associate/%s/edit',___encrypt($item['id']))).'"  title="Edit Detail"><i class="fa fa-edit"></i></a> | ';
                if($item['status'] == 'active'){
                    $html   .= '<a href="javascript:void(0);" 
                        data-url="'.url(sprintf('admin/associate/status/?id=%s&status=inactive',$item['id'])).'" 
                        data-request="ajax-confirm"
                        data-ask_image="'.url('/images/inactive-user.png').'"
                        data-ask="Would you like to change '.$item['name'].' status from active to inactive?" title="Update Status"><i class="fa fa-fw fa-ban"></i></a>';
                }elseif($item['status'] == 'inactive'){
                    $html   .= '<a href="javascript:void(0);" 
                        data-url="'.url(sprintf('admin/associate/status/?id=%s&status=active',$item['id'])).'" 
                        data-request="ajax-confirm"
                        data-ask_image="'.url('/images/active-user.png').'"
                        data-ask="Would you like to change '.$item['name'].' status from inactive to active?" title="Update Status"><i class="fa fa-fw fa-check"></i></a>';
                }elseif($item['status'] == 'pending'){
                    $html   .= '<a href="javascript:void(0);" 
                        data-url="'.url(sprintf('admin/associate/status/?id=%s&status=active',$item['id'])).'" 
                        data-request="ajax-confirm"
                        data-ask_image="'.url('/images/active-user.png').'"
                        data-ask="Would you like to change '.$item['name'].' status from pending to active?" title="Update Status"><i class="fa fa-fw fa-check"></i></a>';
                }
                $html   .= '</div>';
                                
                return $html;
            })
            ->editColumn('status',function($item){
                return ucfirst($item['status']);
            })
             ->editColumn('name',function($item){
                return ucfirst($item['first_name'].' '.$item['last_name']);
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        $data['html'] = $builder
            ->parameters([
                "dom" => "<'row' <'col-md-6 col-sm-12 col-xs-4'l><'col-md-6 col-sm-12 col-xs-4'f>><'row filter'><'row white_box_wrapper database_table table-responsive'rt><'row' <'col-md-6'i><'col-md-6'p>>",
            ])
            ->addColumn(['data' => 'name', 'name' => 'name','title' => 'Name','orderable' => false, 'width' => 120])
            ->addColumn(['data' => 'email', 'name' => 'email','title' => 'Email','orderable' => false, 'width' => 120])
            ->addColumn(['data' => 'mobile_number', 'name' => 'mobile_number','title' => 'Mobile Number','orderable' => false, 'width' => 120])
            ->addColumn(['data' => 'status','name' => 'status','title' => 'Status','orderable' => false, 'width' => 120])
            ->addAction(['title' => '', 'orderable' => false, 'width' => 120]);
        return view('home')->with($data);
    }
    public function create(Request $request){
        $data['site_title'] = $data['page_title'] = 'Create Associate';
    	$data['view'] = 'admin/associate/add';
    	return view('home',$data);
    }
    public function store(Request $request){
        $validation = new Validations($request);
        $validator  = $validation->createAssociate();
        if($validator->fails()){
            $this->message = $validator->errors();
        }else{
            $data['first_name']=$request->first_name;
            $data['last_name']=$request->last_name;
            $data['name'] = $request->first_name.' '.$request->last_name;
            $data['email']=$request->email;
            $data['mobile_number']=$request->mobile_number;
            $data['country_code']=$request->country_code;
            $data['profile_picture'] = $request->first_name;
            $data['password']   =\Hash::make($request->password);
            $data['status'] = 'active';
            $data['type']='associate';
            $data['otp']=strtoupper(__random_string(6));
            $data['updated_at']=date('Y-m-d H:i:s');
            $data['created_at']=date('Y-m-d H:i:s');
            $inserId = \Models\Users::add($data);
           if($inserId){
            $associate['first_name']=$request->first_name;
            $associate['last_name']=$request->last_name;
            $associate['name'] = $request->first_name.''.$request->last_name;
            $associate['email']=$request->email;
            $associate['mobile_number']=$request->mobile_number;
            $associate['country_code']=$request->country_code;
            $associate['gender']=$request->gender;
            $associate['dob']=$request->date_of_birth;
            $associate['user_id'] =$inserId; 
            $associate['status'] = 'active';
            $associate['city']=$request->city;
            $associate['state']=$request->state;
            $associate['country']=$request->country;
            $associate['post_code']=$request->pin_code;
            $associate['street']=$request->street;
            $associate['updated_at']=date('Y-m-d H:i:s');
            $associate['created_at']=date('Y-m-d H:i:s');
             \Models\Associate::add($associate);
           } 
            $this->status = true;
            $this->modal    = true;
            $this->alert    = true;
            $this->message  = "Associate has been added successfully.";
            $this->redirect = url('admin/associate');
        } 
        return $this->populateresponse();
    }
    public function show(Request $request){
        $data['site_title'] = $data['page_title'] = 'View Associate';
    }

     public function edit($id)
    {
        $data['site_title'] = $data['page_title'] = 'Edit Associate';
        $data['view'] = 'admin.associate.edit';
        $id = ___decrypt($id);
        $data['associateDetails'] = _arefy(\Models\Associate::list('single',$id));
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
            $isUpdated               = \Models\Users::change($request->id,$userData);

            if($isUpdated){
                if($request->status == 'trashed'){
                    $this->message = 'Deleted Associate successfully.';
                }else{
                    $this->message = 'Updated Associate successfully.';
                }
                $this->status = true;
                $this->redirect = true;
                $this->jsondata = [];
            }
        }
       return $this->populateresponse();
    }

    public function  ajaxList(Request $request){
        $language = \App::getLocale();
        $where = 'status = "active"';

        if(!empty($request->search)){
            $where .= " AND name LIKE '%{$request->search}%'";
        }

        $bank = \Models\Associate::all_list(
            'array',
            $where,
            ['name as text', 'id as id']
        );
        return response()->json([
            'results'    => $bank,
        ]);
    }
}
