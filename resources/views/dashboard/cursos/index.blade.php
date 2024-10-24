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
            <table id="lista" class="table"></table>

{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>Código</th>--}}
{{--                    <th>Nombre</th>--}}
{{--                    <th>Estado</th>--}}
{{--                    <th>Fecha inicio</th>--}}
{{--                    <th>Fecha fin</th>--}}
{{--                    <th>Acciones</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($cursos as $curso)--}}
{{--                    <tr>--}}
{{--                        <td>--}}
{{--                            {{ $curso->codigo }}--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            {{ $curso->nombre }}--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            {{ $curso->estado_texto }}--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            @if($curso->fecha_inicio)--}}
{{--                                {{ $curso->fecha_inicio->format('d/m/Y') }}--}}
{{--                            @else--}}
{{--                                Sin fecha de inicio--}}
{{--                            @endif--}}
{{--                                                        {{ optional($curso->fecha_inicio)->format('d/m/Y') }}--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            {{ optional($curso->fecha_fin)->format('d/m/Y') }}--}}
{{--                        </td>--}}
{{--                        <td class="d-flex gap-2 ">--}}
{{--                            <a href="{{ route('dashboard.cursos.show', $curso) }}" class="btn btn-info">--}}
{{--                                Mostrar--}}
{{--                            </a>--}}

{{--                            <a href="{{ route('dashboard.cursos.edit', $curso) }}" class="btn btn-warning">--}}
{{--                                Editar--}}
{{--                            </a>--}}

{{--                            <form action="{{ route('dashboard.cursos.destroy', $curso) }}" method="post">--}}
{{--                                @csrf--}}
{{--                                @method('delete')--}}

{{--                                <button class="btn btn-danger">Borrar</button>--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}

        </div>
    </div>

    <script>
        new DataTable('#lista', {
            serverSide: true,
            ajax: '{{ route('api.curso.index') }}',
            columns: [
                {data: "codigo", name: "codigo", title: 'Código'},
                {data: "nombre", name: "nombre", title: 'Nombre'},
                {data: "acciones", name: "acciones", title: 'Acciones', sortable: false},

            ]
        });
    </script>
</x-app-layout>
