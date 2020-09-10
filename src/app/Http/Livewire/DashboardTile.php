<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DashboardTile extends Component
{
    public $active = false;
    public $wrapper_classes = 'col-md-5 order-5';

    protected $tileName = '';
    protected $tileBaseOrder = 100;

    public function activate($prm)
    {
        if ($prm == $this->tileName) {
            $this->active = true;
            $this->wrapper_classes = 'col-md-7 order-1';
        } else {
            $this->active = false;
            $this->wrapper_classes = 'col-md-5 order-' . $this->tileBaseOrder;
        }
    }

}
