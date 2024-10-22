<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\CursoDocenteController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.'
], function() {
    Route::resource('cursos', CursoController::class);
    Route::post('cursos/{curso}/docentes', [CursoDocenteController::class, 'store'])->name('cursos.docentes.store');
    Route::delete('cursos/{curso}/docentes/{docente}', [CursoDocenteController::class, 'destroy'])->name('cursos.docentes.destroy');
});


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
