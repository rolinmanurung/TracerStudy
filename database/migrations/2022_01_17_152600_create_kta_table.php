<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKtaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kta', function (Blueprint $table) {
            $table->id();            
            $table->foreignId('alumni_id')->constrained('alumni')->onDelete('cascade');
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
        Schema::dropIfExists('kta');
    }
}
