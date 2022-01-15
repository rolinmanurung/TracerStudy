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
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');;
            $table->string('kta1');
            $table->string('kta2');
            $table->string('kta3');
            $table->string('kta4');
            $table->string('kta5');
            $table->string('kta6');
            $table->string('kta7');
            $table->string('kta8');
            $table->string('kta9');
            $table->string('kta10');
            $table->string('kta11');
            $table->string('kta12');
            $table->string('kta13');
            $table->string('kta14');
            $table->string('kta15');
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
