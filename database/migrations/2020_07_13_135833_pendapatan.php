<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pendapatan extends Migration
{
    public function up()
    {
        Schema::create('pendapatan', function(Blueprint $table){
            $table->increments('id');
            $table->string('nama');
            $table->string('jenis');
            $table->integer('nominal');
            $table->timestamps();
        });
    }
   public function down()
    {
        Schema::dropIfExists('pendapatan');
    }
}
