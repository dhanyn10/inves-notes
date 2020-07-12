<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    public function up()
    {
        Schema::create('user', function(Blueprint $table){
            $table->string('id', 10)->primary();
            $table->string('email', 20);
            $table->string('password', 60);
        });
    }
   public function down()
    {
        Schema::dropIfExists('user');
    }
}
