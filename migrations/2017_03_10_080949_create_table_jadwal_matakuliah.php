<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJadwalMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_matakuliah', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('mahasiswa_id',false,true);
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
            $table->integer('ruangan_id',false,true);
            $table->foreign('ruangan_id')->references('id')->on('ruangan');

            $table->integer('dosen_matakuliahh_id',false,true);
            $table->foreign('dosen_matakuliahh_id')->references('id')->on('dosen_matakuliahh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jadwal_matakuliah');
    }
}
