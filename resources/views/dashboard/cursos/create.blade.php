<x-app-layout>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('dashboard.cursos.store') }}" method="post" class="gap-3 d-flex flex-column px-4">
        @csrf

        <input
            name="codigo" type="text"
            class="form-control @error('codigo') bg-danger @enderror"
            placeholder="Código"
            required
            value="{{ old('codigo') }}"
        >
        @error('codigo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <input name="nombre" type="text" class="form-control" placeholder="Nombre" required value="{{ old('nombre') }}">
        @error('nombre')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <textarea name="descripcion" class="form-control" placeholder="Descripción" >{{ old('descripcion') }}</textarea>
        @error('descripcion')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label>
            Fecha inicio
            <input name="fecha_inicio" type="date" class="form-control" placeholder="Fecha inicio" value="{{ old('fecha_inicio') }}">
        </label>
        @error('fecha_inicio')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label>
            Fecha fin
            <input name="fecha_fin" type="date" class="form-control" placeholder="Fecha fin" value="{{ old('fecha_fin') }}">
        </label>
        @error('fecha_fin')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Crear curso</button>
    </form>
</x-app-layout>
