<div class="{{ $wrapper_classes }}">
    <h2>Matches</h2>
    <table class="table">
        <tr>
            <th>Side 1</th>
            <th>Side 2</th>
            <th>Score 1</th>
            <th>Score 2</th>
        </tr>
    @foreach($matches as $match)
        <tr>
            <td>{{ $match->userTeamOne->map(function($m){return $m->name;})->implode(', ') }}</td>
            <td>{{ $match->userTeamTwo->map(function($m){return $m->name;})->implode(', ') }}</td>
            <td>{{ $match->points_one }}</td>
            <td>{{ $match->points_two }}</td>
        </tr>
    @endforeach
    </table>

    @if($showMask)
        @livewire('match-mask')
    @else
        <button class="btn btn-primary btn-block" wire:click.prevent="$set('showMask', true)">Add</button>
    @endif
</div>
