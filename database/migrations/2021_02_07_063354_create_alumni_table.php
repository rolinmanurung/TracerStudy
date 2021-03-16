<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id');
            $table->string('nama', 100);
            $table->string('alamat', 50);
            $table->string('no_telp',12);
            $table->string('nim', 10);
            $table->string('email');
            $table->string('prodi');
            $table->string('jenjang');
            $table->string('t_masuk', 4);
            $table->string('t_lulus', 4);
            $table->decimal('ipk', 2, 1);
            $table->string('kta1')->nullable();
            $table->string('kta2')->nullable();
            $table->string('kta3')->nullable();
            $table->string('kta4')->nullable();
            $table->string('kta5')->nullable();
            $table->string('kta6')->nullable();
            $table->string('kta7')->nullable();
            $table->string('kta8')->nullable();
            $table->string('kta9')->nullable();
            $table->string('kta10')->nullable();
            $table->string('kta11')->nullable();
            $table->string('kta12')->nullable();
            $table->string('kta13')->nullable();
            $table->string('kta14')->nullable();
            $table->string('kta15')->nullable();
            $table->string('kta16')->nullable();
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
        Schema::dropIfExists('alumni');
    }
}
