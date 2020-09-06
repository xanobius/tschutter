<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Matches extends Component
{
    public $active = false;
    public $dings = 'What?';

    protected $listeners = [
        'setContentActive' => 'activate'
    ];

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
