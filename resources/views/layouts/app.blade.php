<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ $title ?? 'Wisata Pulau Jawa API' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Preload CSS to avoid FOUC -->
        <link rel="preload" href="{{ asset('css/app.css') }}" as="style" />

        <!-- Scripts -->
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="font-sans antialiased" style="background: url('{{ asset('images/jawa.jpg') }}') no-repeat center center fixed; background-size: cover;">
        <div class="min-h-screen bg-gray-100 bg-opacity-70">
            @include("layouts.navigation")

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow bg-opacity-90">
                    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
