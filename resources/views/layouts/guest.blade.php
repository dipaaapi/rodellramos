<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@stack('title')</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <link rel="shortcut icon" href="{{ url('/img/HOR.png') }}" />
        {{-- <style>
            p {
                font-family: 'Times New Roman', Times, serif;
            }
        </style> --}}
    </head>
    <body>

        <livewire:main.nav />

        <livewire:main.row1 />

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        <livewire:main.footer />

    </body>
</html>
