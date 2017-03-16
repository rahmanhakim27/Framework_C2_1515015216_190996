<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\mahasiswa;

class MahasiswaController extends Controller
{
        public function awal()
    {
        return "INI HALAMAN MAHASISWA";
    }

    public function tambah()
    {
        return $this->simpan();
    }

    public function simpan()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama   = 'Rahman hakim';
        $mahasiswa->nim    = '1515015216';
        $mahasiswa->alamat = 'Jln. perjuangan 7';
        $mahasiswa->pengguna_id = '1';
        $mahasiswa->save();
        return "Data Mahasiswa dengan nama {$mahasiswa->nama} telah tersimpan di dalam database";
    }
}
