<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['username', 'password'];
        
        public function dosen(){
        	return $this->hasOne(Dosen::class);
        }

        public function mahasiswa(){
        	return $this->hasOne(mahasiswa::class);
        }
        
    //     public function peran(){
    //     	return $this->belongsToMany(peran::class);
    // {
    // 	return $this->hasOne(Mahasiswa::class);	
    // }
}
