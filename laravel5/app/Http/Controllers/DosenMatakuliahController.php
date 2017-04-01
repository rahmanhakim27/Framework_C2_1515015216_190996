<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\dosenmatakuliah;
use App\dosen;
use App\matakuliah;
use App\jadwal_matakuliah;


class DosenMatakuliahController extends Controller
{
	public function awal()
	{
		// return "INI HALAMAN DOSEN MATAKULIAH";
	return view('dosenmatakuliah.awal',['data'=>DosenMatakuliah::all()]);
	}

	public function tambah()
	{
		//return $this->simpan();
		return view('dosenmatakuliah.tambah');
	}

	public function simpan()
	{
		// $dosenmatakuliah = new DosenMatakuliah();
		// $dosenmatakuliah->dosen_id   = '1';
		// $dosenmatakuliah->matakuliah_id    = '1';
		// $dosenmatakuliah->save();
		// return "Data Dosen yang mengajar telah tersimpan di dalam database";
		$dosenmatakuliah = new DosenMatakuliah();
        $dosenmatakuliah->dosen_id = $input->dosen_id;
        $dosenmatakuliah->matakuliah_id = $input->matakuliah_id;
        $informasi = $dosenmatakuliah->save() ? 'Berhasil menyimpan data':'Gagal simpan data';
        return redirect('dosenmatakuliah')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
    {
        $dosenmatakuliah = DosenMatakuliah::find($id);
        return view('dosenmatakuliah.edit')->with(array('dosenmatakuliah'=>$dosenmatakuliah));
    }

    public function lihat($id)
    {
        $dosenmatakuliah = DosenMatakuliah::find($id);
        return view('dosenmatakuliah.lihat')->with(array('dosenmatakuliah'=>$dosenmatakuliah));   
        }

    public function update($id, Request $input)
    {
        $dosenmatakuliah = DosenMatakuliah::find($id);
        $dosenmatakuliah->dosen_id = $input->dosen_id;
        $dosenmatakuliah->matakuliah_id = $input->matakuliah_id;
        $informasi = $dosenmatakuliah->save() ? 'Berhasil mengupdate data':'Gagal update data';
        return redirect('dosenmatakuliah')->with(['informasi'=>$informasi]);
    }

    public function hapus($id)
    {
        $dosenmatakuliah = DosenMatakuliah::find($id);
        $informasi = $dosenmatakuliah->delete() ? 'Berhasil menghapus data':'Gagal hapus data';
        return redirect('dosenmatakuliah')->with(['informasi'=>$informasi]);

    }
}