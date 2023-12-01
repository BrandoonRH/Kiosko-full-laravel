<?php

namespace App\Livewire;

use Livewire\Component;

class Resumen extends Component
{
    public $pedido = [];

    public function render()
    {
        return view('livewire.resumen');
    }
}
