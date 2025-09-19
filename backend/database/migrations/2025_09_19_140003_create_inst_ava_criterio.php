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
        Schema::create('inst_ava_criterio', function (Blueprint $table) {
            $table->id();
            $table->string('criterio');
            $table->string('descricao')->nullable();
            $table->foreignId('id_papel')->constrained('inst_ava_papel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inst_ava_criterio');
    }
};
