<?php

namespace App\Http\Livewire;

use App\Outdoor;
use App\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductOutdoor extends Component
{
    use WithPagination;

    public $search, $outdoor;

    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($outdoorId)
    {
        $outdoorDetail = Outdoor::find($outdoorId);

        if ($outdoorDetail) {
            $this->outdoor = $outdoorDetail;
        }
    }

    public function render()
    {
        if ($this->search) {
            $products = Product::where('outdoor_id', $this->outdoor->id)->where('nama', 'like', '%' . $this->search . '%')->paginate(8);
        } else {
            $products = Product::where('outdoor_id', $this->outdoor->id)->paginate(8);
        }

        return view('livewire.product-index', [
            'products' => $products,
            'title' => 'List ' . $this->outdoor->nama
        ]);
    }
}
