<?php

namespace App\Livewire;

use App\Models\Curso;
use Livewire\Component;

class TabGraficas extends Component
{
    public $cursos;

    public function render()
    {
        return view('livewire.tab-graficas');
    }

    public function mount() {
        $this->cursos = Curso::all();
    }
}
