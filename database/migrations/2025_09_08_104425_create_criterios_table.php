<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new Class extends Migration
{
    public function up(): void
    {
        Schema::create('criterios', function(Blueprint $table) {
            $table->id();
            $table->string('criterio');
            $table->string('descricao')->nullable();
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('criterios');
    }
};