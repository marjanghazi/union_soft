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

    <!-- Tailwind CSS via CDN -->
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
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
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
            padding: 1rem;
        }

        .dark .login-container {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        }

        .login-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            max-width: 420px;
            width: 100%;
            margin: 0 auto;
        }

        .dark .login-card {
            background: #1f2937;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        .input-field {
            transition: all 0.3s ease;
            border: 1.5px solid #e5e7eb;
            background-color: white;
            color: #111827;
            font-size: 0.9375rem;
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
            top: 1.5rem;
            right: 1.5rem;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            background: white;
            border: 1.5px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 50;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            color: #111827;
            font-size: 0.875rem;
        }

        .dark .theme-toggle {
            background: #374151;
            border-color: #4b5563;
            color: #f9fafb;
        }

        .theme-toggle:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .social-btn {
            transition: all 0.3s ease;
            color: #374151;
            font-size: 0.875rem;
        }

        .dark .social-btn {
            color: #d1d5db;
        }

        .social-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .dark .social-btn:hover {
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.4s ease-out;
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

        /* Compact spacing */
        .compact-space-y > * + * {
            margin-top: 1rem;
        }

        .compact-space-y-sm > * + * {
            margin-top: 0.75rem;
        }

        /* Responsive design */
        @media (max-width: 640px) {
            .login-container {
                padding: 0.75rem;
            }
            
            .login-card {
                border-radius: 0.75rem;
                padding: 1.25rem !important;
            }
            
            .theme-toggle {
                top: 1rem;
                right: 1rem;
                width: 2.25rem;
                height: 2.25rem;
            }
            
            .mobile-compact {
                font-size: 0.875rem;
            }
            
            .mobile-compact .text-2xl {
                font-size: 1.5rem;
            }
            
            .mobile-compact .text-3xl {
                font-size: 1.75rem;
            }
            
            .mobile-compact .h-16 {
                height: 3rem;
            }
        }

        @media (max-width: 380px) {
            .login-card {
                padding: 1rem !important;
            }
            
            .grid-cols-2 {
                grid-template-columns: 1fr;
                gap: 0.5rem;
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
    <div class="login-container flex items-center justify-center min-h-screen">
        <div class="login-card p-6 animate-fade-in-up">
            <!-- Logo and Header -->
            <div class="text-center mb-6">
                <div class="flex justify-center mb-4">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('images/logo.png') }}" 
                             alt="{{ config('app.name', 'Union Soft') }}"
                             class="h-12 w-auto">
                        <span class="ml-2 text-xl font-bold text-gray-900 dark:text-gray-100 font-raleway mobile-compact">
                            Union<span class="text-gradient-primary">Soft</span>
                        </span>
                    </a>
                </div>
                
                <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100 font-raleway mb-1 mobile-compact">
                    Welcome Back
                </h2>
                <p class="text-sm text-gray-600 dark:text-gray-300 mobile-compact">
                    Sign in to your account
                </p>
            </div>

            <!-- Session Status -->
            @if (session('status'))
            <div class="mb-4 p-3 rounded-lg bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800">
                <div class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 text-sm mr-2"></i>
                    <span class="text-xs text-green-700 dark:text-green-300">
                        {{ session('status') }}
                    </span>
                </div>
            </div>
            @endif

            <!-- Validation Errors -->
            @if ($errors->any())
            <div class="mb-4 p-3 rounded-lg bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class="fas fa-exclamation-circle text-red-500 text-sm mt-0.5"></i>
                    </div>
                    <div class="ml-2">
                        <h3 class="text-xs font-medium text-red-800 dark:text-red-300 mb-1">
                            There were errors
                        </h3>
                        <div class="text-xs text-red-700 dark:text-red-300">
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}" class="compact-space-y">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">
                        Email Address
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400 dark:text-gray-500 text-sm"></i>
                        </div>
                        <input 
                            id="email" 
                            name="email" 
                            type="email" 
                            required 
                            autofocus
                            value="{{ old('email') }}"
                            class="input-field appearance-none block w-full pl-9 pr-3 py-2.5 rounded-lg placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none transition duration-150 ease-in-out text-sm"
                            placeholder="you@example.com">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <div class="flex items-center justify-between mb-1">
                        <label for="password" class="block text-xs font-medium text-gray-700 dark:text-gray-300">
                            Password
                        </label>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-xs font-medium text-primary-mint hover:text-blue-green transition-colors">
                            Forgot?
                        </a>
                        @endif
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400 dark:text-gray-500 text-sm"></i>
                        </div>
                        <input 
                            id="password" 
                            name="password" 
                            type="password" 
                            required 
                            autocomplete="current-password"
                            class="input-field appearance-none block w-full pl-9 pr-9 py-2.5 rounded-lg placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none transition duration-150 ease-in-out text-sm"
                            placeholder="••••••••">
                        <button type="button" onclick="togglePasswordVisibility()" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 dark:text-gray-500 hover:text-gray-600 dark:hover:text-gray-300">
                            <i id="password-toggle-icon" class="fas fa-eye text-sm"></i>
                        </button>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input 
                        id="remember_me" 
                        name="remember" 
                        type="checkbox" 
                        class="h-3.5 w-3.5 text-primary-mint focus:ring-primary-mint border-gray-300 dark:border-gray-600 rounded"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember_me" class="ml-2 block text-xs text-gray-700 dark:text-gray-300">
                        Remember me
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="pt-1">
                    <button type="submit" id="submit-btn" class="btn-primary group relative w-full flex justify-center py-2.5 px-4 border border-transparent rounded-lg font-medium shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-mint text-sm">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <i class="fas fa-sign-in-alt text-xs"></i>
                        </span>
                        <span id="btn-text">Sign in</span>
                        <i class="fas fa-arrow-right ml-2 text-xs group-hover:translate-x-0.5 transition-transform"></i>
                    </button>
                </div>

                <!-- Divider -->
                <div class="relative my-4">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
                    </div>
                    <div class="relative flex justify-center">
                        <span class="px-2 bg-white dark:bg-gray-800 text-xs text-gray-500 dark:text-gray-400">
                            Or continue with
                        </span>
                    </div>
                </div>

                <!-- Social Login -->
                <div class="grid grid-cols-2 gap-2">
                    <a href="#" class="social-btn w-full inline-flex justify-center items-center py-2.5 px-3 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-mint transition">
                        <i class="fab fa-google text-red-500 text-sm mr-1.5"></i>
                        <span class="text-xs">Google</span>
                    </a>
                    <a href="#" class="social-btn w-full inline-flex justify-center items-center py-2.5 px-3 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-mint transition">
                        <i class="fab fa-github text-gray-700 dark:text-gray-200 text-sm mr-1.5"></i>
                        <span class="text-xs">GitHub</span>
                    </a>
                </div>

                <!-- Register Link -->
                @if (Route::has('register'))
                <div class="text-center pt-2">
                    <p class="text-xs text-gray-600 dark:text-gray-300">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="font-medium text-primary-mint hover:text-blue-green transition-colors ml-1">
                            Sign up
                        </a>
                    </p>
                </div>
                @endif
            </form>

            <!-- Back to Home -->
            <div class="text-center mt-6 pt-4 border-t border-gray-200 dark:border-gray-700">
                <a href="{{ route('home') }}" class="inline-flex items-center text-xs font-medium text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 transition">
                    <i class="fas fa-arrow-left mr-1.5 text-xs"></i>
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
                    errorElement.className = 'mt-1 text-xs text-red-600 dark:text-red-400 error-message';
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
                    showError(this, 'Please enter a valid email');
                } else {
                    clearError(this);
                }
            });

            passwordInput.addEventListener('blur', function() {
                if (!this.value) {
                    showError(this, 'Password is required');
                } else if (this.value.length < 8) {
                    showError(this, 'Min 8 characters');
                } else {
                    clearError(this);
                }
            });

            form.addEventListener('submit', function(e) {
                let isValid = true;
                
                if (!emailInput.value || !validateEmail(emailInput.value)) {
                    showError(emailInput, 'Please enter a valid email');
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
                    btnText.innerHTML = '<i class="fas fa-spinner fa-spin mr-1.5"></i> Signing in...';
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
                    this.parentElement.classList.add('ring-1', 'ring-primary-mint', 'ring-opacity-50');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('ring-1', 'ring-primary-mint', 'ring-opacity-50');
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