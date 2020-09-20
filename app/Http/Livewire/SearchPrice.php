<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;

class SearchPrice extends Component
{
    public $cars;

    public function render()
    {
        $this->cars = Car::all();
        return view('livewire.search-price');
    }
}
