<?php

namespace App\Livewire;

use App\Models\Curso;
use App\Models\Inscripcion;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormularioInscripcion extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public string $nombre;

    #[Validate('max:10000')]
    public $documento;

    public Curso $curso;

    public function store()
    {
        $this->validate();

        $path = $this->documento->store('documentos');

        Inscripcion::create([
            'curso_id' => $this->curso->id,
            'user_id' => auth()->user()->id,
            'documento' => $path
        ]);

        return $this->redirect(route('perfil'));
    }

    public function render()
    {
        return view('livewire.formulario-inscripcion');
    }

    public function mount(Curso $curso)
    {
        $this->curso = $curso;
        $this->nombre = auth()->user()->name;
    }
}