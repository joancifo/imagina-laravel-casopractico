<x-app-layout>
    <div class="card">
        <div class="card-header d-flex">
            Lista de cursos

            <div class="ms-auto">
                <a href="{{ route('dashboard.cursos.create') }}" class="btn btn-primary">
                    {{ __('Crear curso') }}
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Fecha inicio</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cursos as $curso)
                    <tr>
                        <td>
                            {{ $curso->codigo }}
                        </td>
                        <td>
                            {{ $curso->nombre }}
                        </td>
                        <td>
                            {{ $curso->estado_texto }}
                        </td>
                        <td>
                            @if($curso->fecha_inicio)
                                {{ $curso->fecha_inicio->format('d/m/Y') }}
                            @else
                                Sin fecha de inicio
                            @endif
{{--                            {{ optional($curso->fecha_inicio)->format('d/m/Y') }}--}}
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</x-app-layout>
