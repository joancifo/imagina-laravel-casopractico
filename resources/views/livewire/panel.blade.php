<div>
    <button wire:click="toggleChildVisibility">Toggle Child Component</button>

    @if ($showChild)
        <livewire:panel-izquierdo />
    @endif
</div>
