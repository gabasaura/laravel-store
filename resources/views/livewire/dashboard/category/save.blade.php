<div>
    <form wire:submit.prevent='submit'>
        @error('title')
            {{ $message }}
        @enderror

        <label for= "">TITULO</label>
        <input type="text" wire:model='title'>
        
        <label for="">TEXTO</label>
        <input type="text" wire:model='text'>



        <button type="submit" wire:keydown.enter='submit'>ENVIAR</button>
    </form>
</div>
