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

    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin'
    ];

    protected $casts = [
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date'
    ];

//    protected $dateFormat = 'd/m/Y';



    protected function getEstadoTextoAttribute()
    {
        switch ($this->attributes['estado']) {
            case self::ESTADO_ACTIVO:
                return __('Activo');
            case self::ESTADO_DESHABILITADO:
                return __('Deshabilitado');
            case self::ESTADO_EN_CURSO:
                return __('En curso');
        }

        return 'Estado desconocido';
    }

    public function docentes()
    {
        return $this->belongsToMany(Docente::class)->withTimestamps();
    }

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class);
    }
}
