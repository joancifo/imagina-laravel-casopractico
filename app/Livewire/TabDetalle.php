<?php

namespace App\Livewire;

use App\Models\Curso;
use Livewire\Component;

class TabDetalle extends Component
{
    public Curso $detalle;

    public function render()
    {
        return view('livewire.tab-detalle');
    }

    public function mount()
    {
        $this->detalle = Curso::first();
    }
}
