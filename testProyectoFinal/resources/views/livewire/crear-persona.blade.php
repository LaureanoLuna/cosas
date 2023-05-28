<div>

    <x-secondary-button wire:click="$set('open',true)">
        Add Persona
    </x-secondary-button>

    <x-dialog-modal wire:model='open'>
        <x-slot name='title'>
            Agregar una Persona
        </x-slot>
        <x-slot name='content'>
            <div class="mb-4">
                <x-label value="Ingresar Nombre Completo" />
                <x-input type="text" class="w-full" wire:model='nombre' />
                <x-input-error for='nombre' />
                
            </div>
            <div class="mb-4">
                <x-label value="Ingresar Correo" />
                <x-input type="text" class="w-full" wire:model='correo' />      
                <x-input-error for='correo' />
            </div>
        </x-slot>
        <x-slot name='footer'>
            <div>
                <x-secondary-button wire:click="$set('open',false)">
                    Cancelar
                </x-secondary-button>
                <x-danger-button wire:click='guardar' wire:loading.attr='disabled' wire:target='guardar' class="disabled:opacity-25">
                    Guardar
                </x-danger-button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>