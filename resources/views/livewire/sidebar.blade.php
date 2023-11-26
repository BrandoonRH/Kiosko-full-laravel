<aside class="md:w-72 p-2">
    <div class="p-4">
        <img class="w-40" src="{{ asset('img/logo.svg') }}" alt="Icono Titulo"/>
    </div>
    <div class="mt-10">
        @forelse ($categorias as $categoria)

            <div class="flex items-center gap-4 border w-full p-3 hover:bg-amber-400 cursor-pointer">
                <img src="{{ asset('img/icono_' . $categoria['icono'] . '.svg') }}"  alt="Imagen Icono" class="w-12"/>
                <button
                    class="text-lg font-bold cursor-pointer truncate"
                    type="button"
                    wire:click="$dispatch('filter-category', { idCategory: {{ $categoria['id']}} })"
                >
                    {{$categoria['nombre']}}
                </button>
            </div>

        @empty
            <p class="text-white text-center font-bold text-sm">No se tienen categorias</p>
        @endforelse
    </div>
    <div class="my-5 px-5">
        <button
            class="text-center bg-red-500 w-full p-3 font-bold text-white hover:bg-red-700 rounded-md"
        >
        Cancelar Orden
        </button>
    </div>

</aside>
