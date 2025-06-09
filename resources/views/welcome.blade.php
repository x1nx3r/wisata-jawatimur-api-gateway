<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata Pulau Jawa API</title>
    @vite('resources/css/app.css')
</head>
<body
    class="bg-gradient-to-br from-white to-gray-100 dark:from-gray-900 dark:to-gray-800 min-h-screen"
    style="background: url('{{ asset('images/jawa1.jpg') }}') no-repeat center center fixed; background-size: cover;"
>
    <!-- Navigation -->
    <nav class="fixed w-full bg-green-600 dark:bg-green-800 backdrop-blur-sm shadow-lg z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10">
                </div>
                
                <!-- Navigation Links -->
                <div class="flex items-center space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn-secondary dark:border-white dark:text-white dark:hover:bg-gray-800">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn-secondary dark:border-white dark:text-white dark:hover:bg-gray-800">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn-secondary dark:border-white dark:text-white dark:hover:bg-gray-800">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="pt-24 pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:flex lg:items-center lg:gap-12">
                <!-- Left Content -->
                <div class="lg:w-1/2 space-y-8">
                    <h1 class="text-4xl font-bold text-gray-900 dark:text-white lg:text-5xl">
                        Wisata Pulau Jawa API
                    </h1>
                    
                    <p class="text-lg text-gray-300 dark:text-gray-300">
                        Explore the rich cultural heritage and tourist destinations of Java through our comprehensive API. Get detailed information about various locations, attractions, and local specialties.
                    </p>

                    <!-- Features -->
                    <div class="bg-white/50 dark:bg-gray-800/50 rounded-xl p-6 backdrop-blur-sm">
                        <h2 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Features</h2>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-700 dark:text-gray-300">
                                <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Complete database of tourist destinations
                            </li>
                            <li class="flex items-center text-gray-700 dark:text-gray-300">
                                <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Detailed information about each location
                            </li>
                            <li class="flex items-center text-gray-700 dark:text-gray-300">
                                <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Easy integration with your applications
                            </li>
                        </ul>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                        class="px-6 py-3 border border-white text-white rounded-lg hover:bg-white hover:text-green-600 transition-colors duration-300 font-semibold underline decoration-1 underline-offset-4 dark:border-gray-300 dark:text-gray-300 dark:hover:bg-gray-300 dark:hover:text-green-800">
                            Get Started
                        </a>
                    @endif
                </div>

                </div>

                <!-- Right Image -->
                <div class="hidden lg:block lg:w-1/2">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/jawa.jpg') }}" 
                             alt="Jawa Timur" 
                             class="w-full h-[400px] object-cover hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .btn-primary {
            @apply px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors duration-300 font-semibold dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100;
        }
        .btn-secondary {
            @apply px-6 py-3 border-2 border-green-600 text-green-600 rounded-lg hover:bg-green-50 transition-colors duration-300 font-semibold dark:border-white dark:text-white dark:hover:bg-gray-800;
        }
    </style>
</body>
</html>