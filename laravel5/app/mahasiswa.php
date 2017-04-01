<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
  protected $table = 'mahasiswa';
	public function pengguna()
	{
		return $this->belongsTo(pengguna::class);	
	}
	public function jadwal_matakuiah(){
    	return $this->hasMany(jadwal_matakuiah::class,'Mahasiswa_id');
    }
}
