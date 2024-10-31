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
               <livewire:tab-graficas ></livewire:tab-graficas>

            @elseif($tab === 'DETALLE')
                <livewire:tab-detalle :$cursoDetalle></livewire:tab-detalle>
            @endif
        </div>
    </div>
</div>
