<?php

namespace App\Livewire;

use App\Models\Curso;
use Livewire\Component;

class Panel extends Component
{
    public $verPanel = true;
    public $tab = "";

    public $cursos;
    public Curso $detalle;

    public function togglePanel()
    {
        $this->verPanel = !$this->verPanel;
    }

    public function mostrarGraficas()
    {
        $this->cursos = Curso::all();

        $this->tab = "GRAFICAS";
    }

    public function mostrarInformes()
    {
        $this->cursos = Curso::all();

        $this->tab = "INFORMES";
    }

    public function mostrarDetalle()
    {
        $this->detalle = Curso::first();

        $this->tab = "DETALLE";
    }

    public function render()
    {
        return view('livewire.panel');
    }
}
