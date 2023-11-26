<div>
    <h1 class="text-4xl font-black">Inicio</h1>
    <p class="text-2xl my-10">Elige y personaliza tu pedido a continuación</p>
    <?php echo(count($productos)) ?>
    <?php echo($productos) ?>
    <div class="grid gap-4 grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($productos as $producto)
            <div class="border p-3 shadow bg-white">
                <img src="{{ asset('img/' . $producto['imagen'] . '.jpg') }}"  alt={{'Producto' . $producto['nombre']}} class="w-full"/>
                <div class='p-5'>
                    <h3 class='text-2xl font-bold'>{{$producto['nombre']}}</h3>
                    <p class='mt-5 font-black text-4xl text-amber-500'>${{ number_format($producto['precio'], 2) }}</p>
                    <button
                        type='button'
                        class='bg-indigo-600 rounded-md hover:bg-indigo-800 text-white uppercase w-full mt-5 p-3 font-bold '
                    >
                        Agregar
                    </button>
                </div>
            </div>
        @endforeach
    </div>

</div>