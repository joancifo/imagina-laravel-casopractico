<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public string $tipo;
    public string $mensaje;

    /**
     * Create a new component instance.
     */
    public function __construct(string $tipo, string $mensaje)
    {
        $this->tipo = $tipo;
        $this->mensaje = $mensaje;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
