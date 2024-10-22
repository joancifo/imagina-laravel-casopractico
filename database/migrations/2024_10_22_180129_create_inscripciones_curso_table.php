<?php

use App\Models\Curso;
use App\Models\User;
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
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Curso::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->unsignedTinyInteger('estado')->default(0);
            $table->string('documento')->nullable();

            $table->timestamp('fecha_inscripcion')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->unique(['curso_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripciones_curso');
    }
};
