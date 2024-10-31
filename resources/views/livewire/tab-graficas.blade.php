<table class="table">
    @foreach($cursos as $curso)
        <tr>
            <td>{{ $curso->codigo }}</td>
        </tr>
    @endforeach
</table>
