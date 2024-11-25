<div>
    <form wire:submit.prevent='submit'>
        {{ $title }}

        <label for="">TITULO</label>
        <input type="text" wire:model='title'>

        <label for="">TEXTO</label>
        <input type="text" wire:model='text'>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <button type="submit" wire:keydown.enter='submit'>ENVIAR</button>
    </form>
</div>