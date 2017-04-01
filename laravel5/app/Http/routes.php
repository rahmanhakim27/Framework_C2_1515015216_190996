<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route::get('pengguna/tambah','PenggunaController@tambah');
// Route::get('pengguna','PenggunaController@awal');
// Route::get('pengguna/{pengguna}','PenggunaController@lihat');
// Route::post('Pengguna/simpan','PenggunaController@simpan');
// Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
// Route::post('Pengguna/edit/{pengguna}','PenggunaController@update');
// Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');
Route::get('pengguna', 'PenggunaController@awal');
Route::get('pengguna/tambah', 'PenggunaController@tambah');
Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan', 'PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}', 'PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}', 'PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}', 'PenggunaController@hapus');
// Route::post('pengguna/lihat/{pengguna}', 'PenggunaController@lihat');

Route::get('ruangan', 'RuanganController@awal');
Route::get('ruangan/tambah', 'RuanganController@tambah');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}', 'RuanganController@edit');
Route::post('ruangan/edit/{ruangan}', 'RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');
Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');

Route::get('matakuliah', 'MatakuliahController@awal');
Route::get('matakuliah/tambah', 'MatakuliahController@tambah');
Route::get('matakuliah/{matakuliah}', 'MatakuliahController@lihat');
Route::post('matakuliah/simpan', 'MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}', 'MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}', 'MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');
Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');

Route::get('dosen', 'DosenController@awal');
Route::get('dosen/tambah', 'DosenController@tambah');
Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/edit/{dosen}','DosenController@edit');
Route::post('dosen/edit/{dosen}','DosenController@update');
Route::get('dosen/hapus/{dosen}','DosenController@hapus');
Route::get('dosen/lihat/{dosen}','DosenController@lihat');

Route::get('mahasiswa', 'MahasiswaController@awal');
Route::get('mahasiswa/tambah', 'MahasiswaController@tambah');
Route::post('mahasiswa/simpan','mahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','mahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','mahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','mahasiswaController@hapus');
Route::get('mahasiswa/lihat/{mahasiswa}','mahasiswaController@lihat');


Route::get('dosenmatakuliah', 'DosenMatakuliahController@awal');
Route::get('dosenmatakuliah/tambah', 'DosenMatakuliahController@tambah');
Route::post('dosenmatakuliah/simpan','DosenMatakuliahController@simpan');
Route::get('dosenmatakuliah/edit/{dosenmatakuliah}','DosenMatakuliahController@edit');
Route::post('dosenmatakuliah/edit/{dosenmatakuliah}','DosenMatakuliahController@update');
Route::get('dosenmatakuliah/hapus/{dosenmatakuliah}','DosenMatakuliahController@hapus');
Route::get('dosenmatakuliah/lihat/{dosenmatakuliah}','DosenMatakuliahController@lihat');

Route::get('jadwal_matakuliah', 'JadwalMatakuliahController@awal');
Route::get('jadwal_matakuliah/tambah', 'JadwalMatakuliahController@tambah');
Route::post('jadwal_matakuliah/simpan','JadwalMatakuliahController@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','JadwalMatakuliahController@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','JadwalMatakuliahController@update');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','JadwalMatakuliahController@hapus');
Route::get('jadwal_matakuliah/lihat/{jadwal_matakuliah}','JadwalMatakuliahController@lihat');

Route::get('/', function () {
    return view('welcome');
});
// Route::get('pengguna/{pengguna}', function ($pengguna) {
//     return "hallo word dari pengguna $pengguna";
// });
Route::get('relasi',function(){
	$Mahasiswa = App\pengguna::find(1)->Mahasiswa;
	return "$Mahasiswa";
});

Route::get('relasi1',function(){
	$Mahasiswa = App\pengguna::find(1)->Mahasiswa;
	return "$Mahasiswa";
});

Route::auth();

Route::get('/home', 'HomeController@index');