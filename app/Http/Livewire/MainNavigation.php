<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MainNavigation extends Component
{

    public $currentView = 'product';

    public function setView($view)
    {
        $this->currentView = $view;
    }
    
    public function render()
    {
        return view('livewire.main-navigation');
    }
}
