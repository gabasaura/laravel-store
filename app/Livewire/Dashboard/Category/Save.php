<?php

namespace App\Livewire\Dashboard\Category;

use App\Models\Category;
use Livewire\Component;

class Save extends Component
{
    public $category;
    public $title;
    public $text;

    protected $rules = [
        'title' => 'required|min:2|max:255',
        'text' => 'required|min:2|max:255',
    ];

     function mount(?int $id = null)
    {
        

        if ($id != null) {
            $this->category = Category::findOrFail($id);
            $this->title = $this->category->title;
            $this->text = $this->category->text;
        };
    }

    public function render()
    {
        return view('livewire.dashboard.category.save');
    }

     function submit()
    {
        $this->validate();
        if ($this->category) {
            $this->category->update([
                'title' => $this->title,
                'text' => $this->text,
            ]);

        } else {

            Category::create(
                [
                    'title' => $this->title,
                    'text' => $this->text,
                    'slug' => str($this->title)->slug(),
                ]
            );
        }
    }
    
    
    
}
