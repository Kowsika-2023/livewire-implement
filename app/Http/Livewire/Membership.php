<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Membership extends Component
{
    public function render()
    {
        return view('livewire.membership')->layout('templates.app');
    }
}
