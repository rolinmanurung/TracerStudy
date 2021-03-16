<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->string('n_p');
            $table->string('jabatan');
            $table->string('email');
            $table->string('no_telp', 12);
            $table->string('n_a', 100);
            $table->string('ktp1')->nullable();
            $table->string('ktp2')->nullable();
            $table->string('ktp3')->nullable();
            $table->string('ktp4')->nullable();
            $table->string('ktp5')->nullable();
            $table->string('ktp6')->nullable();
            $table->string('ktp7')->nullable();
            $table->string('ktp8')->nullable();
            $table->string('ktp9')->nullable();
            $table->string('ktp10')->nullable();
            $table->string('ktp11')->nullable();
            $table->string('ktp12')->nullable();
            $table->string('ktp13')->nullable();
            $table->string('ktp14')->nullable();
            $table->string('ktp15')->nullable();
            $table->string('ktp16')->nullable();
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
        Schema::dropIfExists('perusahaan');
    }
}
