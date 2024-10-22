<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\CursoDocenteController;
use App\Livewire\FormularioInscripcion;
use App\Livewire\Perfil;
use App\Models\Curso;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $cursos = Curso::all();

    return view('welcome', ['cursos' => $cursos]);
});

Route::get('/inscripcion/{curso}', FormularioInscripcion::class)
    ->middleware(['auth', 'verified'])
    ->name('inscripcion');

Route::get('perfil', Perfil::class)
    ->middleware(['auth', 'verified'])
    ->name('perfil');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.'
], function () {
    Route::resource('cursos', CursoController::class);
    Route::post('cursos/{curso}/docentes', [CursoDocenteController::class, 'store'])->name('cursos.docentes.store');
    Route::delete('cursos/{curso}/docentes/{docente}', [CursoDocenteController::class, 'destroy'])->name('cursos.docentes.destroy');
});


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
