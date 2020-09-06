<?php

namespace App\Http\Livewire;

use App\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class PlayerMask extends Component
{
    public $name = '';
    public $email = '';
    public $userId = '';

    public function updatedEmail()
    {
        $this->validate([
            'email' => 'required|email|unique:users',
        ]);
    }

    public function saveUser()
    {
        $this->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required'
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make('')
        ]);
        $this->emitUp('userSaved');
        return $user;
    }

    public function render()
    {
        return view('livewire.player-mask');
    }
}
