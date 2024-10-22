<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                {{ $curso->codigo }}
            </div>
            <div class="card-body">
                <div>
                    {{ $curso->nombre }}
                </div>

                <div>
                    <h5>Los docentes del curso</h5>
                    @foreach($curso->docentes as $docente)
                        <div class="d-flex justify-between">
                            <div>{{ $docente->nombre }}</div>

                            <form action="{{ route('dashboard.cursos.docentes.destroy', [$curso, $docente]) }}" method="post">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger btn-sm">
                                    &times;
                                </button>
                            </form>
                        </div>
                    @endforeach

                    <button wire:click="" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-seleccionar-docente">
                        Seleccionar docente
                    </button>
                </div>
            </div>
        </div>
    </div>

{{--   @include('components.modals.seleccionar-docente')--}}

    <livewire:modal-docentes :$curso />
</x-app-layout>
