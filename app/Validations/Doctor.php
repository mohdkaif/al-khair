<?php

namespace Validations;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
/**
* 
*/
class Doctor
{
	protected $data;
	public function __construct($data){
		$this->data = $data;
	}

	private function validation($key){
		$validation = [
			'id'				=> ['required'],
			'email'				=> ['required','email'],
			'first_name' 		=> ['required','string'],
			'name' 				=> ['required','string'],
			'last_name' 		=> ['nullable','string'],
			'date_of_birth' 	=> ['nullable','string'],
			'gender' 			=> ['required','string'],
			'phone_code' 		=> ['nullable','required_with:mobile_number','string'],
			'mobile_number' 	=> ['nullable','required_with:phone_code','numeric'],
			'country' 			=> ['required','string'],
			'address'           => ['nullable','string','max:500'],
			'qualifications'    => ['required','string','max:500'],
			'specifications'    => ['nullable','string','max:500'],
			'description'       => ['nullable','string','max:500'],
			'required_description'       => ['required','string','max:500'],
			'title'             => ['required','string'],
			'profile_picture'   => ['required','image','mimes:jpeg,png,jpg'],
			'pin_code' 			=> ['nullable','max:6','min:4'],
		];
		return $validation[$key];
	}

	public function createDoctor($action='add'){
        $validations = [
            'first_name' 		=> $this->validation('first_name'),
            'last_name' 		=> $this->validation('last_name'),
			'email'  			=> array_merge($this->validation('email'),[Rule::unique('doctors')->ignore('trashed','status')]),
			'country_code'		=> $this->validation('phone_code'),
			'mobile_number'  	=> array_merge($this->validation('mobile_number'),[Rule::unique('doctors')->ignore('trashed','status')]),
			'gender'			=> $this->validation('gender'),
            'date_of_birth' 	=> $this->validation('date_of_birth'),
			'street'			=> $this->validation('address'),
			'city'				=> $this->validation('address'),
			'state'				=> $this->validation('address'),
			'pin_code'			=> $this->validation('pin_code'),
			'country'			=> $this->validation('country'),
            'qualifications'    => $this->validation('qualifications'),
			'specifications'    => $this->validation('specifications')
			

    	];

    	if($action == 'edit'){
    		$validations['id'] = $this->validation('id');
			$validations['email'] = array_merge($this->validation('email'),[
				Rule::unique('doctors')->ignore('trashed','status')->where(function($query){
					$query->where('id','!=',$this->data->id);
				})
			]);
			$validations['mobile_number'] = array_merge($this->validation('mobile_number'),[
				Rule::unique('doctors')->ignore('trashed','status')->where(function($query){
					$query->where('id','!=',$this->data->id);
				})
			]);
		}

        $validator = \Validator::make($this->data->all(), $validations,[]);
        return $validator;		
	}


	public function createService($action='add'){
	        $validations = [
	            'title' 		    => $this->validation('title'),
				'description'		=> $this->validation('required_description'),

	    	];
	    	if($action == 'edit'){

		        $validator = \Validator::make($this->data->all(), $validations,[]);
		        if(!empty($this->data->profile_picture)){
			        $validator->after(function ($validator) {
				        $allowedMimeTypes = ['image/jpeg','image/png','image/bmp'];

				        $v = Validator::make($this->data->profile_picture, array( 'profile_picture' => 'mimes:jpeg,jpg,png', ));

						if(!$allowedMimeTypes){
						   $validator->errors()->add('profile_picture', 'The profile picture field should be in a jpeg/png/bmp format');
						}
				           
		    		});
		        }
	    	}else{
	    		$validator = \Validator::make($this->data->all(), $validations,[]);
		        if(!empty($this->data->profile_picture)){
			        $validator->after(function ($validator) {
				        $allowedMimeTypes = ['image/jpeg','image/png','image/bmp'];
						$contentType = mime_content_type('path/to/image');

						if(! in_array($contentType, $allowedMimeTypes) ){
						   $validator->errors()->add('profile_picture', 'The profile picture field should be in a jpeg/png/bmp format');
						}
				           
		    		});

		    	
		        }else{
		        		$validator->errors()->add('profile_picture', 'this feild is required.');
		        }

	    	}
	        return $validator;		
		}
	public function createHospital($action='add'){
        $validations = [
            'name' 		        => $this->validation('name'),
			'country_code'		=> $this->validation('phone_code'),
			'mobile_number'  	=> array_merge($this->validation('mobile_number'),[Rule::unique('doctors')->ignore('trashed','status')]),
			'street'			=> $this->validation('address'),
			'city'				=> $this->validation('address'),
			'state'				=> $this->validation('address'),
			'pin_code'			=> $this->validation('pin_code'),
			'country'			=> $this->validation('country'),
			'description'       => $this->validation('description')
			

    	];

    	if($action == 'edit'){
    		$validations['id'] = $this->validation('id');
			$validations['mobile_number'] = array_merge($this->validation('mobile_number'),[
				Rule::unique('doctors')->ignore('trashed','status')->where(function($query){
					$query->where('id','!=',$this->data->id);
				})
			]);
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