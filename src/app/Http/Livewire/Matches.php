<?php

namespace App\Http\Livewire;

use App\Match;

class Matches extends DashboardTile
{
    public $showMask = false;
    public $matches = [];

    protected $tileName = 'matches';
    protected $tileBaseOrder = 5;

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

    public function render()
    {
        return view('livewire.matches');
    }
}
