<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new Class extends Migration
{
    public function up():void
    {
        Schema::create('inst_ava_papel_criterio', function(Blueprint $table) {
            $table->id();
            $table->foreignId('papel_id')->constrained('inst_ava_papel')->cascadeOnDelete();
            $table->foreignId('criterio_id')->constrained('inst_ava_criterio')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('inst_ava_papel_criterio');
    }
};