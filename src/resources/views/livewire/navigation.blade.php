<div>
    <div class="sidebar-header">
        <h3>Tschuttu</h3>
    </div>
    <ul class="list-unstyled components">
        <li class="@if($activeContent == 'player') active @endif">
            <a href="#" wire:click="setContentActive('player')">Player</a>
        </li>
        <li class="@if($activeContent == 'matches') active @endif">
            <a href="#" wire:click="setContentActive('matches')">Matches</a>
        </li>
        <li class="@if($activeContent == 'scores') active @endif">
            <a href="#" wire:click="setContentActive('scores')">Scores</a>
        </li>
        @if(auth()->check())
        <li>
            <a href="#">Profil</a>
        </li>
        @endif
    </ul>
</div>
