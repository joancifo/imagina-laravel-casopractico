<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::all();

//        return view('dashboard.cursos.index', compact('cursos'));

        return view('dashboard.cursos.index', [
            'cursos' => $cursos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'codigo' => 'required|unique:cursos,codigo',
            'nombre' => 'required',
            'descripcion' => '',
            'fecha_inicio' => 'nullable|date',
            'fecha_fin' => 'nullable|date|after:fecha_inicio'
        ]);

        Curso::create($data);

        return redirect()->to(route('dashboard.cursos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        return view('dashboard.cursos.edit', [
            'curso' => $curso
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curso $curso)
    {
        $data = $request->validate([
            'codigo' => [
                'required',
                Rule::unique('cursos')->ignoreModel($curso)
            ],
//            'codigo' => "required|unique:cursos,codigo,$curso->id",
            'nombre' => 'required',
            'descripcion' => '',
            'fecha_inicio' => 'nullable|date',
            'fecha_fin' => 'nullable|date|after:fecha_inicio'
        ]);

        $curso->update($data);

        return redirect()->to(route('dashboard.cursos.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->to(route('dashboard.cursos.index'));
    }
}
