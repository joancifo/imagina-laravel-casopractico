<?php

namespace App\Livewire;

use App\Models\Curso;
use Livewire\Component;

class Panel extends Component
{
    public $verPanel = true;

    public $tab = "";

    public function togglePanel()
    {
        $this->verPanel = !$this->verPanel;
    }

    public function cambiarTab($tab)
    {
        $this->tab = $tab;
    }

    public function render()
    {
        return view('livewire.panel');
    }
}
