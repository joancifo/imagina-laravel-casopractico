<x-app-layout>
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
                    {{ $curso->estado }}
                </td>
                <td>
                    {{ $curso->fecha_inicio }}
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
</x-app-layout>
