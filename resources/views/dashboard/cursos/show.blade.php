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
                        <div>
                            {{ $docente->nombre }}
                        </div>
                    @endforeach

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-seleccionar-docente">
                        Seleccionar docente
                    </button>
                </div>
            </div>
        </div>
    </div>

   @include('components.modals.seleccionar-docente')
</x-app-layout>
