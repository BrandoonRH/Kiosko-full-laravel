<?php

namespace App\Livewire;

use App\Models\Producto;
use Livewire\Component;
use Livewire\Attributes\On;

class Inicio extends Component
{


    public $filterCategoryId;
    public $productos;


    #[On('filter-category')]
    public function filterCategory($idCategory)
    {
        $this->filterCategoryId = $idCategory;

    }


    public function render()
    {
        $this->productos = Producto::where('categoria_id', $this->filterCategoryId ?? 1 )->get();

        return view('livewire.inicio');
    }

}
