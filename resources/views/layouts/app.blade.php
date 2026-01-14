<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Union Soft') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen flex flex-col">

        <!-- Header / Navigation -->
        <header class="bg-white dark:bg-gray-800 shadow">
            <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between h-16 items-center">
                <a href="{{ route('home') }}" class="text-xl font-bold text-gray-800 dark:text-gray-200">
                    Union Soft
                </a>

                <div class="space-x-4">
                    <a href="{{ route('home') }}" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">About</a>
                    <a href="{{ route('services') }}" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Services</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Contact</a>

                    @auth
                        <a href="{{ route('dashboard') }}" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Dashboard</a>
                        <span class="text-gray-700 dark:text-gray-200">{{ Auth::user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-red-600 hover:text-red-800">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Login</a>
                        <a href="{{ route('register') }}" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Register</a>
                    @endauth
                </div>
            </nav>
        </header>

        <!-- Page Content -->
        <main class="flex-1">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-gray-100 dark:bg-gray-900 text-gray-700 dark:text-gray-200 py-6 mt-auto">
            <div class="max-w-7xl mx-auto px-4 text-center">
                &copy; {{ date('Y') }} Union Soft. All rights reserved.
            </div>
        </footer>
    </div>
</body>
</html>
