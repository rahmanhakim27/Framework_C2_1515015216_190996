<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ruangan;

class RuanganController extends Controller
{
  /*  public function awal()
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
    }*/
    public function awal()
    {
        return view('ruangan.awal', ['data'=>Ruangan::all()]);
    }

    public function tambah()
    {
        return view('ruangan.tambah');
    }
    public function simpan(Request $input)
    {
        $ruangan = new Ruangan();
        $ruangan->title = $input->title;
        $informasi = $ruangan->save()? 'Berhasil simpan data' : 'gagal simpan data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }

public function edit($id)
{
    $ruangan = Ruangan::find($id);
    return view('ruangan.edit')->with(array('ruangan'=>$ruangan));
}

public function lihat($id)
{
    $ruangan = Ruangan::find($id);
    return view('ruangan.lihat')->with(array('ruangan'=>$ruangan));
}

public function update($id, Request $input)
    {
        $ruangan = Ruangan::find($id);
        $ruangan->title = $input->title;
        $informasi = $ruangan->save()? 'Berhasil simpan data' : 'gagal simpan data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }

    public function hapus($id)
    {
        $ruangan = Ruangan::find($id);
        $informasi = $ruangan->delete() ? "berhasil hapus data" : 'Gagal hapus data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }
}
