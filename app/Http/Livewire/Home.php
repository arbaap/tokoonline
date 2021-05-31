<?php

namespace App\Http\Livewire;

use App\Outdoor;
use App\Product;
use App\slider;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'products' => Product::take(4)->get(),
            'outdoors' => Outdoor::all(),
            'sliders' => Slider::all()
        ]);
    }
}
