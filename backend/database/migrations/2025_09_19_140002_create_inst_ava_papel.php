<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inst_ava_papel', function (Blueprint $table) {
            $table->id();
            $table->string('papel');
            $table->string('descricao');
            $table->foreignId('id_categoria')->constrained('inst_ava_categoria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inst_ava_papel');
    }
};
