<x-guest-layout>
    <!-- Hero Section -->
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-dark-navy to-blue-green py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <!-- Logo and Heading -->
            <div class="text-center">
                <div class="flex justify-center mb-6">
                    <div class="bg-white p-4 rounded-2xl shadow-2xl transform -rotate-6">
                        <div class="bg-gradient-primary p-2 rounded-xl">
                            <a href="{{ route('home') }}" class="flex items-center">
                                <span class="text-3xl font-bold text-white">
                                    <span class="text-dark-navy">Union</span>Soft
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <h2 class="text-3xl font-bold text-white mb-2">
                    Welcome Back
                </h2>
                <p class="text-gray-300">
                    Sign in to your Union Soft account
                </p>
            </div>

            <!-- Login Form -->
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
                <div class="px-8 py-8">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4 text-center text-sm" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-dark-navy mb-2">
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
                                       class="w-full px-4 py-3 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-mint focus:border-primary-mint transition placeholder-gray-400"
                                       placeholder="you@example.com">
                                <div class="absolute left-3 top-1/2 transform -translate-y-1/2">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm" />
                        </div>

                        <!-- Password -->
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <label for="password" class="block text-sm font-medium text-dark-navy">
                                    <i class="fas fa-lock mr-2 text-primary-mint"></i>Password
                                </label>
                                @if (Route::has('password.request'))
                                    <a class="text-sm text-blue-green hover:text-primary-mint transition" href="{{ route('password.request') }}">
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
                                       class="w-full px-4 py-3 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-mint focus:border-primary-mint transition placeholder-gray-400"
                                       placeholder="••••••••">
                                <div class="absolute left-3 top-1/2 transform -translate-y-1/2">
                                    <i class="fas fa-key text-gray-400"></i>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm" />
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center">
                            <input id="remember_me" 
                                   name="remember" 
                                   type="checkbox" 
                                   class="h-4 w-4 text-primary-mint focus:ring-primary-mint border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                                Remember me
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" 
                                    class="group relative w-full flex justify-center py-3 px-4 border border-transparent rounded-lg text-lg font-semibold text-dark-navy bg-gradient-primary hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-mint transition transform hover:-translate-y-0.5">
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
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-gray-500">
                                    Or continue with
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Social Login -->
                    <div class="mt-6 grid grid-cols-3 gap-3">
                        <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition">
                            <i class="fab fa-google text-red-500"></i>
                        </a>
                        <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition">
                            <i class="fab fa-facebook-f text-blue-600"></i>
                        </a>
                        <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition">
                            <i class="fab fa-linkedin-in text-blue-700"></i>
                        </a>
                    </div>
                </div>

                <!-- Footer -->
                <div class="bg-gray-50 px-8 py-4 border-t border-gray-200">
                    <div class="text-center">
                        <p class="text-sm text-gray-600">
                            Don't have an account?
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="font-medium text-primary-mint hover:text-secondary-mint transition ml-1">
                                    Sign up
                                </a>
                            @endif
                        </p>
                        <a href="{{ route('home') }}" class="inline-flex items-center text-sm text-gray-500 hover:text-primary-mint transition mt-2">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Back to home
                        </a>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="text-center text-white text-sm">
                <div class="flex justify-center space-x-6">
                    <div>
                        <div class="font-bold">99%</div>
                        <div class="text-gray-300">Satisfaction</div>
                    </div>
                    <div class="border-l border-gray-600"></div>
                    <div>
                        <div class="font-bold">24/7</div>
                        <div class="text-gray-300">Support</div>
                    </div>
                    <div class="border-l border-gray-600"></div>
                    <div>
                        <div class="font-bold">350+</div>
                        <div class="text-gray-300">Projects</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Add these styles to your guest layout or app.css */
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

        .from-dark-navy {
            --tw-gradient-from: var(--dark-navy);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(13, 49, 65, 0));
        }

        .to-blue-green {
            --tw-gradient-to: var(--blue-green);
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

        .focus\:ring-primary-mint:focus {
            --tw-ring-color: var(--primary-mint) !important;
        }

        .focus\:border-primary-mint:focus {
            border-color: var(--primary-mint) !important;
        }
    </style>
</x-guest-layout>