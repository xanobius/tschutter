<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Player extends Component
{
    public $active = false;
    public $showMask = true;
    public $players = [];

    protected $listeners = [
        'setContentActive' => 'activate'
    ];

    public function mount()
    {
        $this->players = User::get();
    }

    public function activate($prm)
    {
        if ($prm == 'player') {
            $this->active = true;
        } else {
            $this->active = false;
        }
    }
    public function render()
    {
        return view('livewire.player');
    }
}
