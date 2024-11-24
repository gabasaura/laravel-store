<?php

namespace App\Livewire\Dashboard\Category;

use App\Models\Category;
use Livewire\Component;

class Save extends Component
{
    public $title;
    public $text;

    public function render()
    {
        return view('livewire.dashboard.category.save');
    }

    function submit() 
    {
        Category::create(
        [
        'title' => $this->title,
        'text' => $this->text,
        'slug' => str($this->title)->slug(),
        ]
        );
    }
}
