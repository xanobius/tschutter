<div>
    <h2>Player</h2>

    <ul>
        @foreach($players as $p)
            <li>{{ $p->name }}</li>
        @endforeach
    </ul>

    @if($showMask)
        @livewire('player-mask')
    @endif



    @if($active)
        <p>Mama look, I'm active!</p>
    @endif
</div>
