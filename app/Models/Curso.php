<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    const ESTADO_ACTIVO = 'ACTIVO';
    const ESTADO_DESHABILITADO = 'DESHABILITADO';
    const ESTADO_EN_CURSO = 'EN_CURSO';

    /** @use HasFactory<\Database\Factories\CursoFactory> */
    use HasFactory;
}
