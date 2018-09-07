<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['view'] = 'front/index';
        $data['site_title'] = $data['page_title'] = 'Home';
        $data['breadcrumb'] = '<ul class="page-breadcrumb breadcrumb"><li><a href="">Home</a><i class="fa fa-circle"></i></li></ul>';
        return view('front_home',$data);
    }

     public function contact()
    {
        $data['view'] = 'front/contact';
        $data['site_title'] = $data['page_title'] = 'Home';
        $data['breadcrumb'] = '<ul class="page-breadcrumb breadcrumb"><li><a href="">Home</a><i class="fa fa-circle"></i></li></ul>';
        return view('front_home',$data);
    }

    public function aboutUs()
    {
        $data['view'] = 'front/about-us';
        $data['site_title'] = $data['page_title'] = 'Home';
        $data['breadcrumb'] = '<ul class="page-breadcrumb breadcrumb"><li><a href="">Home</a><i class="fa fa-circle"></i></li></ul>';
        return view('front_home',$data);
    }
}
