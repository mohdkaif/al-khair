<?php

namespace Validations;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
/**
* 
*/
class Associate
{
	protected $data;
	public function __construct($data){
		$this->data = $data;
	}

	private function validation($key){
		$validation = [
			'id'				=> ['required'],
			'email'				=> ['required','email','unique:users'],
			'first_name' 		=> ['required','string'],
			'last_name' 		=> ['required','string'],
			'Associate_id' 		=> ['required','string'],
			'date_of_birth' 	=> ['required','string'],
			'gender' 			=> ['required','string'],
			'phone_code' 		=> ['required','string'],
			'mobile_number' 	=> ['required','numeric'],
			'address' 			=> ['required','string','max:500'],
			'marital_status' 	=> ['required','string'],
			'date_of_joining' 	=> ['required','string'],
			'profile_picture' 	=> ['required'],
			'pin_code' 			=> ['required','max:6','min:4'],
			'password' 			=> ['required','min:6','same:confirm_password'],
			'confirm_password' 	=> ['required','min:6']
		];
		return $validation[$key];
	}

	public function createAssociate($action='add'){
        $validations = [
            'first_name' 		=> $this->validation('first_name'),
            'last_name' 		=> $this->validation('last_name'),
			'email'  			=> array_merge($this->validation('email'),[Rule::unique('users')->ignore('trashed','status')]),
			'country_code'		=> $this->validation('phone_code'),
			'mobile_number'  	=> array_merge($this->validation('mobile_number'),[Rule::unique('users')->ignore('trashed','status')]),
			'gender'			=> $this->validation('gender'),
            'date_of_birth' 	=> $this->validation('date_of_birth'),
            'profile_picture' 	=> $this->validation('profile_picture'),
			'street'			=> $this->validation('address'),
			'city'				=> $this->validation('address'),
			'state'				=> $this->validation('address'),
			'pin_code'			=> $this->validation('pin_code'),
			'country'			=> $this->validation('address'),
			'password'			=> $this->validation('password'),
			'confirm_password'	=> $this->validation('confirm_password'),

    	];

    	if($action == 'edit'){
    		$validations['id'] = $this->validation('id');
			$validations['email'] = array_merge($this->validation('email'),[
				Rule::unique('users')->ignore('trashed','status')->where(function($query){
					$query->where('id','!=',$this->data->id);
				})
			]);
		}
        $validator = \Validator::make($this->data->all(), $validations,[]);
        
        return $validator;		
	}

	public function createAdmin($action='add'){
        $validations = [
            'first_name' 		=> $this->validation('first_name'),
            'last_name' 		=> $this->validation('last_name'),
			'email'				=> $this->validation('email'),
			'mobile_number'		=> $this->validation('mobile_number'),
            'date_of_birth' 	=> $this->validation('date_of_birth'),
			'gender'			=> $this->validation('gender'),
			/*'current_address'	=> $this->validation('address'),
			'permanent_address'	=> $this->validation('address'),*/
			'password' 			=> 'required|min:6',
			'password_confirmation' => 'required |same:password|min:6'
    	];

    	if($action == 'edit'){
    		$validations['id'] = $this->validation('id');
    	}

        $validator = \Validator::make($this->data->all(), $validations,[]);
        
        return $validator;		
	}


	public function changeStatus(){
		$validator = Validator::make($this->data->all(),[
			'id'    			=> 'required',
			'status'    		=> 'required',
		]);
		return $validator;
	}	
}