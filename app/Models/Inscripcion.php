<?php

namespace App\Models;

use App\Observers\InscripcionObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([InscripcionObserver::class])]
class Inscripcion extends Model
{
    use HasFactory;

    protected $table = 'inscripciones';
    protected $guarded = ['id'];
    public const CREATED_AT = 'fecha_inscripcion';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
