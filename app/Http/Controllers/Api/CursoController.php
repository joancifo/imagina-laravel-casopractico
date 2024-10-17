<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        if (!$request->has('q')) {
//            return Curso::query()->get();
//        }

        return Curso::query()
            ->when($request->has('codigo'), fn($query) => $query->whereLike('codigo', "%$request->codigo%"))
            ->when($request->has('nombre'), fn($query) => $query->whereLike('nombre', "%$request->nombre%"))
            ->when($request->has('descripcion'), fn($query) => $query->whereLike('descripcion', "%$request->descripcion%"))
//            ->when($request->has('codigo'), fn($query) => $query->whereLike('codigo', "%$request->codigo%"))
//            ->whereLike('codigo', "%$request->q%")
//            ->orWhereLike('nombre', "%$request->q%")
//            ->orWhereLike('descripcion', "%$request->q%")
//            ->getBindings();
            ->get();


        return response([
            'data' => Curso::query()->get([
                'codigo',
                'nombre',
                'descripcion',
                'fecha_inicio',
                'fecha_fin'
            ])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curso $curso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        //
    }
}
