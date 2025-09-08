<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new Class extends Migration
{
    public function up():void
    {
        Schema::create('instrumento_avaliativo', function(Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descricao');
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('instrumento_avaliativo');
    }
};