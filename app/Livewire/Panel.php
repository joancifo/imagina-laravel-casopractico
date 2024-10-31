<?php

namespace App\Livewire;

use Livewire\Component;

class Panel extends Component
{
    public $showChild = false;

    public function toggleChildVisibility()
    {
        $this->showChild = !$this->showChild;
    }

    public function render()
    {
        return view('livewire.panel');
    }
}
