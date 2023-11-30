<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;
use App\Models\Category;

class OfficerComponent extends Component
{
    public $sort_id;

    public function idd($id)
    {
        $this->sort_id = $id;
    }
    public function render()
    {
        $categories = Category::all();
        $officers = Item::when($this->sort_id, function($query)
        {
            $query->where("category_id", $this->sort_id);
        })->get();

        return view('livewire.officer-component', [
            'officers'=> $officers,
            'cats' => $categories
        ]);
    }
}
