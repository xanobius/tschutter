<?php

namespace App\Http\Livewire;

use App\Match;
use App\User;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class MatchMask extends Component
{
    public $teamOne = null;
    public $teamTwo = null;

    public $pointsOne = 0;
    public $pointsTwo = 0;

    public $availableOne = null;
    public $availableTwo = null;

    public function mount()
    {
        $this->availableOne = User::get();
        $this->availableTwo = clone $this->availableOne;
    }

    public function clearMask()
    {
        $this->prepareEmpty();
    }

    public function cancel()
    {
        $this->prepareEmpty();
        $this->emitUp('closeMask');
    }

    private function prepareEmpty()
    {
        $this->availableOne = User::get();
        $this->availableTwo = clone $this->availableOne;
        $this->teamOne = [];
        $this->teamTwo = [];
        $this->pointsOne = 0;
        $this->pointsTwo = 0;
    }

    public function save()
    {
        /** @var Match $m */
        $m = Match::create([
            'points_one' => $this->pointsOne,
            'points_two' => $this->pointsTwo,
        ]);

        $this->availableOne->filter(fn($u) => in_array($u->id, $this->teamOne))
            ->each(fn ($u) => $m->users()->save($u, ['team' => 1]));

        $this->availableTwo->filter(fn($u) => in_array($u->id, $this->teamTwo))
            ->each(fn ($u) => $m->users()->save($u, ['team' => 2]));

        $this->emitUp('reload');
        $this->prepareEmpty();
    }

    public function updatedTeamOne()
    {
        $this->availableTwo = $this->availableTwo
            ->filter(fn ($u) => ! in_array($u->id,  $this->teamOne));
    }

    public function updatedTeamTwo()
    {
        $this->availableOne = $this->availableOne
            ->filter(fn ($u) => ! in_array($u->id,  $this->teamTwo));
    }

    public function render()
    {
        return view('livewire.match-mask');
    }
}
