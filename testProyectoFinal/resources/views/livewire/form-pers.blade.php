<div>
    <div class="container">
        <form method="POST" action="{{route('form')}}" wire:submit.prevent="submit">
            @csrf
            <div>
                <span>Nombre</span>
                <input type="text" wire:model="nombre">
                @error('nombre') <span class="error">{{ $message }}</span> @enderror

            </div>
            <div>
                <span>Email</span>
                <input type="text" wire:model="email">
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div>
                <span>DNI</span>
                <input type="text" wire:model="dni">
                @error('dni') <span class="error">{{ $message }}</span> @enderror
            </div>
            <button type="submit">Save Contact</button>
        </form>
    </div>
</div>