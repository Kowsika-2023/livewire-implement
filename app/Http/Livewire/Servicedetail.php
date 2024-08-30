<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Servicedetail extends Component
{
    public $posts,$post;
    public function render()
    {
        $this->posts = Post::all();
        $this->post = Post::first();
        return view('livewire.servicedetail')->layout('templates.app');
    }
}
