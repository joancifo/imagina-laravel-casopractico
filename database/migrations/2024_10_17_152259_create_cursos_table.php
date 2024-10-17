<?php

use App\Models\Curso;
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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('codigo');
            $table->string('descripcion')->nullable();
            $table->enum('estado', [Curso::ESTADO_ACTIVO, Curso::ESTADO_DESHABILITADO, Curso::ESTADO_EN_CURSO])
                ->default(Curso::ESTADO_DESHABILITADO);
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
