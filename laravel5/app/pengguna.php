<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Pengguna extends Model implements AuthenticatableContract
{
	use Authenticatable;
    protected $table = 'pengguna';
    protected $fillable = ['Username','Password'];

	public function dosen(){
	return $this->hasOne(dosen::class,'pengguna_id');
	

}    

public function mahasiswa(){
	return $this->hasOne(Mahasiswa::class,'pengguna_id');
}


public function peran(){
	return $this->belongsToMany(peran::class);
}

}
