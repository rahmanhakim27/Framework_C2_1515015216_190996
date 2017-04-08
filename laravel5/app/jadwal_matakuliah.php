<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    protected $table = 'jadwal_matakuliah';
     protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
     protected $guarded = ['id'];

    public function mahasiswa(){
        return $this->belongsTo(mahasiswa::class);
    }

    public function dosen_matakuliah(){
        return $this->belongsTo(dosen_matakuliah::class);
    }

    // public function listMahasiswaDanNim()
    // {
    //     $out = [];
    //     foreach ($this->all() as $mhs) {
    //         $out [$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
    //     }
    //     return $out;
    // }

    public function ruangan(){
        return $this->belongsTo(ruangan::class);
    }
     public function getNamadsnAttribute(){
         return $this->dosen_matakuliah->dosen->nama;
     }
     public function getNipdsnAttribute(){
         return $this->dosen_matakuliah->dosen->nip;
     }
     public function getMKdsnAttribute(){
         return $this->dosen_matakuliah->matakuliah->title;
     }
    
     public function getNamamhsAttribute(){
         return $this->mahasiswa->nama;
     }

     public function getNimAttribute(){
         return $this->mahasiswa->nim;
     }
     public function getTitleruanganAttribute(){
         return $this->ruangan->title;
     }
    
     public function listDosenMatakuliahDanMahasiswaDanRuangan()
     {
      $out = [];
      foreach ($this->all() as $jdwlMtk) {
          $out[$jdwlMtk->id] = "{$jdwlMtk->dosen_matakuliah->dosen->nama} {$jdwlMtk->dosen_matakuliah->dosen->nama} {$jdwlMtk->mahasiswa->nama} (Ruangan {$jdwlMtk->ruangan->title})";
      }
      return $out;
     }
}
