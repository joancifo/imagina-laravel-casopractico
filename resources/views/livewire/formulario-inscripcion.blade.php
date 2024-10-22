<div class="container">

    <h3>Te estás inscribiendo al curso {{ $curso->codigo }}</h3>

    <form wire:submit="store">
        <div>
            <input wire:model="nombre" type="text" class="form-control" placeholder="Nombre">

            @error('nombre') <div class="alert alert-danger">{{ $message }}</div> @enderror
        </div>

        <div>
            <label>
                Documentación
            <input wire:model="documento" type="file" class="form-control">
            </label>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>
