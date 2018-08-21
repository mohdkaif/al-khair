<?php

namespace Validations;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
/**
* 
*/
class System
{
	protected $data;
	public function __construct($data){
		$this->data = $data;
	}

	private function validation($key){
		$validation = [
			/*CNADIDATE REGISTRATION*/
			'department_name' 	=> ['required','string'],
		];
		return $validation[$key];
	}

	public function department($action){
		$validations = [
			'name'  => array_merge($this->validation('department_name'),[Rule::unique('department')->ignore('trashed','status')])
		];

		if($action == 'edit'){
			$validations['name'] = array_merge($this->validation('department_name'),[
				Rule::unique('department')->ignore('trashed','status')->where(function($query){
					$query->where('id','!=',$this->data->id);
				})
			]);
		}
		$validator = Validator::make($this->data->all(), $validations,[
		]);

		return $validator;
	}
}