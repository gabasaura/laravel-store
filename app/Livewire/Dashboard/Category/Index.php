<?php

namespace App\Livewire\Dashboard\Category;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public $categories;
    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.dashboard.category.index');
    }
}
