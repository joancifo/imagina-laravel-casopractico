<x-app-layout>
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>
                acciones
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($alumnos as $alumno)
            <tr>
                <td>
                    {{ $alumno->id }}
                </td>

                <td>
                    {{ $alumno->name }}
                </td>

                <td>
                    @can('alumno:borrar')
                    <form action="{{route('dashboard.alumnos.destroy', $alumno)}}" method="post"                    >
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm">
                            &times;
                        </button>
                    </form>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
