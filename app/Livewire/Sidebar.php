<?php

namespace App\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class Sidebar extends Component
{

    /*public function filterCategory($categoria)
    {
        $this->dispatch('filter-category', CurrentCategory: $categoria);
    }*/

    public function render()
    {
        $categorias = Categoria::all();

        return view('livewire.sidebar',[
            'categorias' => $categorias
        ]);
    }

}
