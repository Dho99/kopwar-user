<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('anggota_id');
            $table->string('kode_anggota')->unique();
            $table->string('nama_lengkap');
            $table->string('tgl_keanggotaan');
            $table->string('username');
            $table->string('password');
            $table->string('tgl_registrasi');
            $table->string('status');
            $table->string('tgl_nonaktif');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
