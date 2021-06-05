<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    </head>
    <body class="font-caribbean bg-blue-300">
        <div class="antialiased">
            {{ $slot }}
            @include('layouts.footer')
            @include('layouts.toast')
            @if ($errors->any())
                <script>setTimeout(function(){ popToast("{{ 'danger' }}",
                        "@foreach ($errors->all() as $error){!! $error.'...' !!}@endforeach"); }, 10);</script>
            @endif
            @if(session('message'))
                <script>setTimeout(function(){ popToast("{{ session('message_type') }}", "{{ session('message') }}"); }, 10);</script>
            @endif
        </div>
    <script>
        window.popToast=function(e,t){document.getElementById("toast").__x.$data.type=e,document.getElementById("toast").__x.$data.message=t,document.getElementById("toast").__x.$data.show=!0}
    </script>
    </body>
</html>
