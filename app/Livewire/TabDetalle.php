<?php

namespace App\Livewire;

use App\Models\Curso;
use Livewire\Component;

class TabDetalle extends Component
{
    public $cursoDetalle;

    public function render()
    {
        return view('livewire.tab-detalle');
    }

}
