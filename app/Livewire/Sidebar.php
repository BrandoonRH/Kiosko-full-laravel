<?php

namespace App\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class Sidebar extends Component
{

    /*public function filterCategory($idCategory)
    {
        $this->dispatch('filter-category', idCategory: $idCategory);
    }*/

    public function render()
    {
        $categorias = Categoria::all();

        return view('livewire.sidebar',[
            'categorias' => $categorias
        ]);
    }

}
