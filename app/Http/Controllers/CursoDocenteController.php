<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Docente;
use Illuminate\Http\Request;

class CursoDocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Curso $curso)
    {
        $data = $request->validate([
            'docentes' => ''
        ]);

//        $curso->docentes()->attach($data['docentes']);
//        $curso->docentes()->detach($data['docentes']);
        $curso->docentes()->syncWithoutDetaching($data['docentes']);
//        $curso->docentes()->sync($data['docentes'], false);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso, Docente $docente)
    {
        $curso->docentes()->detach($docente);

        return back();
    }
}
