<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\jadwal_matakuliah;

class JadwalMatakuliahController extends Controller
{
      public function awal()
    {
        return "INI HALAMAN JADWAL MATAKULIAH";
    }

    public function tambah()
    {
        return $this->simpan();
    }

    public function simpan()
    {
        $jadwal_matakuliah = new Jadwal_Matakuliah();
        $jadwal_matakuliah->mahasiswa_id   = '1';
        $jadwal_matakuliah->ruangan_id   = '1';
        $jadwal_matakuliah->dosen_matakuliahh_id    = '1';
        $jadwal_matakuliah->save();
        return "Data Jadwal yang mengajar telah tersimpan di dalam database";
    }
}
