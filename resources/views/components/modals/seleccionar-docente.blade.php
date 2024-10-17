<form action="{{ route('dashboard.cursos.docentes', $curso) }}" method="post" id="modal-seleccionar-docente" class="modal" tabindex="-1">
    @csrf

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Nombre</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($docentes as $docente)
                        <tr>
                            <td><input type="checkbox" name="docentes[]" value="{{ $docente->id }}"></td>
                            <td>{{ $docente->nombre }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Añadir</button>
            </div>
        </div>
    </div>
</form>
