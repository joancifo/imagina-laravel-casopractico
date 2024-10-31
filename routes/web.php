<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\CursoDocenteController;
use App\Http\Controllers\InscripcionController;
use App\Livewire\FormularioInscripcion;
use App\Livewire\Panel;
use App\Livewire\Perfil;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Route;

Route::get('/panel', Panel::class);

Route::get('/', function () {
    $cursos = Curso::query()
        ->where('estado', Curso::ESTADO_DESHABILITADO)
        ->when(auth()->check(), function ($builder) {
            $builder->whereDoesntHave('inscripciones', function (Builder $builder) {
                return $builder->where('user_id', auth()->user()->id);
            });
        })

//        ->where(function(Builder $builder) {
//            $builder->where('estado', 1)
//                ->orWhere('estado', 2);
//        })
        ->get();

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
    'as' => 'dashboard.',
    'middleware' => [
        'auth',
        'verified',
        'role:Alumno|Gestor'
    ]
], function () {
    Route::resource('cursos', CursoController::class);
    Route::resource('inscripciones', InscripcionController::class);
    Route::resource('alumnos', AlumnoController::class);
    Route::post('cursos/{curso}/docentes', [CursoDocenteController::class, 'store'])->name('cursos.docentes.store');
    Route::delete('cursos/{curso}/docentes/{docente}', [CursoDocenteController::class, 'destroy'])->name('cursos.docentes.destroy');
});


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
