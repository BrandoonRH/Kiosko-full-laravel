<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="">
        <div class="md:flex">
            @livewire('sidebar')
            <main  class='flex-1 h-screen overflow-y-scroll bg-gray-100 p-3'>
               @livewire('inicio')
                <!-- Scripts  'poner arroba' livewire('inicio') -->
            </main>
            @livewire('resumen')
        </div>

    @livewire('livewire-ui-modal')
    @livewireScripts
    </body>
</html>
