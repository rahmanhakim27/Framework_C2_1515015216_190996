<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\jadwal_matakuliah;

class JadwalMatakuliahController extends Controller
{
      public function awal()
    {
        // return "INI HALAMAN JADWAL MATAKULIAH";
            return view('jadwal_matakuliah.awal',['data'=>Jadwal_Matakuliah::all()]);
    }

    public function tambah()
    {
        return view('jadwal_matakuliah.tambah');
    }

    public function simpan()
    {
        // $jadwal_matakuliah = new Jadwal_Matakuliah();
        // $jadwal_matakuliah->mahasiswa_id   = '1';
        // $jadwal_matakuliah->ruangan_id   = '1';
        // $jadwal_matakuliah->dosen_matakuliahh_id    = '1';
        // $jadwal_matakuliah->save();
        // return "Data Jadwal yang mengajar telah tersimpan di dalam database";
        $jadwal_matakuliah = new Jadwal_Matakuliah();
        $jadwal_matakuliah->mahasiswa_id = $input->mahasiswa_id;
        $jadwal_matakuliah->ruangan_id = $input->ruangan_id;
        $jadwal_matakuliah->dosen_matakuliah_id = $input->dosen_matakuliah_id;
        $informasi = $jadwal_matakuliah->save() ? 'Berhasil menyimpan data':'Gagal simpan data';
        return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $jadwal_matakuliah = Jadwal_Matakuliah::find($id);
        return view('jadwal_matakuliah.edit')->with(array('jadwal_matakuliah'=>$jadwal_matakuliah));
    }

    public function lihat($id)
    {
        $jadwal_matakuliah = Jadwal_Matakuliah::find($id);
        return view('jadwal_matakuliah.lihat')->with(array('jadwal_matakuliah'=>$jadwal_matakuliah));   
    }

    public function update($id, Request $input)
    {
        $jadwal_matakuliah = Jadwal_Matakuliah::find($id);
        $jadwal_matakuliah->mahasiswa_id = $input->mahasiswa_id;
        $jadwal_matakuliah->ruangan_id = $input->ruangan_id;
        $jadwal_matakuliah->dosen_matakuliah_id = $input->dosen_matakuliah_id;
        $informasi = $jadwal_matakuliah->save() ? 'Berhasil mengupdate data':'Gagal update data';
        return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);   
    }

    public function hapus($id)
    {
        $jadwal_matakuliah = Jadwal_Matakuliah::find($id);
        $informasi = $jadwal_matakuliah->delete() ? 'Berhasil menghapus data':'Gagal hapus data';
        return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
    }

}
