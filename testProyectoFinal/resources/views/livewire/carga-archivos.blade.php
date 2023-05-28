<div>
    <div class="container">
        <form wire:submit.prevent='save'>
            @method('POST')
            @csrf
            <input type="file" wire:model='archivo'><br><br>
            @error('archivo')
            <span class="error">{{$messaje}}</span>                
            @enderror

            <button type="submit">Enviar</button>
        </form>
    </div>
</div>