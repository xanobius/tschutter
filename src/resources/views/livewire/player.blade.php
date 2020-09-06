<div>
    <h2>Player</h2>

    <ul>
        @foreach($players as $p)
            <li>{{ $p->name }}</li>
        @endforeach
    </ul>

    @if($showMask)
        @livewire('player-mask')
    @else
        <button wire:click="$set('showMask', true)" class="btn btn-primary btn-block">Add</button>
    @endif



    @if($active)
        <p>Mama look, I'm active!</p>
    @endif
</div>
