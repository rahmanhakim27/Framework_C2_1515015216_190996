<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ruangan;

class RuanganController extends Controller
{
    public function awal()
    {
    	return "INI HALAMAN UNTUK RUANGAN";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$ruangan = new Ruangan();
    	$ruangan->title   = 'Ruangan 407';
    	$ruangan->save();
    	return "Ruangan dengan nama {$ruangan->title} telah tersimpan di dalam database";
    }
}
