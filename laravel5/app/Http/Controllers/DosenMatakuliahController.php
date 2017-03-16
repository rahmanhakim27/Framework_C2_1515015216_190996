<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\dosenmatakuliah;

class DosenMatakuliahController extends Controller
{
	public function awal()
	{
		return "INI HALAMAN DOSEN MATAKULIAH";
	}

	public function tambah()
	{
		return $this->simpan();
	}

	public function simpan()
	{
		$dosenmatakuliah = new DosenMatakuliah();
		$dosenmatakuliah->dosen_id   = '1';
		$dosenmatakuliah->matakuliah_id    = '1';
		$dosenmatakuliah->save();
		return "Data Dosen yang mengajar telah tersimpan di dalam database";
	}
}
