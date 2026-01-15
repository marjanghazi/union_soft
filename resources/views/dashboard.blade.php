<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold">Welcome back, {{ Auth::user()->name }}!</h3>
                        
                        @if(Auth::user()->isAdmin())
                            <a href="{{ route('admin.dashboard') }}" class="btn-primary px-4 py-2 rounded-md text-sm font-medium">
                                <i class="fas fa-tachometer-alt mr-2"></i> Go to Admin Dashboard
                            </a>
                        @endif
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- User-specific content here -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h4 class="font-medium text-gray-700 mb-2">Your Profile</h4>
                            <p class="text-gray-600 text-sm">Update your personal information and preferences</p>
                            <a href="{{ route('profile.edit') }}" class="text-primary-mint hover:underline mt-3 inline-block">
                                Edit Profile →
                            </a>
                        </div>
                        
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h4 class="font-medium text-gray-700 mb-2">Recent Activity</h4>
                            <p class="text-gray-600 text-sm">Check your latest interactions with our platform</p>
                        </div>
                        
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h4 class="font-medium text-gray-700 mb-2">Account Settings</h4>
                            <p class="text-gray-600 text-sm">Manage your account preferences and security</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>