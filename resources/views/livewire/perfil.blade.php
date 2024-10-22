<div>
    <h2>Estado de mis inscripciones</h2>
    <div class="row">
        @foreach($inscripciones as $inscripcion)
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Inscripción #{{ $inscripcion->id }}/{{ $inscripcion->curso->codigo }}
                    </div>
                    <div class="card-body">
                        Estado: {{ $inscripcion->estado }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <h2>Mis cursos</h2>
    <div class="row">
        @foreach($cursos as $curso)
            <div class="col-4">
                {{ $curso->codigo }}
            </div>
        @endforeach
    </div>

</div>
