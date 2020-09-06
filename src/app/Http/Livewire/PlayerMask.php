<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PlayerMask extends Component
{
    public $name = '';
    public $email = '';

    public function save()
    {

    }

    public function render()
    {
        return view('livewire.player-mask');
    }
}
