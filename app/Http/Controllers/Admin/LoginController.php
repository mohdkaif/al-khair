<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validations\Doctor as Validations;
class LoginController extends Controller
{
	 public function __construct(Request $request)
    {
        parent::__construct($request);
    }
    public function login(){
    	$data['view'] = 'd';
    	return view('login',$data);
    }

    public function authentication(Request $request){
    	 $validation = new Validations($request);
        $validator  = $validation->login();
        if($validator->fails()){
            $this->message = $validator->errors();
        }else{
			$credentials = [
			'email' => $request['username'],
			'password' => $request['password'],
			];

			// Dump data
			//dd($credentials);

			if (\Auth::attempt($credentials)) {
				return redirect('admin/associate');
			}
		}
		return $this->populateresponse();
    }

    public function logout(Request $request) {
          Auth::logout();
          return redirect('admin/login');
    }  
}
