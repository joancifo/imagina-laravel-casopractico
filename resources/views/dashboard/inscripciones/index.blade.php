<x-app-layout>
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>estudiante</th>
            <th>estado</th>
            <th>fecha de inscripción</th>
            <th>
                acciones
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($inscripciones as $inscripcion)
            <tr>
                <td>
                    {{ $inscripcion->id }}
                </td>

                <td>
                    {{ $inscripcion->user->name }}
                </td>

                <td>
                    {{ $inscripcion->estado }}
                </td>

                <td>
                    {{ $inscripcion->fecha_inscripcion->format('d/m/Y') }}
                </td>

                <td>
                    <form action="{{route('dashboard.inscripciones.destroy', $inscripcion)}}" method="post"                    >
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm">
                            &times;
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
