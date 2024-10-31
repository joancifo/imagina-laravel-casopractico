<a href="{{ route('dashboard.cursos.show', $curso) }}" class="btn btn-sm btn-info">
    Mostrar
</a>
<a href="{{ route('dashboard.cursos.edit', $curso) }}" class="btn btn-sm btn-warning">
    Editar
</a>
<form action="{{ route('dashboard.cursos.destroy', $curso) }}" method="post" class="d-inline">
    <input type="hidden" name="_token" value="{{ $token }}" autocomplete="off">
    @method('delete')
    <button class="btn btn-sm btn-danger">Borrar</button>
</form>
