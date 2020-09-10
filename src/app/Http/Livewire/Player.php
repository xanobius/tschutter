<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Player extends DashboardTile
{
    public $active = false;
    public $showMask = false;
    public $players = [];

    protected $tileName = 'player';
    protected $tileBaseOrder = 4;

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

    public function render()
    {
        return view('livewire.player');
    }
}
