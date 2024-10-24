<?php

namespace App\Listeners;

use App\Events\CursoCreado;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EnviarNotificacionCursoCreado
{
    /**
     * Handle the event.
     */
    public function handle(CursoCreado $event): void
    {
        // TODO
    }
}
