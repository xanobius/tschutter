<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Player extends Component
{
    public $active = false;
    public $showMask = false;
    public $players = [];

    protected $listeners = [
        'setContentActive' => 'activate',
        'userSaved' => 'rebuild',
        'cancelMask' => 'closeMask'
    ];

    public function mount()
    {
        $this->players = User::get();
    }

    public function closeMask()
    {
        $this->showMask = false;
    }

    public function rebuild()
    {
        $this->showMask = false;
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
