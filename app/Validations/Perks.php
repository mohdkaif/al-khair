<?php

namespace Validations;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
/**
* 
*/
class Perks
{
	protected $data;
	public function __construct($data){
		$this->data = $data;
	}

	private function validation($key){
		$validation = [
			/*CNADIDATE REGISTRATION*/
			'applied_department' 	=> ['required'],
			'applied_post'		 	=> ['required'],
			'applied_district'		=> ['required'],
			'name'			 	 	=> ['required','min:'.NAME_MIN_LENGTH,'max:'.NAME_MAX_LENGTH],
			'father_name'	 	 	=> ['required','min:'.NAME_MIN_LENGTH,'max:'.NAME_MAX_LENGTH],
			'mobile'		 	 	=> ['required','min:'.PHONE_NUMBER_MIN_LENGTH,'max:'.PHONE_NUMBER_MAX_LENGTH],
			'address'		 		=> ['required'],
			'district'		 		=> ['required','string'],
			'pincode'		 		=> ['required','min:'.PINCODE_MIN_LENGTH,'max:'.PINCODE_MAX_LENGTH],
			'gender'		 		=> ['required',Rule::in(['male','female'])],
			'dob'			 		=> ['required','before:'.DOB_MIN_LENGTH.' years ago'],
			'aadhar'		 		=> ['required','string'],
			'email'			 		=> ['nullable','email'],
			'bank'			 		=> ['nullable','string'],
			'bank_branch'	 		=> ['nullable','string'],
			'account_number' 		=> ['nullable','string'],
			'ifsc'			 		=> ['nullable','string'],
			'education' 			=> ['required','array'],
			'education_name' 		=> ['required','string'],
			'technical' 			=> ['required','array'],
			'technical_name' 		=> ['required','string'],
			'profile_image' 		=> ['required','image'],
			'order_number_id' 		=> ['required'],
			'type' 					=> ['required'],
		];
		return $validation[$key];
	}

	public function login($value='')
	{
		$validator = Validator::make($this->data->all(), [
		],[]);
		return $validator;
	}

	public function candidateRegistration(){
		$validator = Validator::make($this->data->all(), [
			'profile_image' 		=> $this->validation('profile_image'),
			'applied_department' 	=> $this->validation('applied_department'),
			'applied_post'		 	=> $this->validation('applied_post'),
			'applied_district' 		=> $this->validation('applied_district'),
			'name'					=> $this->validation('name'),
			'father_name'			=> $this->validation('father_name'),
			'mobile'				=> $this->validation('mobile'),
			'address'				=> $this->validation('address'),
			'district' 				=> $this->validation('district'),
			'pincode'				=> $this->validation('pincode'),
			'gender'				=> $this->validation('gender'),
			'dob'					=> $this->validation('dob'),
			'email'					=> $this->validation('email'),
			'aadhar'				=> $this->validation('aadhar'),
			'bank'					=> $this->validation('bank'),
			'bank_branch'			=> $this->validation('bank_branch'),
			'account_number'		=> $this->validation('account_number'),
			'ifsc'					=> $this->validation('ifsc'),
			'education'				=> $this->validation('education'),
			'technical'				=> $this->validation('technical'),
			'education.*'			=> $this->validation('education_name'),
			'technical.*'			=> $this->validation('technical_name'),
		],[
			'applied_department.required' 	=> 'Please Select Department.',
			'candidate_name.required'   	=> 'Name Field is required.',
			'dob.before'   					=> 'Agre must be 18.',
			'email.required'            	=> 'Email Field is required.',
			'email.email'              	    => 'Invalid Email Address.',
			'father_name.required'     		=> 'Father Name required.',
			'mobile.required'				=> 'Mobile Number is required',
			'education.*'					=> 'Education field is required.',
			'technical.*'					=> 'Technical field is required.',
		]);

		
		$validator->after(function ($validator){
			$duplicate_education 	= has_dupes($this->data->education);
			if($duplicate_education){
	    		$validator->errors()->add('education', 'No duplicates are allowed for education field.');
	    	}		
			$duplicate_technical 	= has_dupes($this->data->technical);
			
			if($duplicate_technical){
	    		$validator->errors()->add('technical', 'No duplicates are allowed for technical field.');
	    	}
	    });

		return $validator;
	}
	public function candidateRegistrationEdit(){
		$validator = Validator::make($this->data->all(), [
			//'profile_image' 		=> $this->validation('profile_image'),
			'applied_department' 	=> $this->validation('applied_department'),
			/*'applied_post'		 	=> $this->validation('applied_post'),
			'applied_district' 		=> $this->validation('applied_district'),*/
			'name'					=> $this->validation('name'),
			'father_name'			=> $this->validation('father_name'),
			'mobile'				=> $this->validation('mobile'),
			/*'address'				=> $this->validation('address'),
			'district' 				=> $this->validation('district'),
			'pincode'				=> $this->validation('pincode'),*/
			/*'gender'				=> $this->validation('gender'),*/
			'dob'					=> $this->validation('dob'),
			'email'					=> $this->validation('email'),
			'aadhar'				=> $this->validation('aadhar'),
			'bank'					=> $this->validation('bank'),
			'bank_branch'			=> $this->validation('bank_branch'),
			'account_number'		=> $this->validation('account_number'),
			'ifsc'					=> $this->validation('ifsc'),
			'order_number_id'	    => $this->validation('order_number_id'),
			'type'	    			=> $this->validation('type'),


			
			/*'education'				=> $this->validation('education'),
			'technical'				=> $this->validation('technical'),
			'education.*'			=> $this->validation('education_name'),
			'technical.*'			=> $this->validation('technical_name'),*/
		],[
			'applied_department.required' 	=> 'Please Select Department.',
			'candidate_name.required'   	=> 'Name Field is required.',
			'dob.before'   					=> 'Agre must be 18.',
			/*'email.required'            	=> 'Email Field is required.',
			'email.email'              	    => 'Invalid Email Address.',*/
			'father_name.required'     		=> 'Father Name required.',
			'mobile.required'				=> 'Mobile Number is required',
			/*'education.*'					=> 'Education field is required.',
			'technical.*'					=> 'Technical field is required.',*/
		]);

		/*
		$validator->after(function ($validator){
			$duplicate_education 	= has_dupes($this->data->education);
			if($duplicate_education){
	    		$validator->errors()->add('education', 'No duplicates are allowed for education field.');
	    	}		
			$duplicate_technical 	= has_dupes($this->data->technical);
			
			if($duplicate_technical){
	    		$validator->errors()->add('technical', 'No duplicates are allowed for technical field.');
	    	}
	    });*/

		return $validator;
	}
}