<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\matakuliah;

class MatakuliahController extends Controller
{
    public function awal()
    {
    	return "INI HALAMAN UNTUK MATAKULIAH";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$matakuliah = new Matakuliah();
    	$matakuliah->title   = 'Pemograman Framework';
    	$matakuliah->keterangan   = 'Praktikum';
    	$matakuliah->save();
    	return "Matakuliah dengan nama {$matakuliah->title} telah tersimpan di dalam database";
    }
}
