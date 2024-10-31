<a href="{{ route('dashboard.cursos.show', $curso) }}" class="btn btn-info">
    Mostrar
</a>
<a href="{{ route('dashboard.cursos.edit', $curso) }}" class="btn btn-warning">
    Editar
</a>
<form action="{{ route('dashboard.cursos.destroy', $curso) }}" method="post">
    @csrf
    @method('delete')
    <button class="btn btn-danger">Borrar</button>
</form>
