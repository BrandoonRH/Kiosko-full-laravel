<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;


class Resumen extends Component
{
    public $pedidos = [];

    #[On('setPedido')]
    public function setPedido($pedido)
    {
        $this->pedidos[] = $pedido;

    }

    public function render()
    {
        return view('livewire.resumen');
    }
}
