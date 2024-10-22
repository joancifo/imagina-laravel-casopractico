<?php

namespace App\Livewire;

use App\Models\Curso;
use App\Models\Docente;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ModalDocentes extends Component
{
    public Curso $curso;

    public $docentes;

    public bool $esVisible = false;

    #[Validate('required|min:3')]
    public string $nombre;

    #[Validate(['docentesSeleccionados.*' => 'required|exists:docentes,id'])]
    public $docentesSeleccionados = [];

    public function obtenerLosDocentes()
    {
        $this->docentes = Docente::all();
    }

    public function save()
    {
        $this->validate();

        $this->curso->update(['nombre' => $this->nombre]);

        $this->curso
            ->docentes()
            ->syncWithoutDetaching($this->docentesSeleccionados);

        return $this->redirect(route('dashboard.cursos.show', $this->curso));
    }

    public function render()
    {
        return view('livewire.modal-docentes');
    }

    public function mount()
    {
        $this->obtenerLosDocentes();
        $this->nombre = $this->curso->nombre;
    }
}
