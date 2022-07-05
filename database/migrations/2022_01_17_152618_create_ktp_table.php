<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKtpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ktp', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jabatan');
            $table->string('no_handphone');
            $table->string('nama_perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('email_perusahaan');
            $table->string('nama_alumni');
            $table->string('ktp1');
            $table->string('ktp2');
            $table->string('ktp3');
            $table->string('ktp4');
            $table->string('ktp5');
            $table->string('ktp6');
            $table->string('ktp7');
            $table->string('ktp8');
            $table->string('ktp9');
            $table->string('ktp10');
            $table->string('ktp11');
            $table->string('ktp12');
            $table->string('ktp13');
            $table->string('ktp14');
            $table->string('ktp15');
            $table->string('ktp16');
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
        Schema::dropIfExists('ktp');
    }
}
