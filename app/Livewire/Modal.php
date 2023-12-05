<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;

class Modal extends ModalComponent
{
    public $producto;
    public $cantidad = 1;

    public static function modalMaxWidth(): string
    {
        return '7xl';
    }

    public function incrementQuantity()
    {
        $this->cantidad++;
    }

    public function decrementQuantity()
    {
        if($this->cantidad <= 1)
        {
            return;
        }
        $this->cantidad--;
    }

    public function addProduct()
    {

        $pedido = [
            'id'=> $this->producto['id'],
            'imagen' => $this->producto['imagen'],
            'nombre' => $this->producto['nombre'],
            'precio' => $this->producto['precio'],
            'cantidad' => $this->cantidad
        ];

        $this->dispatch('setPedido', pedido: $pedido);
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
