<?php

namespace App\Livewire\Dashboard\Category;

use App\Models\Category;
use Livewire\Component;

class Save extends Component
{
    public $title;
    public $text;
    protected $rules = [
        'title' => 'required|min:2|max:255',
        'text' => 'nullable'
    ];

    public function render()
    {
        return view('livewire.dashboard.category.save');
    }

    function submit() 
    {
        $this->validate();
        Category::create(
        [
        'title' => $this->title,
        'text' => $this->text,
        'slug' => str($this->title)->slug(),
        ]
        );
    }
}
