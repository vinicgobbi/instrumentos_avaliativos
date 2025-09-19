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
        Schema::create('inst_ava_nota', function (Blueprint $table) {
            $table->id();
            $table->integer('conceito');
            $table->string('feedback')->nullable();
            $table->string('aluno', 10);
            $table->foreignId('id_criterio')->constrained('inst_ava_criterio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inst_ava_nota');
    }
};
