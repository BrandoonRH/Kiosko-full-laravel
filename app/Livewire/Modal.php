<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;

class Modal extends ModalComponent
{
    public $producto = [];
    public $cantidad = 1;

    public static function modalMaxWidth(): string
    {
        return '7xl';
    }

    public function increment()
    {
        $this->cantidad++;
    }

    public function decrement()
    {
        if($this->cantidad <= 1)
        {
            return;
        }
        $this->cantidad--;
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
