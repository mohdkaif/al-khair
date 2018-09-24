<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;

class DashboardController extends Controller
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
        $data['site_title'] = $data['page_title'] = 'List';
        $data['breadcrumb'] = '<ul class="page-breadcrumb breadcrumb"><li><a href="">Home</a><i class="fa fa-circle"></i></li><li><a href="#">Doctors</a><i class="fa fa-circle"></i></li><li><a href="#">List</a></li></ul>';
        $data['view'] = 'admin.dashboard';
        $doctors  = (\Models\Doctors::list('count'));
        $hospitals  = (\Models\Hospitals::list('count'));
        $services  = (\Models\Services::list('count'));
        
        $appointments  = (\Models\Appointments::list('count'));
        $list=[
            'doctors'=> $doctors,
            'hospitals'=> $hospitals,
            'services'=> $services,
            'appointments'=> $appointments
        ];
        $data['list'] = $list;
        return view('home')->with($data);
    }

}
