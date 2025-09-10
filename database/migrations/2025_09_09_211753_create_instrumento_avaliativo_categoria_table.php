<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new Class extends Migration
{
    public function up():void
    {
        Schema::create('instrumento_avaliativo_categoria', function(Blueprint $table) {
            $table->id();
            $table->foreignId('instrumento_id')->constrained('instrumento_avaliativo')->cascadeOnDelete();
            $table->foreignId('categoria_id')->constrained('inst_ava_categoria')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('instrumento_avaliativo_categoria');
    }
};