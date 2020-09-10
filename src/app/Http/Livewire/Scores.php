<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Scores extends Component
{
    public $active = true;
    public $wrapper_classes = 'col-md-5 order-6';

    protected $listeners = [
        'setContentActive' => 'activate'
    ];

    public function activate($prm)
    {
        if($prm == 'scores') {
            $this->active = true;
            $this->wrapper_classes = 'col-md-7 order-1';
        }else{
            $this->active = false;
            $this->wrapper_classes = 'col-md-5 order-6';
        }
    }

    public function render()
    {
        return view('livewire.scores');
    }
}
