<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosenmatakuliah extends Model
{
    protected $table = 'dosen_matakuliahh';
	public function pengguna()
	{
    	return $this->belongsTo(Pengguna::class);
    }
    public function dosen_matakuliah()
    {
    	return $this->hasMany(dosen_matakuliah::class,'dosen_id');
    }
}

