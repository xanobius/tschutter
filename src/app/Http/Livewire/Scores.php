<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Scores extends Component
{
    public $active = true;

    protected $listeners = [
        'setContentActive' => 'activate'
    ];

    public function activate($prm)
    {
        if($prm == 'scores') {
            $this->active = true;
        }else{
            $this->active = false;
        }
    }

    public function render()
    {
        return view('livewire.scores');
    }
}
