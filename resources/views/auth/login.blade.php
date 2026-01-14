<x-guest-layout>
    <!-- Logo and Heading -->
    <div class="text-center mb-8">
        <div class="flex justify-center mb-6">
            <div class="bg-white p-4 rounded-2xl shadow-2xl transform -rotate-6 dark:bg-gray-800">
                <div class="bg-gradient-primary p-2 rounded-xl">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <span class="text-3xl font-bold text-white">
                            <span class="text-dark-navy dark:text-white">Union</span>Soft
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <h2 class="text-3xl font-bold text-dark-navy dark:text-white mb-2">
            Welcome Back
        </h2>
        <p class="text-gray-600 dark:text-gray-300">
            Sign in to your Union Soft account
        </p>
    </div>

    <!-- Login Form -->
    <div class="space-y-6">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4 text-center text-sm text-green-600 dark:text-green-400" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-sm font-medium text-dark-navy dark:text-gray-200 mb-2">
                    <i class="fas fa-envelope mr-2 text-primary-mint"></i>Email Address
                </label>
                <div class="relative">
                    <input id="email" 
                           name="email" 
                           type="email" 
                           :value="old('email')" 
                           required 
                           autofocus 
                           autocomplete="username"
                           class="w-full px-4 py-3 pl-10 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-mint focus:border-primary-mint transition placeholder-gray-400 dark:placeholder-gray-500 dark:bg-gray-700 dark:text-white"
                           placeholder="you@example.com">
                    <div class="absolute left-3 top-1/2 transform -translate-y-1/2">
                        <i class="fas fa-user text-gray-400 dark:text-gray-500"></i>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600 dark:text-red-400" />
            </div>

            <!-- Password -->
            <div>
                <div class="flex items-center justify-between mb-2">
                    <label for="password" class="block text-sm font-medium text-dark-navy dark:text-gray-200">
                        <i class="fas fa-lock mr-2 text-primary-mint"></i>Password
                    </label>
                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-green dark:text-blue-400 hover:text-primary-mint dark:hover:text-primary-mint transition" href="{{ route('password.request') }}">
                            Forgot password?
                        </a>
                    @endif
                </div>
                <div class="relative">
                    <input id="password" 
                           name="password" 
                           type="password" 
                           required 
                           autocomplete="current-password"
                           class="w-full px-4 py-3 pl-10 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-mint focus:border-primary-mint transition placeholder-gray-400 dark:placeholder-gray-500 dark:bg-gray-700 dark:text-white"
                           placeholder="••••••••">
                    <div class="absolute left-3 top-1/2 transform -translate-y-1/2">
                        <i class="fas fa-key text-gray-400 dark:text-gray-500"></i>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600 dark:text-red-400" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <input id="remember_me" 
                       name="remember" 
                       type="checkbox" 
                       class="h-4 w-4 text-primary-mint focus:ring-primary-mint border-gray-300 dark:border-gray-600 rounded dark:bg-gray-700">
                <label for="remember_me" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">
                    Remember me
                </label>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" 
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent rounded-lg text-lg font-semibold text-dark-navy bg-gradient-primary hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-mint transition transform hover:-translate-y-0.5 dark:focus:ring-offset-gray-800">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <i class="fas fa-sign-in-alt text-dark-navy"></i>
                    </span>
                    Sign In
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </button>
            </div>
        </form>

        <!-- Divider -->
        <div class="mt-6">
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400">
                        Or continue with
                    </span>
                </div>
            </div>
        </div>

        <!-- Social Login -->
        <div class="mt-6 grid grid-cols-3 gap-3">
            <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm bg-white dark:bg-gray-700 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-600 transition">
                <i class="fab fa-google text-red-500"></i>
            </a>
            <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm bg-white dark:bg-gray-700 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-600 transition">
                <i class="fab fa-facebook-f text-blue-600 dark:text-blue-400"></i>
            </a>
            <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm bg-white dark:bg-gray-700 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-600 transition">
                <i class="fab fa-linkedin-in text-blue-700 dark:text-blue-500"></i>
            </a>
        </div>

        <!-- Footer -->
        <div class="pt-6 border-t border-gray-200 dark:border-gray-700">
            <div class="text-center">
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Don't have an account?
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="font-medium text-primary-mint hover:text-secondary-mint transition ml-1">
                            Sign up
                        </a>
                    @endif
                </p>
                <a href="{{ route('home') }}" class="inline-flex items-center text-sm text-gray-500 dark:text-gray-400 hover:text-primary-mint transition mt-2">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Back to home
                </a>
            </div>
        </div>

        <!-- Stats -->
        <div class="text-center text-gray-600 dark:text-gray-400 text-sm mt-8">
            <div class="flex justify-center space-x-6">
                <div>
                    <div class="font-bold text-dark-navy dark:text-white">99%</div>
                    <div class="text-gray-500 dark:text-gray-400">Satisfaction</div>
                </div>
                <div class="border-l border-gray-300 dark:border-gray-600"></div>
                <div>
                    <div class="font-bold text-dark-navy dark:text-white">24/7</div>
                    <div class="text-gray-500 dark:text-gray-400">Support</div>
                </div>
                <div class="border-l border-gray-300 dark:border-gray-600"></div>
                <div>
                    <div class="font-bold text-dark-navy dark:text-white">350+</div>
                    <div class="text-gray-500 dark:text-gray-400">Projects</div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Custom styles for login page */
        :root {
            --primary-mint: #3BEB9A;
            --secondary-mint: #3ED1A2;
            --dark-navy: #0D3141;
            --blue-green: #5199AE;
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, var(--primary-mint) 0%, var(--secondary-mint) 100%);
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

        /* Dark mode specific overrides */
        [data-theme="dark"] .text-dark-navy {
            color: #E5E7EB !important; /* Light text for dark mode */
        }

        [data-theme="dark"] .bg-gradient-to-br.from-dark-navy.to-blue-green {
            background: linear-gradient(135deg, #0D3141 0%, #1a4a5e 100%) !important;
        }

        [data-theme="dark"] .bg-white {
            background-color: #1f2937 !important;
        }

        [data-theme="dark"] .shadow-2xl {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5) !important;
        }
    </style>
</x-guest-layout>