<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = User::query()->role('Alumno')->get();

        return view('dashboard.alumnos.index', compact('alumnos'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $alumno)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $alumno)
    {
        //
    }
}
