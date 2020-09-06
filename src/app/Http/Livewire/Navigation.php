<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public $activeContent = '';

    public function setContentActive($content)
    {
        $this->activeContent = $content;
        $this->emit('setContentActive', $content);
    }

    public function render()
    {
        return view('livewire.navigation');
    }
}
