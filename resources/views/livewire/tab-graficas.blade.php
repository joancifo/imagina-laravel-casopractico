<table class="table">
    @foreach($cursos as $curso)
        <tr>
            <td>
                {{ $curso->codigo }}
                <button wire:click="mostrar({{ $curso }})">Mostrar</button>
            </td>
        </tr>
    @endforeach
</table>
