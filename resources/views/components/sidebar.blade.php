<div class="col-4 bg-info">

    <div >
        <button wire:click="togglePanel">Cerrar</button>
    </div>

    <ul>
        <li>
            <button  wire:click="cambiarTab('GRAFICAS')" >
                Ver gráficas
            </button>
        </li>

        <li>
            <button wire:click="cambiarTab('INFORME')">
                Ver informes
            </button>
        </li>

        <li>
            <button wire:click="cambiarTab('DETALLE')">
                Ver detalle
            </button>
        </li>
    </ul>

</div>
