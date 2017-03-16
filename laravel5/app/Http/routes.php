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
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('pengguna','PenggunaController@awal');

Route::get('dosen', 'DosenController@awal');
Route::get('dosen/tambah', 'DosenController@tambah');

Route::get('mahasiswa', 'MahasiswaController@awal');
Route::get('mahasiswa/tambah', 'MahasiswaController@tambah');

Route::get('ruangan', 'RuanganController@awal');
Route::get('ruangan/tambah', 'RuanganController@tambah');

Route::get('matakuliah', 'MatakuliahController@awal');
Route::get('matakuliah/tambah', 'MatakuliahController@tambah');

Route::get('dosenmatakuliah', 'DosenMatakuliahController@awal');
Route::get('dosenmatakuliah/tambah', 'DosenMatakuliahController@tambah');

Route::get('jadwal_matakuliah', 'JadwalMatakuliahController@awal');
Route::get('jadwal_matakuliah/tambah', 'JadwalMatakuliahController@tambah');

Route::get('/', function () {
    return view('welcome');
});
Route::get('pengguna/{pengguna}', function ($pengguna) {
    return "hallo word dari pengguna $pengguna";
});

Route::auth();

Route::get('/home', 'HomeController@index');
