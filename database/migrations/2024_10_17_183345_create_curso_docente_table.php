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
        Schema::create('curso_docente', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Curso::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(\App\Models\Docente::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();

            $table->unique(['curso_id', 'docente_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curso_docente');
    }
};
