<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscripciones = Inscripcion::query()
            ->with('user')
//            ->whereHas('user', function (Builder $builder) {
//                return $builder
//                    ->where('name', 'like', 't%')
//                    ->whereLike()
//                    ;
//            })
//                ->join('users', 'inscripciones.user_id', 'users.id')
//            ->where('users.name', 'like')

            ->get();

        return view('dashboard.inscripciones.index', compact('inscripciones'));
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
    public function store(Request $request)
    {
//        DB::beginTransaction();
//
//        DB::rollBack();
//
//        DB::commit();
//
//        DB::transaction(function() {
//
//        });
    }

    /**
     * Display the specified resource.
     */
    public function show(Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscripcion $inscripcione)
    {
        $inscripcione->delete();

        return back();
    }
}
