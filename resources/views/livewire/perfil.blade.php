<div class="container">
    <h2>Estado de mis inscripciones</h2>
    <div class="row">
        @foreach($inscripciones as $inscripcion)
            <div class="col-4 my-2">
                <div class="card">
                    <div class="card-header">
                        Inscripción #{{ $inscripcion->id }}/{{ $inscripcion->curso->codigo }}
                    </div>
                    <div class="card-body">
                        Estado: {{ $inscripcion->estado }}
                    </div>
                    @if($inscripcion->documento)
                    <div class="card-body">

                        <a href="{{ asset('storage/'. $inscripcion->documento) }}" target="_blank">
                            Mi fichero adjunto
                        </a>

                        <br>
                        <a href="{{ Storage::url($inscripcion->documento) }}" target="_blank">
                            Mi fichero adjunto por Storage
                        </a>

                        <br>

                        <a href="{{ Storage::temporaryUrl($inscripcion->documento, now()->addMinute()) }}" target="_blank">
                            Mi fichero adjunto (url temporal)
                        </a>
                    </div>

                    @endif
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
