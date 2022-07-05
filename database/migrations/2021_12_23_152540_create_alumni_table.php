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
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('alamat');
            $table->string('no_handphone');
            $table->char('nim', 10);
            $table->string('jurusan');
            $table->string('prodi');
            $table->string('jenjang');
            $table->string('tahun_masuk');
            $table->string('tahun_lulus');
            $table->float('ipk', 3, 2);
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
