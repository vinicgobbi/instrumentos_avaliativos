<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new Class extends Migration
{
    public function up():void
    {
        Schema::create('inst_ava_categoria', function(Blueprint $table) {
            $table->id();
            $table->string('categoria');
            $table->string('descricao');
            $table->integer('conceito_max');
            $table->integer('conceito_min');
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('inst_ava_categoria');
    }
};