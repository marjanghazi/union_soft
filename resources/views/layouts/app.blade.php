<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Union Soft') }} - From Vision to Victory</title>
    <meta name="description" content="Union Soft offers expert web development, eCommerce, digital marketing & online skills training for global clients and local learners.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|raleway:400,500,600,700" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        :root {
            --primary-mint: #3BEB9A;
            --secondary-mint: #3ED1A2;
            --light-gray: #E0E1E1;
            --medium-gray: #ABADAD;
            --lighter-gray: #DCDCDC;
            --white: #FFFFFF;
            --dark-navy: #0D3141;
            --blue-green: #5199AE;
            --text-light: #374151;
            /* gray-700 for light mode */
            --text-dark: #E5E7EB;
            /* gray-200 for dark mode */
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, var(--primary-mint) 0%, var(--secondary-mint) 100%);
        }

        .text-gradient-primary {
            background: linear-gradient(135deg, var(--primary-mint) 0%, var(--secondary-mint) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .btn-primary {
            background: var(--primary-mint) !important;
            border-color: var(--primary-mint) !important;
            color: var(--dark-navy) !important;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: var(--secondary-mint) !important;
            border-color: var(--secondary-mint) !important;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(62, 209, 162, 0.3);
        }

        .btn-outline-primary {
            border-color: var(--primary-mint) !important;
            color: var(--primary-mint) !important;
        }

        .btn-outline-primary:hover {
            background: var(--primary-mint) !important;
            color: var(--dark-navy) !important;
        }

        .section-title {
            font-family: 'Raleway', sans-serif;
            font-weight: 700;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 60px;
            height: 3px;
            background: var(--primary-mint);
        }

        .stat-card {
            background: var(--white);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(13, 49, 65, 0.1);
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .service-card {
            background: var(--white);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(13, 49, 65, 0.08);
            transition: all 0.3s ease;
            height: 100%;
            border-top: 4px solid var(--primary-mint);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(62, 209, 162, 0.15);
        }

        .hero-section {
            background: linear-gradient(135deg, var(--dark-navy) 0%, #1a4a5e 100%);
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            background: rgba(59, 235, 154, 0.1);
            clip-path: polygon(100% 0, 0 100%, 100% 100%);
        }

        .testimonial-card {
            background: var(--white);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(13, 49, 65, 0.08);
            border-left: 5px solid var(--blue-green);
        }

        .process-step {
            position: relative;
            padding-left: 40px;
        }

        .process-step::before {
            content: counter(step);
            counter-increment: step;
            position: absolute;
            left: 0;
            top: 0;
            width: 30px;
            height: 30px;
            background: var(--primary-mint);
            color: var(--dark-navy);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .navbar-brand {
            font-family: 'Raleway', sans-serif;
            font-weight: 700;
            font-size: 1.8rem;
        }

        .navbar-brand span {
            color: var(--primary-mint);
        }

        .footer {
            background: var(--dark-navy);
            color: var(--white);
        }

        .footer a {
            color: var(--light-gray);
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: var(--primary-mint);
        }

        .text-primary-mint {
            color: var(--primary-mint) !important;
        }

        .text-dark-navy {
            color: var(--dark-navy) !important;
        }

        .text-blue-green {
            color: var(--blue-green) !important;
        }

        .border-primary-mint {
            border-color: var(--primary-mint) !important;
        }

        .bg-dark-navy {
            background-color: var(--dark-navy) !important;
        }

        /* FIX FOR NAVIGATION LINKS - LIGHT MODE */
        /* This ensures nav links are visible in light mode */
        nav .nav-link,
        nav .responsive-nav-link {
            color: var(--dark-navy) !important;
        }

        /* Hover states for light mode */
        nav .nav-link:hover:not(.active),
        nav .responsive-nav-link:hover:not(.active) {
            color: var(--primary-mint) !important;
        }

        /* Active state for light mode */
        nav .nav-link.active,
        nav .responsive-nav-link.active {
            background-color: var(--primary-mint) !important;
            color: var(--dark-navy) !important;
            border-radius: 6px;
            font-weight: 600;
        }

        /* Fix for button styling in nav */
        .btn-primary.nav-link {
            padding: 8px 16px;
            border-radius: 6px;
        }

        /* DARK MODE OVERRIDES - Specific text colors */
        [data-theme="dark"] {
            color-scheme: dark;
        }

        /* Dark mode navigation links */
        [data-theme="dark"] nav .nav-link,
        [data-theme="dark"] nav .responsive-nav-link {
            color: var(--text-dark) !important;
        }

        [data-theme="dark"] nav .nav-link.active,
        [data-theme="dark"] nav .responsive-nav-link.active {
            background-color: var(--primary-mint) !important;
            color: var(--dark-navy) !important;
        }

        [data-theme="dark"] nav .nav-link:hover:not(.active),
        [data-theme="dark"] nav .responsive-nav-link:hover:not(.active) {
            color: var(--primary-mint) !important;
        }

        [data-theme="dark"] .navbar-brand span.text-dark-navy,
        [data-theme="dark"] .navbar-brand .text-dark-navy {
            color: var(--text-dark) !important;
        }

        /* Logo sizing */
        .logo-img {
            height: 45px;
            width: auto;
            object-fit: contain;
        }

        /* Dark mode toggle button */
        .theme-toggle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            border: 1px solid var(--light-gray);
            color: var(--dark-navy);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .theme-toggle:hover {
            background: var(--light-gray);
        }

        [data-theme="dark"] .theme-toggle {
            color: var(--text-dark) !important;
            border-color: var(--medium-gray);
        }

        [data-theme="dark"] .theme-toggle:hover {
            background: var(--medium-gray);
        }

        /* Mobile responsive fixes */
        @media (max-width: 768px) {
            .logo-img {
                height: 35px;
            }

            .nav-container {
                width: 100%;
            }

            .mobile-nav-actions {
                display: flex;
                align-items: center;
                gap: 0.5rem;
            }

            .desktop-nav {
                display: none !important;
            }

            .mobile-menu {
                display: block !important;
            }
        }

        @media (min-width: 769px) {
            .desktop-nav {
                display: flex !important;
            }

            .mobile-menu {
                display: none !important;
            }
        }

        /* Improved mobile navigation */
        .mobile-nav-content {
            position: fixed;
            top: 0;
            right: 0;
            height: 100vh;
            width: 280px;
            background: white;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
            z-index: 50;
            transform: translateX(100%);
            transition: transform 0.3s ease;
        }

        [data-theme="dark"] .mobile-nav-content {
            background: #1f2937 !important;
        }

        .mobile-nav-content.open {
            transform: translateX(0);
        }

        .mobile-nav-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 40;
            display: none;
        }

        .mobile-nav-overlay.open {
            display: block;
        }

        /* Responsive adjustments */
        @media (max-width: 640px) {
            .footer .grid {
                grid-template-columns: 1fr !important;
                gap: 2rem !important;
            }

            .footer div {
                text-align: center;
            }

            .footer .flex {
                justify-content: center;
            }
        }

        @media (max-width: 768px) and (min-width: 641px) {
            .footer .grid {
                grid-template-columns: repeat(2, 1fr) !important;
            }
        }

        /* CRITICAL FIX: Override Breeze's default blue text colors in dark mode */
        [data-theme="dark"] .text-gray-700,
        [data-theme="dark"] .text-gray-800,
        [data-theme="dark"] .text-gray-900,
        [data-theme="dark"] .text-gray-600,
        [data-theme="dark"] .text-gray-500 {
            color: var(--text-dark) !important;
        }

        [data-theme="dark"] .text-blue-600,
        [data-theme="dark"] .text-indigo-600,
        [data-theme="dark"] .text-blue-700,
        [data-theme="dark"] .text-indigo-700,
        [data-theme="dark"] .text-blue-800,
        [data-theme="dark"] .text-indigo-800 {
            color: var(--text-dark) !important;
        }

        /* Fix backgrounds */
        [data-theme="dark"] .bg-white {
            background-color: #1f2937 !important;
        }

        [data-theme="dark"] .bg-gray-50 {
            background-color: #111827 !important;
        }

        [data-theme="dark"] .border-gray-200 {
            border-color: #374151 !important;
        }

        [data-theme="dark"] .bg-gray-100 {
            background-color: #374151 !important;
        }

        /* Fix for Breeze dropdowns */
        [data-theme="dark"] .bg-white .text-gray-700,
        [data-theme="dark"] .bg-white .text-gray-800 {
            color: var(--text-dark) !important;
        }

        /* Ensure our custom components work with Breeze */
        [data-theme="dark"] .stat-card,
        [data-theme="dark"] .service-card,
        [data-theme="dark"] .testimonial-card {
            background-color: #1f2937 !important;
            color: var(--text-dark) !important;
        }

        /* Fix for buttons and form elements */
        [data-theme="dark"] input,
        [data-theme="dark"] textarea,
        [data-theme="dark"] select {
            background-color: #374151 !important;
            color: var(--text-dark) !important;
            border-color: #4b5563 !important;
        }

        [data-theme="dark"] input::placeholder,
        [data-theme="dark"] textarea::placeholder {
            color: #9ca3af !important;
        }

        /* Fix for the main content area */
        [data-theme="dark"] main {
            background-color: #111827 !important;
            color: var(--text-dark) !important;
        }

        /* Fix for the user dropdown button */
        [data-theme="dark"] .inline-flex.items-center.px-3.py-2 {
            color: var(--text-dark) !important;
            background-color: #374151 !important;
        }

        [data-theme="dark"] .inline-flex.items-center.px-3.py-2:hover {
            color: white !important;
            background-color: #4b5563 !important;
        }

        /* Special fix for navigation text colors */
        .nav-link.text-dark-navy,
        .responsive-nav-link.text-dark-navy {
            color: var(--dark-navy) !important;
        }

        /* Ensure mobile menu items are visible in light mode */
        .mobile-nav-content .responsive-nav-link {
            color: var(--dark-navy) !important;
        }

        [data-theme="dark"] .mobile-nav-content .responsive-nav-link {
            color: var(--text-dark) !important;
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-50">
        <!-- Navigation -->
        <nav class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <a href="{{ route('home') }}" class="navbar-brand flex items-center">
                            <img src="{{ asset('images/logo.png') }}"
                                alt="{{ config('app.name', 'Union Soft') }}"
                                class="logo-img">
                            <span class="hidden lg:inline ml-2 text-xl font-bold text-dark-navy">UnionSoft</span>
                        </a>
                    </div>

                    <!-- Desktop Navigation -->
                    <div class="desktop-nav hidden md:flex items-center space-x-6">
                        <div class="flex items-center space-x-1">
                            <!-- EXPLICIT TEXT COLOR CLASSES ADDED -->
                            <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="px-3 py-2 text-dark-navy">
                                <i class="fas fa-home mr-2"></i> {{ __('Home') }}
                            </x-nav-link>
                            <x-nav-link :href="route('about')" :active="request()->routeIs('about')" class="px-3 py-2 text-dark-navy">
                                <i class="fas fa-info-circle mr-2"></i> {{ __('About') }}
                            </x-nav-link>
                            <x-nav-link :href="route('services')" :active="request()->routeIs('services')" class="px-3 py-2 text-dark-navy">
                                <i class="fas fa-cogs mr-2"></i> {{ __('Services') }}
                            </x-nav-link>
                            <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="px-3 py-2 text-dark-navy">
                                <i class="fas fa-envelope mr-2"></i> {{ __('Contact') }}
                            </x-nav-link>
                        </div>

                        <!-- Desktop Actions -->
                        <div class="flex items-center space-x-4">
                            <!-- Dark/Light Mode Toggle -->
                            <button id="theme-toggle" class="theme-toggle">
                                <i class="fas fa-moon" id="theme-icon"></i>
                            </button>

                            @auth
                            <div class="relative">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-dark-navy bg-white hover:text-primary-mint focus:outline-none transition ease-in-out duration-150">
                                            <div>{{ Auth::user()->name }}</div>
                                            <div class="ml-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('profile.edit')" class="text-dark-navy">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>

                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                                this.closest('form').submit();"
                                                class="text-dark-navy">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                            @else
                            <div class="flex items-center space-x-3">
                                <!-- EXPLICIT TEXT COLOR CLASSES ADDED -->
                                <x-nav-link :href="route('login')" :active="request()->routeIs('login')" class="text-dark-navy hover:text-primary-mint">
                                    <i class="fas fa-sign-in-alt mr-2"></i> {{ __('Login') }}
                                </x-nav-link>

                                @if (Route::has('register'))
                                <x-nav-link :href="route('register')" :active="request()->routeIs('register')" class="btn-primary">
                                    <i class="fas fa-user-plus mr-2"></i> {{ __('Register') }}
                                </x-nav-link>
                                @endif
                            </div>
                            @endauth
                        </div>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="mobile-nav-actions flex items-center md:hidden">
                        <!-- Dark/Light Mode Toggle for Mobile -->
                        <button id="theme-toggle-mobile" class="theme-toggle mr-2">
                            <i class="fas fa-moon" id="theme-icon-mobile"></i>
                        </button>

                        <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-dark-navy hover:text-primary-mint hover:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div class="mobile-nav-overlay" id="mobile-nav-overlay"></div>
            <div class="mobile-nav-content" id="mobile-nav-content">
                <div class="p-4">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-bold text-dark-navy">Menu</h3>
                        <button id="close-mobile-menu" class="p-2 rounded-md hover:bg-gray-100 text-dark-navy">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="space-y-2 mb-6">
                        <!-- EXPLICIT TEXT COLOR CLASSES ADDED -->
                        <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" class="block py-3 px-4 rounded-lg text-dark-navy">
                            <i class="fas fa-home mr-3"></i> {{ __('Home') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')" class="block py-3 px-4 rounded-lg text-dark-navy">
                            <i class="fas fa-info-circle mr-3"></i> {{ __('About') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('services')" :active="request()->routeIs('services')" class="block py-3 px-4 rounded-lg text-dark-navy">
                            <i class="fas fa-cogs mr-3"></i> {{ __('Services') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="block py-3 px-4 rounded-lg text-dark-navy">
                            <i class="fas fa-envelope mr-3"></i> {{ __('Contact') }}
                        </x-responsive-nav-link>
                    </div>

                    <div class="pt-4 border-t border-gray-200">
                        @auth
                        <div class="mb-4 px-4">
                            <div class="font-medium text-base text-dark-navy">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-gray-600">{{ Auth::user()->email }}</div>
                        </div>

                        <div class="space-y-2">
                            <x-responsive-nav-link :href="route('profile.edit')" class="block py-3 px-4 rounded-lg text-dark-navy">
                                <i class="fas fa-user mr-3"></i> {{ __('Profile') }}
                            </x-responsive-nav-link>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                    class="block py-3 px-4 rounded-lg text-dark-navy">
                                    <i class="fas fa-sign-out-alt mr-3"></i> {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </div>
                        @else
                        <div class="space-y-2">
                            <x-responsive-nav-link :href="route('login')" class="block py-3 px-4 rounded-lg text-dark-navy">
                                <i class="fas fa-sign-in-alt mr-3"></i> {{ __('Login') }}
                            </x-responsive-nav-link>

                            @if (Route::has('register'))
                            <x-responsive-nav-link :href="route('register')" class="block py-3 px-4 rounded-lg btn-primary text-dark-navy">
                                <i class="fas fa-user-plus mr-3"></i> {{ __('Register') }}
                            </x-responsive-nav-link>
                            @endif
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="bg-gray-50">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="footer">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-4 text-white"><span class="text-primary-mint">Union</span>Soft</h3>
                        <p class="text-gray-300">From Vision to Victory</p>
                        <p class="mt-4 text-gray-300">Empowering Digital Excellence through innovative software solutions and comprehensive training programs.</p>
                    </div>

                    <div>
                        <h4 class="text-lg font-semibold mb-4 text-white">Quick Links</h4>
                        <ul class="space-y-2">
                            <li><a href="{{ route('home') }}" class="hover:text-primary-mint">Home</a></li>
                            <li><a href="{{ route('about') }}" class="hover:text-primary-mint">About Us</a></li>
                            <li><a href="{{ route('services') }}" class="hover:text-primary-mint">Services</a></li>
                            <li><a href="{{ route('contact') }}" class="hover:text-primary-mint">Contact</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-lg font-semibold mb-4 text-white">Services</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="hover:text-primary-mint">Web Development</a></li>
                            <li><a href="#" class="hover:text-primary-mint">E-commerce Solutions</a></li>
                            <li><a href="#" class="hover:text-primary-mint">Digital Marketing</a></li>
                            <li><a href="#" class="hover:text-primary-mint">Training & Skills</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-lg font-semibold mb-4 text-white">Contact Info</h4>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-map-marker-alt mr-3 text-primary-mint"></i>
                                <span class="text-gray-300">Gulgasht Colony, Multan, Pakistan</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-phone mr-3 text-primary-mint"></i>
                                <span class="text-gray-300">+92 303 4503319</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-envelope mr-3 text-primary-mint"></i>
                                <span class="text-gray-300">info@theunionsoft.com</span>
                            </li>
                        </ul>
                        <div class="mt-6 flex space-x-4">
                            <a href="#" class="text-gray-300 hover:text-primary-mint">
                                <i class="fab fa-facebook-f text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-primary-mint">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-primary-mint">
                                <i class="fab fa-linkedin-in text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-primary-mint">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-400">
                    <p>&copy; {{ date('Y') }} Union Soft. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Dark/Light Mode Toggle for Breeze
        function initThemeToggle() {
            const themeToggle = document.getElementById('theme-toggle');
            const themeToggleMobile = document.getElementById('theme-toggle-mobile');
            const themeIcon = document.getElementById('theme-icon');
            const themeIconMobile = document.getElementById('theme-icon-mobile');
            const htmlElement = document.documentElement;

            // Check for saved theme or prefer-color-scheme
            const savedTheme = localStorage.getItem('theme') ||
                (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');

            // Apply the theme to data-theme attribute (Breeze's method)
            if (savedTheme === 'dark') {
                htmlElement.setAttribute('data-theme', 'dark');
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
                themeIconMobile.classList.remove('fa-moon');
                themeIconMobile.classList.add('fa-sun');
            } else {
                htmlElement.setAttribute('data-theme', 'light');
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
                themeIconMobile.classList.remove('fa-sun');
                themeIconMobile.classList.add('fa-moon');
            }

            // Toggle function
            function toggleTheme() {
                if (htmlElement.getAttribute('data-theme') === 'dark') {
                    htmlElement.setAttribute('data-theme', 'light');
                    localStorage.setItem('theme', 'light');
                    themeIcon.classList.remove('fa-sun');
                    themeIcon.classList.add('fa-moon');
                    themeIconMobile.classList.remove('fa-sun');
                    themeIconMobile.classList.add('fa-moon');
                } else {
                    htmlElement.setAttribute('data-theme', 'dark');
                    localStorage.setItem('theme', 'dark');
                    themeIcon.classList.remove('fa-moon');
                    themeIcon.classList.add('fa-sun');
                    themeIconMobile.classList.remove('fa-moon');
                    themeIconMobile.classList.add('fa-sun');
                }
            }

            // Add event listeners
            if (themeToggle) themeToggle.addEventListener('click', toggleTheme);
            if (themeToggleMobile) themeToggleMobile.addEventListener('click', toggleTheme);

            // Listen for system theme changes
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                if (!localStorage.getItem('theme')) {
                    const newTheme = e.matches ? 'dark' : 'light';
                    htmlElement.setAttribute('data-theme', newTheme);
                    if (newTheme === 'dark') {
                        themeIcon.classList.remove('fa-moon');
                        themeIcon.classList.add('fa-sun');
                        themeIconMobile.classList.remove('fa-moon');
                        themeIconMobile.classList.add('fa-sun');
                    } else {
                        themeIcon.classList.remove('fa-sun');
                        themeIcon.classList.add('fa-moon');
                        themeIconMobile.classList.remove('fa-sun');
                        themeIconMobile.classList.add('fa-moon');
                    }
                }
            });
        }

        // Mobile Menu Toggle
        function initMobileMenu() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const closeMobileMenu = document.getElementById('close-mobile-menu');
            const mobileNavOverlay = document.getElementById('mobile-nav-overlay');
            const mobileNavContent = document.getElementById('mobile-nav-content');

            function openMobileMenu() {
                mobileNavOverlay.classList.add('open');
                mobileNavContent.classList.add('open');
                document.body.style.overflow = 'hidden';
            }

            function closeMobileMenuFunc() {
                mobileNavOverlay.classList.remove('open');
                mobileNavContent.classList.remove('open');
                document.body.style.overflow = '';
            }

            if (mobileMenuButton) {
                mobileMenuButton.addEventListener('click', openMobileMenu);
            }

            if (closeMobileMenu) {
                closeMobileMenu.addEventListener('click', closeMobileMenuFunc);
            }

            if (mobileNavOverlay) {
                mobileNavOverlay.addEventListener('click', closeMobileMenuFunc);
            }

            // Close menu when clicking on a link
            const mobileLinks = document.querySelectorAll('#mobile-nav-content a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', closeMobileMenuFunc);
            });
        }

        // Active link highlighting
        function initActiveLinks() {
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('a.nav-link, a.responsive-nav-link');

            navLinks.forEach(link => {
                link.classList.remove('active');

                const href = link.getAttribute('href');
                if (href === currentPath || (href !== '/' && currentPath.startsWith(href))) {
                    link.classList.add('active');
                }
            });
        }

        // Initialize everything when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            initThemeToggle();
            initMobileMenu();
            initActiveLinks();
        });
    </script>

    <!-- Add Alpine.js if not already included -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>