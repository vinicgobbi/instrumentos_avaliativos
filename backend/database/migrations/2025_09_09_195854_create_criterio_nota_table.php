<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new Class extends Migration
{
    public function up():void
    {
        Schema::create('inst_ava_criterio_nota', function(Blueprint $table) {
            $table->id();
            $table->foreignId('criterio_id')->constrained('inst_ava_criterio')->cascadeOnDelete();
            $table->foreignId('nota_id')->constrained('inst_ava_nota')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('inst_ava_criterio_nota');
    }
};