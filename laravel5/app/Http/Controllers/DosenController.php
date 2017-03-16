<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\dosen;

class DosenController extends Controller
{
	public function awal()
	{
		return "INI HALAMAN DOSEN";
	}

	public function tambah()
	{
		return $this->simpan();
	}

	public function simpan()
	{
		$dosen = new Dosen();
		$dosen->nama   = 'Drs. H. Rahman Hakim';
		$dosen->nip    = '1515015216123';
		$dosen->alamat = 'Jln. P.M Noor';
		$dosen->pengguna_id = '1';
		$dosen->save();
		return "Data Dosen dengan nama {$dosen->nama} telah tersimpan di dalam database";
	}
}
