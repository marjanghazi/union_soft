<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login - {{ config('app.name', 'Union Soft') }}</title>
    <meta name="description" content="Sign in to your UnionSoft account to access premium source codes and services.">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|raleway:400,500,600,700" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS via CDN (or use your build) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'primary-mint': '#3BEB9A',
                        'secondary-mint': '#3ED1A2',
                        'dark-navy': '#0D3141',
                        'blue-green': '#5199AE',
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                        'raleway': ['Raleway', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        :root {
            --primary-mint: #3BEB9A;
            --secondary-mint: #3ED1A2;
            --dark-navy: #0D3141;
            --blue-green: #5199AE;
            --light-gray: #E0E1E1;
            --medium-gray: #ABADAD;
            --white: #FFFFFF;
        }

        body {
            font-family: 'Inter', sans-serif;
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
            background: linear-gradient(135deg, var(--primary-mint) 0%, var(--secondary-mint) 100%);
            color: var(--dark-navy);
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(59, 235, 154, 0.3);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .login-container {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            min-height: 100vh;
        }

        .dark .login-container {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        }

        .login-card {
            background: white;
            border-radius: 1.5rem;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .dark .login-card {
            background: #1f2937;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        .login-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }

        .dark .login-card:hover {
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
        }

        .input-field {
            transition: all 0.3s ease;
            border: 2px solid #e5e7eb;
            background-color: white;
            color: #111827;
        }

        .dark .input-field {
            border-color: #4b5563;
            background-color: #374151;
            color: #f9fafb;
        }

        .input-field:focus {
            border-color: var(--primary-mint);
            box-shadow: 0 0 0 3px rgba(59, 235, 154, 0.1);
            outline: none;
        }

        .theme-toggle {
            position: fixed;
            top: 2rem;
            right: 2rem;
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            background: white;
            border: 2px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 50;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            color: #111827;
        }

        .dark .theme-toggle {
            background: #374151;
            border-color: #4b5563;
            color: #f9fafb;
        }

        .theme-toggle:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        }

        .social-btn {
            transition: all 0.3s ease;
            color: #374151;
        }

        .dark .social-btn {
            color: #d1d5db;
        }

        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .dark .social-btn:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        /* Dark mode specific styles */
        .dark .text-gray-900 {
            color: #f9fafb !important;
        }

        .dark .text-gray-700 {
            color: #d1d5db !important;
        }

        .dark .text-gray-600 {
            color: #9ca3af !important;
        }

        .dark .text-gray-500 {
            color: #6b7280 !important;
        }

        .dark .bg-white {
            background-color: #1f2937 !important;
        }

        .dark .border-gray-300 {
            border-color: #4b5563 !important;
        }

        .dark .bg-gray-50 {
            background-color: #111827 !important;
        }

        /* Loading animation */
        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .fa-spinner {
            animation: spin 1s linear infinite;
        }

        /* Responsive design */
        @media (max-width: 640px) {
            .login-card {
                margin: 1rem;
                padding: 1.5rem;
            }
            
            .theme-toggle {
                top: 1rem;
                right: 1rem;
                width: 2.5rem;
                height: 2.5rem;
            }
        }
    </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900">
    <!-- Theme Toggle -->
    <button id="theme-toggle" class="theme-toggle">
        <i class="fas fa-moon" id="theme-icon"></i>
    </button>

    <!-- Main Content -->
    <div class="login-container flex items-center justify-center min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="login-card max-w-md w-full p-8 animate-fade-in-up">
            <!-- Logo and Header -->
            <div class="text-center">
                <div class="flex justify-center mb-6">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('images/logo.png') }}" 
                             alt="{{ config('app.name', 'Union Soft') }}"
                             class="h-16 w-auto">
                        <span class="ml-3 text-2xl font-bold text-gray-900 dark:text-gray-100 font-raleway">
                            Union<span class="text-gradient-primary">Soft</span>
                        </span>
                    </a>
                </div>
                
                <h2 class="text-3xl font-bold text-gray-900 dark:text-gray-100 font-raleway">
                    Welcome Back
                </h2>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                    Sign in to your account to continue
                </p>
            </div>

            <!-- Session Status -->
            @if (session('status'))
            <div class="mt-6 p-4 rounded-lg bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800">
                <div class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-3"></i>
                    <span class="text-sm text-green-700 dark:text-green-300">
                        {{ session('status') }}
                    </span>
                </div>
            </div>
            @endif

            <!-- Validation Errors -->
            @if ($errors->any())
            <div class="mt-6 p-4 rounded-lg bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class="fas fa-exclamation-circle text-red-500 mt-0.5"></i>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800 dark:text-red-300">
                            There were errors with your submission
                        </h3>
                        <div class="mt-2 text-sm text-red-700 dark:text-red-300">
                            <ul class="list-disc pl-5 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-6">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Email Address
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400 dark:text-gray-500"></i>
                        </div>
                        <input 
                            id="email" 
                            name="email" 
                            type="email" 
                            required 
                            autofocus
                            value="{{ old('email') }}"
                            class="input-field appearance-none block w-full pl-10 pr-3 py-3 rounded-lg placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none transition duration-150 ease-in-out"
                            placeholder="you@example.com">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Password
                        </label>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm font-medium text-primary-mint hover:text-blue-green transition-colors">
                            Forgot password?
                        </a>
                        @endif
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400 dark:text-gray-500"></i>
                        </div>
                        <input 
                            id="password" 
                            name="password" 
                            type="password" 
                            required 
                            autocomplete="current-password"
                            class="input-field appearance-none block w-full pl-10 pr-10 py-3 rounded-lg placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none transition duration-150 ease-in-out"
                            placeholder="••••••••">
                        <button type="button" onclick="togglePasswordVisibility()" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 dark:text-gray-500 hover:text-gray-600 dark:hover:text-gray-300">
                            <i id="password-toggle-icon" class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input 
                        id="remember_me" 
                        name="remember" 
                        type="checkbox" 
                        class="h-4 w-4 text-primary-mint focus:ring-primary-mint border-gray-300 dark:border-gray-600 rounded"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember_me" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">
                        Remember me
                    </label>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" id="submit-btn" class="btn-primary group relative w-full flex justify-center py-3 px-4 border border-transparent rounded-lg font-medium shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-mint">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <i class="fas fa-sign-in-alt"></i>
                        </span>
                        <span id="btn-text">Sign in</span>
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </div>

                <!-- Divider -->
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400">
                            Or continue with
                        </span>
                    </div>
                </div>

                <!-- Social Login -->
                <div class="grid grid-cols-2 gap-3">
                    <a href="#" class="social-btn w-full inline-flex justify-center items-center py-3 px-4 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm bg-white dark:bg-gray-800 text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-mint transition">
                        <i class="fab fa-google text-red-500 mr-2"></i>
                        Google
                    </a>
                    <a href="#" class="social-btn w-full inline-flex justify-center items-center py-3 px-4 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm bg-white dark:bg-gray-800 text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-mint transition">
                        <i class="fab fa-github text-gray-700 dark:text-gray-200 mr-2"></i>
                        GitHub
                    </a>
                </div>

                <!-- Register Link -->
                @if (Route::has('register'))
                <div class="text-center mt-6">
                    <p class="text-sm text-gray-600 dark:text-gray-300">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="font-medium text-primary-mint hover:text-blue-green transition-colors ml-1">
                            Sign up now
                        </a>
                    </p>
                </div>
                @endif
            </form>

            <!-- Back to Home -->
            <div class="text-center mt-8 pt-6 border-t border-gray-200 dark:border-gray-700">
                <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 transition">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Back to home
                </a>
            </div>
        </div>
    </div>

    <script>
        // Theme Toggle
        function initTheme() {
            const themeToggle = document.getElementById('theme-toggle');
            const themeIcon = document.getElementById('theme-icon');
            const htmlElement = document.documentElement;

            // Check saved theme or system preference
            const savedTheme = localStorage.getItem('theme');
            const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

            if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
                htmlElement.classList.add('dark');
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
            } else {
                htmlElement.classList.remove('dark');
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
            }

            themeToggle.addEventListener('click', () => {
                if (htmlElement.classList.contains('dark')) {
                    htmlElement.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                    themeIcon.classList.remove('fa-sun');
                    themeIcon.classList.add('fa-moon');
                } else {
                    htmlElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                    themeIcon.classList.remove('fa-moon');
                    themeIcon.classList.add('fa-sun');
                }
            });
        }

        // Password Visibility Toggle
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const icon = document.getElementById('password-toggle-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        // Form Validation
        document.addEventListener('DOMContentLoaded', function() {
            initTheme();
            
            const form = document.querySelector('form');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const submitBtn = document.getElementById('submit-btn');
            const btnText = document.getElementById('btn-text');

            function validateEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }

            function showError(input, message) {
                const formGroup = input.closest('div');
                let errorElement = formGroup.querySelector('.error-message');
                
                if (!errorElement) {
                    errorElement = document.createElement('p');
                    errorElement.className = 'mt-1 text-sm text-red-600 dark:text-red-400 error-message';
                    formGroup.appendChild(errorElement);
                }
                
                errorElement.textContent = message;
                input.classList.add('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
            }

            function clearError(input) {
                const formGroup = input.closest('div');
                const errorElement = formGroup.querySelector('.error-message');
                
                if (errorElement) {
                    errorElement.remove();
                }
                
                input.classList.remove('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
            }

            emailInput.addEventListener('blur', function() {
                if (!this.value) {
                    showError(this, 'Email is required');
                } else if (!validateEmail(this.value)) {
                    showError(this, 'Please enter a valid email address');
                } else {
                    clearError(this);
                }
            });

            passwordInput.addEventListener('blur', function() {
                if (!this.value) {
                    showError(this, 'Password is required');
                } else if (this.value.length < 8) {
                    showError(this, 'Password must be at least 8 characters');
                } else {
                    clearError(this);
                }
            });

            form.addEventListener('submit', function(e) {
                let isValid = true;
                
                if (!emailInput.value || !validateEmail(emailInput.value)) {
                    showError(emailInput, 'Please enter a valid email address');
                    isValid = false;
                }
                
                if (!passwordInput.value || passwordInput.value.length < 8) {
                    showError(passwordInput, 'Password must be at least 8 characters');
                    isValid = false;
                }
                
                if (!isValid) {
                    e.preventDefault();
                    const firstError = form.querySelector('.error-message');
                    if (firstError) {
                        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                } else {
                    // Show loading state
                    submitBtn.disabled = true;
                    submitBtn.classList.add('opacity-75', 'cursor-not-allowed');
                    btnText.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Signing in...';
                }
            });

            // Real-time validation
            emailInput.addEventListener('input', function() {
                if (this.value && validateEmail(this.value)) {
                    clearError(this);
                }
            });

            passwordInput.addEventListener('input', function() {
                if (this.value && this.value.length >= 8) {
                    clearError(this);
                }
            });

            // Enter key submits form
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' && (emailInput === document.activeElement || passwordInput === document.activeElement)) {
                    e.preventDefault();
                    form.dispatchEvent(new Event('submit'));
                }
            });

            // Add focus styles
            const inputs = [emailInput, passwordInput];
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('ring-2', 'ring-primary-mint', 'ring-opacity-50');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('ring-2', 'ring-primary-mint', 'ring-opacity-50');
                });
            });
        });

        // Check for autofill
        window.addEventListener('load', function() {
            setTimeout(() => {
                const emailInput = document.getElementById('email');
                const passwordInput = document.getElementById('password');
                
                if (emailInput.value) {
                    emailInput.dispatchEvent(new Event('input'));
                }
                
                if (passwordInput.value) {
                    passwordInput.dispatchEvent(new Event('input'));
                }
            }, 100);
        });
    </script>
</body>
</html>