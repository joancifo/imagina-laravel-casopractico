<?php

namespace App\Observers;

use App\Models\Inscripcion;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class InscripcionObserver
{
    public function deleted(Inscripcion $inscripcion): void
    {
        if ($inscripcion->documento) {
            try {
                Storage::disk('public')->delete($inscripcion->documento);
            } catch (\Exception $exception) {
                Log::error($exception);
            }
        }
    }
}
