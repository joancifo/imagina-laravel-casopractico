<?php

namespace App\Livewire;

use Livewire\Component;

class Perfil extends Component
{
    public $inscripciones;
    public $cursos;

    public function render()
    {
        return view('livewire.perfil');
    }

    public function mount()
    {
        $this->inscripciones = auth()->user()->inscripciones()
            ->with('curso')
            ->whereHas('curso', function($builder) {
//                return $builder->where('estado', 1);
            })
            ->get();
        $this->cursos = auth()->user()->cursos;
    }
}
