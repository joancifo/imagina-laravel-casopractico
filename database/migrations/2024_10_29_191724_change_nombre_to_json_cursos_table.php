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
        Schema::table('cursos', function (Blueprint $table) {
            $table->json('nombre_temp')->nullable();
        });

        \App\Models\Curso::all()->each(function(\App\Models\Curso $curso) {
            $curso->nombre_temp = ['es' => $curso->getAttribute('nombre')];
            $curso->save();
        });

        Schema::table('cursos', function (Blueprint $table) {
            $table->dropColumn('nombre');
            $table->renameColumn('nombre_temp', 'nombre');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cursos', function (Blueprint $table) {
            //
        });
    }
};
