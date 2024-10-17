<x-app-layout>
    <form action="{{ route('dashboard.cursos.store') }}" method="post" class="gap-3 d-flex flex-column px-4">
        @csrf

        <input name="codigo" type="text" class="form-control" placeholder="Código" required>
        <input name="nombre" type="text" class="form-control" placeholder="Nombre" required>
        <textarea name="descripcion" class="form-control" placeholder="Descripción"></textarea>

        <label>
            Fecha inicio
            <input name="fecha_inicio" type="date" class="form-control" placeholder="Fecha inicio">
        </label>
        <label>
            Fecha fin
            <input name="fecha_fin" type="date" class="form-control" placeholder="Fecha fin">
        </label>

        <button type="submit" class="btn btn-primary">Crear curso</button>
    </form>
</x-app-layout>
