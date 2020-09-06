<div>
    <h2>Matches</h2>
    <ul>
    @foreach($matches as $match)
        <li>
            {{ $match->userTeamOne->map(function($m){return $m->name;})->implode(',') }}
            <strong>vs.</strong>
            {{ $match->userTeamTwo->map(function($m){return $m->name;})->implode(',') }}

            ({{ $match->points_one }} : {{ $match->points_two }})
        </li>
    @endforeach
    </ul>

    @if($showMask)
        @livewire('match-mask')
    @else
        <button class="btn btn-primary btn-block" wire:click="$set('showMask', true)">Add</button>
    @endif

    @if($active)
        <p>Mama look, I'm active!</p>
    @endif
</div>
