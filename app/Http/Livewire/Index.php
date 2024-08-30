<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Product;
class Index extends Component
{
    public $posts,$products;
    public function render()
    {
        $this->posts = Post::get();
        $this->products = Product::get();
        return view('livewire.index')->layout('templates.app');
    }
}
