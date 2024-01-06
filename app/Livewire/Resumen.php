<?php

namespace App\Livewire;

use Illuminate\Support\Arr;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Collection;



class Resumen extends Component
{
    public $pedidos;
    public $total = 0;

    public function __construct()
    {
        $this->pedidos = new Collection();

    }

    public function calTotal(){
        // Calcular el total usando reduce
        $this->total = $this->pedidos->reduce(function ($total, $pedido) {
            return $total + ($pedido['precio'] * $pedido['cantidad']);
        }, 0);
    }

    public function isPedido(){
        return $this->pedidos->isEmpty();
    }

    #[On('setPedido')]
    public function setPedido($pedido)
    {

        $pedidoCollect = collect($pedido);
        //Verificar que el producto no este en el pedido
        if($this->pedidos->contains('id', $pedidoCollect->get('id'))){
            $this->dispatch('alertaAgregado');
        }else{
            $this->pedidos->push($pedidoCollect);
            $this->dispatch('productoAgregado');
            $this->calTotal();
        }
    }

    #[On('editPedido')]
    public function editPedido($pedidoEdit)
    {

        $pedidoId = $pedidoEdit['id'];

        // Encuentra el índice del pedido que quieres editar
        $index = $this->pedidos->search(function ($pedido) use ($pedidoId) {
            return $pedido['id'] === $pedidoId;
        });

        if ($index !== false) {
            // Actualiza la cantidad en el índice encontrado
           $this->pedidos[$index]['cantidad'] = $pedidoEdit['cantidad'];
           $this->dispatch('productoEditado');
           $this->calTotal();
        }
    }

    public function eliminarProducto($id){

        $this->pedidos = $this->pedidos->reject(function ($item) use ($id) {
            return $item['id'] === $id;
        });
        $this->dispatch('productoEliminado');
        $this->calTotal();
    }

    public function confirmPedido(){
        dump('Pedido confirmado');
    }



    public function render()
    {

        return view('livewire.resumen');
    }
}
