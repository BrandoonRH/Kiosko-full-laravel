<aside class="w-72 h-screen overflow-y-scroll p-5">
    <h1 class="text-4xl font-black">Mi Pedido</h1>
    <p class="text-lg my-5">Aquí podrás ver el resumen y totales de tu pedido</p>
    <div class="py-10">
        @if (count($pedido) === 0)
            <p class="text-center text-2xl">
                No hay Elementos en tu pedido aún
            </p>
        @else
            <p>Ya hay</p>
        @endif
    </div>
    <p class="text-xl mt-10">
        Total: $
    </p>
    <div class="w-full mt-5">
        <button
            class="bg-indigo-600 hover:bg-indigo-800 text-white rounded-md text-center cursor-pointer w-full py-3 font-bold uppercase px-5"
        >Confirmar Pedido</button>
    </div>
</aside>
