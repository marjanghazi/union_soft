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
            color: var(--dark-navy) !important;
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

        /* Fix for navigation link active state */
        .nav-link.active,
        .responsive-nav-link.active {
            background-color: var(--primary-mint) !important;
            color: var(--dark-navy) !important;
            border-radius: 4px;
        }

        /* Fix for navigation link hover */
        .nav-link:hover:not(.active),
        .responsive-nav-link:hover:not(.active) {
            color: var(--primary-mint) !important;
        }

        /* Fix for button styling in nav */
        .btn-primary.nav-link {
            padding: 8px 16px;
            border-radius: 4px;
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-50">
        <!-- Navigation -->
        <nav class="bg-white shadow-sm" x-data="{ open: false }">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="flex-shrink-0 flex items-center">
                            <a href="{{ route('home') }}" class="navbar-brand flex items-center">
                                <!-- Option 1: Image logo -->
                                <img src="{{ asset('images/logo.png') }}"
                                    alt="{{ config('app.name', 'Union Soft') }}"
                                    class="h-20 w-auto mr-2">

                            </a>
                        </div>

                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                                <i class="fas fa-home mr-2"></i> {{ __('Home') }}
                            </x-nav-link>
                            <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                                <i class="fas fa-info-circle mr-2"></i> {{ __('About') }}
                            </x-nav-link>
                            <x-nav-link :href="route('services')" :active="request()->routeIs('services')">
                                <i class="fas fa-cogs mr-2"></i> {{ __('Services') }}
                            </x-nav-link>
                            <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                                <i class="fas fa-envelope mr-2"></i> {{ __('Contact') }}
                            </x-nav-link>
                        </div>
                    </div>

                    <!-- Right Side Of Navbar -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <!-- Authentication Links -->
                        @auth
                        <div class="ml-3 relative" x-data="{ open: false }">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>
                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                        @else
                        <div class="space-x-4">
                            <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
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

                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': !open}" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="sm:hidden" @click.away="open = false">
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" @click="open = false">
                        <i class="fas fa-home mr-2"></i> {{ __('Home') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')" @click="open = false">
                        <i class="fas fa-info-circle mr-2"></i> {{ __('About') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('services')" :active="request()->routeIs('services')" @click="open = false">
                        <i class="fas fa-cogs mr-2"></i> {{ __('Services') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')" @click="open = false">
                        <i class="fas fa-envelope mr-2"></i> {{ __('Contact') }}
                    </x-responsive-nav-link>
                </div>

                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    @auth
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile.edit')" @click="open = false">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                    this.closest('form').submit();" @click="open = false">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                    @else
                    <div class="space-y-1">
                        <x-responsive-nav-link :href="route('login')" @click="open = false">
                            <i class="fas fa-sign-in-alt mr-2"></i> {{ __('Login') }}
                        </x-responsive-nav-link>

                        @if (Route::has('register'))
                        <x-responsive-nav-link :href="route('register')" @click="open = false">
                            <i class="fas fa-user-plus mr-2"></i> {{ __('Register') }}
                        </x-responsive-nav-link>
                        @endif
                    </div>
                    @endauth
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main>
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
        // Mobile menu functionality with proper event handling
        document.addEventListener('DOMContentLoaded', function() {
            // Make sure all navigation links work with single click
            const navLinks = document.querySelectorAll('a.nav-link, a.responsive-nav-link');

            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    // Only prevent default behavior for links that have JavaScript handlers
                    if (this.getAttribute('href') === '#' || this.hasAttribute('@click')) {
                        e.preventDefault();
                    }

                    // Close mobile menu when a link is clicked
                    const mobileMenu = document.querySelector('[x-data]');
                    if (mobileMenu && mobileMenu.__x && mobileMenu.__x.$data && mobileMenu.__x.$data.open) {
                        mobileMenu.__x.$data.open = false;
                    }
                });
            });

            // Counter animation
            const counters = document.querySelectorAll('.counter');
            const speed = 200;

            function animateCounter(counter) {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(() => animateCounter(counter), 1);
                } else {
                    counter.innerText = target;
                }
            }

            // Intersection Observer for counters
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        counter.setAttribute('data-target', counter.textContent);
                        counter.textContent = '0';
                        animateCounter(counter);
                        observer.unobserve(counter);
                    }
                });
            }, {
                threshold: 0.5
            });

            counters.forEach(counter => {
                observer.observe(counter);
            });

            // Fix for active state styling
            const currentPath = window.location.pathname;
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });

        // Prevent double click issues
        document.addEventListener('dblclick', function(e) {
            if (e.target.tagName === 'A' && e.target.closest('nav')) {
                e.preventDefault();
            }
        });
    </script>

    <!-- Add Alpine.js if not already included -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>