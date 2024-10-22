<?php

use App\Http\Controllers\CursoController;
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
    Route::post('cursos/{curso}/docentes', [CursoController::class, 'storeDocentes'])->name('cursos.docentes');
});


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
