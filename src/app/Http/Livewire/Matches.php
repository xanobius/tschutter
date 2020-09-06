<?php

namespace App\Http\Livewire;

use App\Match;
use Livewire\Component;

class Matches extends Component
{
    public $active = false;
    public $showMask = false;
    public $matches = [];

    protected $listeners = [
        'setContentActive' => 'activate',
        'closeMask' => 'closeMask',
        'reload' => 'mount'
    ];

    public function closeMask()
    {
        $this->showMask = false;
    }

    public function mount()
    {
        $this->matches = Match::with([
            'userTeamOne',
            'userTeamTwo',
            'users'
        ])->get();
    }

    public function activate($prm)
    {
        if ($prm == 'matches') {
            $this->active = true;
        } else {
            $this->active = false;
        }
    }

    public function render()
    {
        return view('livewire.matches');
    }
}
