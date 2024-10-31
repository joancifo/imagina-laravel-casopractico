<?php

namespace App\Livewire;

use App\Models\Curso;
use Livewire\Component;

class PanelIzquierdo extends Component
{
    public $cursos;

    public function render()
    {
        return view('livewire.panel-izquierdo');
    }

    public function mount()
    {
        $this->cursos = Curso::all();
    }
}
