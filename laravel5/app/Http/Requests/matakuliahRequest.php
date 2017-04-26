<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

class MatakuliahRequest extends Request{
	public function authorize(){
		return true;
	}


public function rules()
{
	$validasi = ['id'=>'required',
				  'title'=>'required'];

if($this -> is('matakuliah/tambah')){
}
return $validasi;
}
}