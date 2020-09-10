<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Player extends Component
{
    public $active = false;
    public $showMask = false;
    public $players = [];
    public $wrapper_classes = 'col-md-5 order-4';

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
            $this->wrapper_classes = 'col-md-7 order-1';
        } else {
            $this->active = false;
            $this->wrapper_classes = 'col-md-5 order-4';
        }
    }
    public function render()
    {
        return view('livewire.player');
    }
}
