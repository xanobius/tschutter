<?php

namespace App\Http\Livewire;

use App\Match;
use Livewire\Component;

class Matches extends Component
{
    public $active = false;
    public $showMask = false;
    public $matches = [];
    public $wrapper_classes = 'col-md-5 order-5';

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
            $this->wrapper_classes = 'col-md-7 order-1';
        } else {
            $this->active = false;
            $this->wrapper_classes = 'col-md-5 order-5';
        }
    }

    public function render()
    {
        return view('livewire.matches');
    }
}
