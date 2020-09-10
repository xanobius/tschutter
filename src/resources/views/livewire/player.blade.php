<div class="{{ $wrapper_classes }}">
    <h2>Player</h2>

    <ul class="list-group">
        @foreach($players as $p)
            <li class="list-group-item">{{ $p->name }}</li>
        @endforeach
    </ul>
    <br>

    @if($showMask)
        @livewire('player-mask')
    @else
        <button wire:click="$set('showMask', true)" class="btn btn-primary btn-block">Add</button>
    @endif
</div>
