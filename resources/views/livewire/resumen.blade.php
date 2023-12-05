<aside class="w-72 h-screen overflow-y-scroll p-5">
    <h1 class="text-4xl font-black">Mi Pedido</h1>
    <p class="text-lg my-5">Aquí podrás ver el resumen y totales de tu pedido</p>
    <div class="py-10">
    @forelse ($pedidos as $pedido)
        <div class="shadow space-y-1 p-4 bg-white">
            <div class="space-y-2">
              <p class="text-xl font-bold">{{$pedido['nombre']}}</p>
              <p class="text-lg font-bold ">Cantidad: {{$pedido['cantidad']}}</p>
              <p class="text-lg font-bold text-amber-500">
                Precio: ${{ number_format($pedido['precio'], 2) }}
              </p>
              <p class="text-lg text-gray-700">
                Subtotal: ${{ number_format($pedido['precio'] * $pedido['cantidad'] , 2) }}
              </p>
            </div>

            <div class="flex justify-between gap-2 pb-4">
              <button
                type="button"
                class="bg-sky-700 p-2 text-white rounded-md font-bold uppercase shadow-md text-center"

              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg>
              </button>
              <button
                type="button"
                class="bg-red-700 p-2 text-white rounded-md font-bold uppercase shadow-md text-center"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  strokeWidth={2}
                >
                  <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                  />
                </svg>
              </button>
            </div>
          </div>
     @empty
            <p class="text-center text-2xl">
                No hay Elementos en tu pedido aún
            </p>
     @endforelse
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
