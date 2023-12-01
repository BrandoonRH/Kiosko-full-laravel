<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Producto;
use Livewire\Component;
use Livewire\Attributes\On;

class Inicio extends Component
{


    public $filterCategoryId;
    public $nameCategory;
    public $productos;
    public $modal = false;

    #[On('filter-category')]
    public function filterCategory($idCategory)
    {
        $this->filterCategoryId = $idCategory;
        $this->getCategoryName();

    }

    public function getCategoryName()
    {
        if ($this->filterCategoryId ?? 1) {
            $categoria = Categoria::find($this->filterCategoryId ?? 1);
            if ($categoria) {
                $this->nameCategory = $categoria->nombre;
            }
        }
    }

    public function handleModal()
    {
        $this->modal = !$this->modal;
    }



    public function render()
    {
        $this->productos = Producto::where('categoria_id', $this->filterCategoryId ?? 1 )->get();
        $this->getCategoryName();
        return view('livewire.inicio');
    }

}
