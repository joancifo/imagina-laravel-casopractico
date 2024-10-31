<div class="container">
    <div class="row">
        @if($verPanel)
          @include('components.sidebar')
        @else
            <div class="col-1">
                <button wire:click="togglePanel">Abrir</button>
            </div>
        @endif
        <div class="col-8">
            <h2>PANEL</h2>

            @if($tab === 'GRAFICAS')
                <table class="table">
                    @foreach($cursos as $curso)
                        <tr>
                            <td>{{ $curso->codigo }}</td>
                        </tr>
                    @endforeach
                </table>

            @elseif($tab === 'DETALLE')
                <div class="card">
                    <div class="card-body">
                        {{ $detalle->codigo }}
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
