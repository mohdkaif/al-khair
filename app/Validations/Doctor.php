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
			'last_name' 		=> ['nullable','string'],
			'date_of_birth' 	=> ['nullable','string'],
			'gender' 			=> ['required','string'],
			'phone_code' 		=> ['nullable','required_with:mobile_number','string'],
			'mobile_number' 	=> ['nullable','required_with:phone_code','numeric'],
			'country' 			=> ['required','string'],
			'address'           => ['nullable','string','max:500'],
			'qualifications'    => ['required','string','max:500'],
			'specifications'    => ['nullable','string','max:500'],
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

	public function changeStatus(){
		$validator = Validator::make($this->data->all(),[
			'id'    			=> 'required',
			'status'    		=> 'required',
		]);
		return $validator;
	}	
	
}