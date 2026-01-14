<x-app-layout>
    <!-- Hero Section - Modernized -->
    <section class="hero-section relative py-16 md:py-24 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-teal-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <!-- Breadcrumb Navigation -->
                <div class="flex justify-center items-center gap-2 mb-8 text-gray-300">
                    <a href="/" class="hover:text-white transition-colors">Home</a>
                    <i class="fas fa-chevron-right text-xs opacity-50"></i>
                    <span class="text-white font-medium">Source Codes</span>
                </div>

                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                    Premium <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-cyan-500">Source Codes</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto mb-10 leading-relaxed">
                    Production-ready code solutions to accelerate your development. 
                    <span class="block text-teal-400 font-medium mt-2">Trusted by 10,000+ developers</span>
                </p>

                <!-- Enhanced Search Bar -->
                <div class="max-w-2xl mx-auto">
                    <form action="{{ route('products.search') }}" method="GET" class="mb-8">
                        <div class="relative group">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-2xl blur opacity-30 group-hover:opacity-50 transition duration-500"></div>
                            <div class="relative">
                                <div class="absolute left-4 top-1/2 transform -translate-y-1/2">
                                    <i class="fas fa-search text-gray-400"></i>
                                </div>
                                <input
                                    type="text"
                                    name="q"
                                    value="{{ request('q') }}"
                                    placeholder="Search source codes (e.g., 'React Dashboard', 'Laravel E-commerce')"
                                    class="w-full pl-12 pr-24 py-4 rounded-2xl bg-gray-900/80 backdrop-blur-sm border border-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent text-base transition-all">
                                <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 px-6 py-2.5 bg-gradient-to-r from-teal-500 to-cyan-600 text-white font-semibold rounded-xl hover:shadow-lg hover:scale-105 transition-all duration-300 flex items-center gap-2">
                                    <span>Search</span>
                                    <i class="fas fa-arrow-right text-sm"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Search Filters -->
                        <div class="flex flex-wrap items-center justify-center gap-3 mt-6">
                            <span class="text-gray-400 text-sm font-medium">Quick Filters:</span>
                            <a href="{{ route('products.index') }}?sort=featured" class="px-4 py-2 bg-gray-800/50 text-gray-300 rounded-xl hover:bg-gray-700 hover:text-white transition-all text-sm font-medium flex items-center gap-2">
                                <i class="fas fa-star text-yellow-500"></i>
                                Featured
                            </a>
                            <a href="{{ route('products.index') }}?sort=newest" class="px-4 py-2 bg-gray-800/50 text-gray-300 rounded-xl hover:bg-gray-700 hover:text-white transition-all text-sm font-medium flex items-center gap-2">
                                <i class="fas fa-clock text-teal-500"></i>
                                Newest
                            </a>
                            <a href="{{ route('products.index') }}?sort=popular" class="px-4 py-2 bg-gray-800/50 text-gray-300 rounded-xl hover:bg-gray-700 hover:text-white transition-all text-sm font-medium flex items-center gap-2">
                                <i class="fas fa-fire text-orange-500"></i>
                                Popular
                            </a>
                        </div>
                    </form>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-3xl mx-auto mt-12">
                    <div class="text-center p-4 bg-gray-900/40 backdrop-blur-sm rounded-2xl border border-gray-700">
                        <div class="text-2xl md:text-3xl font-bold text-white mb-1">500+</div>
                        <div class="text-gray-400 text-sm">Source Codes</div>
                    </div>
                    <div class="text-center p-4 bg-gray-900/40 backdrop-blur-sm rounded-2xl border border-gray-700">
                        <div class="text-2xl md:text-3xl font-bold text-white mb-1">50+</div>
                        <div class="text-gray-400 text-sm">Categories</div>
                    </div>
                    <div class="text-center p-4 bg-gray-900/40 backdrop-blur-sm rounded-2xl border border-gray-700">
                        <div class="text-2xl md:text-3xl font-bold text-white mb-1">10K+</div>
                        <div class="text-gray-400 text-sm">Downloads</div>
                    </div>
                    <div class="text-center p-4 bg-gray-900/40 backdrop-blur-sm rounded-2xl border border-gray-700">
                        <div class="text-2xl md:text-3xl font-bold text-white mb-1">4.9</div>
                        <div class="text-gray-400 text-sm">Avg Rating</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Filter - Improved -->
    <section class="sticky top-0 z-40 bg-white border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center gap-4">
                    <div class="hidden md:block">
                        <h2 class="text-sm font-semibold text-gray-900">Filter by Category:</h2>
                    </div>
                    <div class="flex-1 overflow-x-auto">
                        <div class="flex items-center gap-2 pb-2">
                            <a
                                href="{{ route('products.index') }}"
                                class="flex-shrink-0 px-4 py-2.5 rounded-xl font-medium transition-all duration-300 flex items-center gap-2 {{ request()->routeIs('products.index') && !request('category') ? 'bg-gradient-to-r from-teal-500 to-cyan-600 text-white shadow-lg' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                                <i class="fas fa-layer-group"></i>
                                <span>All</span>
                                <span class="text-xs opacity-80">{{ $products->total() }}</span>
                            </a>
                            @foreach($categories as $category)
                            <a
                                href="{{ route('products.category', $category) }}"
                                class="flex-shrink-0 px-4 py-2.5 rounded-xl font-medium transition-all duration-300 {{ request()->is('products/category/' . $category) ? 'bg-gradient-to-r from-teal-500 to-cyan-600 text-white shadow-lg' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                                {{ $category }}
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="hidden md:flex items-center gap-4">
                    <select class="px-3 py-2 bg-gray-100 text-gray-700 rounded-lg border-0 focus:ring-2 focus:ring-teal-500 focus:outline-none text-sm">
                        <option>Sort by: Popular</option>
                        <option>Sort by: Newest</option>
                        <option>Sort by: Price: Low to High</option>
                        <option>Sort by: Price: High to Low</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="min-h-screen bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Search Results Header -->
            @if(request()->has('q'))
            <div class="mb-8 bg-white p-6 rounded-2xl shadow-sm border border-gray-200">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">
                            Search Results for "<span class="text-teal-600">{{ request('q') }}</span>"
                        </h1>
                        <p class="text-gray-600 mt-1">{{ $products->total() }} {{ Str::plural('product', $products->total()) }} found</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="{{ route('products.index') }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors flex items-center gap-2">
                            <i class="fas fa-times"></i>
                            Clear Search
                        </a>
                        <button class="px-4 py-2 text-sm font-medium text-white bg-teal-600 rounded-lg hover:bg-teal-700 transition-colors flex items-center gap-2">
                            <i class="fas fa-filter"></i>
                            Filter Results
                        </button>
                    </div>
                </div>
            </div>
            @endif

            <!-- Products Grid -->
            @if($products->isEmpty())
            <div class="text-center py-20">
                <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full flex items-center justify-center">
                    <i class="fas fa-code text-4xl text-gray-400"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">No Products Found</h3>
                <p class="text-gray-600 mb-8 max-w-md mx-auto">We couldn't find any products matching your criteria. Try adjusting your search or explore our popular categories.</p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="{{ route('products.index') }}" class="px-6 py-3 bg-teal-600 text-white font-medium rounded-lg hover:bg-teal-700 transition-colors inline-flex items-center justify-center gap-2">
                        <i class="fas fa-th-large"></i>
                        Browse All Products
                    </a>
                    <a href="{{ route('contact') }}" class="px-6 py-3 bg-white text-gray-700 font-medium rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors inline-flex items-center justify-center gap-2">
                        <i class="fas fa-lightbulb"></i>
                        Request Custom
                    </a>
                </div>
            </div>
            @else
            <!-- Products Count and Sorting -->
            <div class="flex items-center justify-between mb-8">
                <p class="text-gray-600">
                    Showing <span class="font-semibold">{{ $products->firstItem() }}-{{ $products->lastItem() }}</span> 
                    of <span class="font-semibold">{{ $products->total() }}</span> products
                </p>
                <div class="flex items-center gap-4">
                    <div class="hidden sm:flex items-center gap-2 text-gray-600">
                        <i class="fas fa-th-large"></i>
                        <span class="text-sm">Grid View</span>
                    </div>
                    <select class="px-3 py-2 bg-white text-gray-700 rounded-lg border border-gray-300 focus:ring-2 focus:ring-teal-500 focus:border-teal-500 focus:outline-none text-sm">
                        <option>Sort by: Popular</option>
                        <option>Sort by: Newest</option>
                        <option>Sort by: Price: Low to High</option>
                        <option>Sort by: Price: High to Low</option>
                    </select>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($products as $product)
                <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-200 overflow-hidden transition-all duration-300 hover:-translate-y-1">
                    <!-- Product Badges -->
                    <div class="absolute top-3 left-3 z-10 flex flex-col gap-2">
                        @if($product->is_featured)
                        <span class="bg-gradient-to-r from-amber-500 to-orange-500 text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow-md flex items-center gap-1.5">
                            <i class="fas fa-star text-xs"></i>
                            <span>Featured</span>
                        </span>
                        @endif
                        @if($product->sale_price)
                        <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow-md">
                            Save {{ $product->discount_percentage }}%
                        </span>
                        @endif
                    </div>

                    <!-- Product Image -->
                    <div class="relative h-48 overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100">
                        @if($product->image)
                        <img
                            src="{{ asset('storage/' . $product->image) }}"
                            alt="{{ $product->name }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-full flex items-center justify-center shadow-lg">
                                <i class="fas fa-code text-white text-2xl"></i>
                            </div>
                        </div>
                        @endif
                        
                        <!-- Quick Actions -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <div class="flex gap-2 w-full">
                                <button class="flex-1 bg-white text-gray-900 font-medium py-2.5 rounded-lg hover:bg-gray-50 transition-colors text-sm flex items-center justify-center gap-2">
                                    <i class="fas fa-eye"></i>
                                    Preview
                                </button>
                                <button class="add-to-cart-btn flex-1 bg-teal-600 text-white font-medium py-2.5 rounded-lg hover:bg-teal-700 transition-colors text-sm flex items-center justify-center gap-2" data-product-id="{{ $product->id }}">
                                    <i class="fas fa-shopping-cart"></i>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="p-5">
                        <!-- Category & Tech -->
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">
                                {{ $product->category }}
                            </span>
                            <span class="px-3 py-1 bg-teal-50 text-teal-700 text-xs font-medium rounded-lg flex items-center gap-1">
                                <i class="fas fa-code-branch text-xs"></i>
                                {{ $product->technology }}
                            </span>
                        </div>

                        <!-- Title -->
                        <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-1 group-hover:text-teal-600 transition-colors">
                            <a href="{{ route('products.show', $product->slug) }}">
                                {{ $product->name }}
                            </a>
                        </h3>

                        <!-- Description -->
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2 min-h-[2.5rem]">
                            {{ $product->short_description }}
                        </p>

                        <!-- Price Section -->
                        <div class="mb-4">
                            @if($product->sale_price)
                            <div class="flex items-center gap-3">
                                <span class="text-2xl font-bold text-gray-900">
                                    ${{ number_format($product->sale_price, 2) }}
                                </span>
                                <span class="text-gray-400 line-through text-sm">
                                    ${{ number_format($product->price, 2) }}
                                </span>
                                <span class="text-xs font-bold text-red-600 bg-red-50 px-2 py-1 rounded">
                                    Save ${{ number_format($product->price - $product->sale_price, 2) }}
                                </span>
                            </div>
                            @else
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-gray-900">
                                    ${{ number_format($product->price, 2) }}
                                </span>
                                <span class="text-xs text-gray-500">
                                    One-time payment
                                </span>
                            </div>
                            @endif
                        </div>

                        <!-- Features -->
                        <div class="pt-4 border-t border-gray-100">
                            <div class="flex flex-wrap gap-2">
                                @php
                                $productFeatures = [];
                                if (is_array($product->features)) {
                                    $productFeatures = array_filter($product->features, 'is_string');
                                } elseif (is_string($product->features) && !empty($product->features)) {
                                    $decodedFeatures = json_decode($product->features, true);
                                    if (json_last_error() === JSON_ERROR_NONE) {
                                        $productFeatures = array_filter($decodedFeatures, 'is_string');
                                    }
                                }
                                @endphp

                                @foreach(array_slice($productFeatures, 0, 2) as $feature)
                                <span class="inline-flex items-center gap-1.5 bg-gray-50 text-gray-700 text-xs px-3 py-1.5 rounded-lg">
                                    <i class="fas fa-check text-teal-500 text-xs"></i>
                                    {{ Str::limit($feature, 20) }}
                                </span>
                                @endforeach

                                @if(count($productFeatures) > 2)
                                <span class="inline-flex items-center gap-1.5 bg-gray-50 text-gray-600 text-xs px-3 py-1.5 rounded-lg">
                                    +{{ count($productFeatures) - 2 }} more
                                </span>
                                @endif
                            </div>
                        </div>

                        <!-- Footer Stats -->
                        <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-100">
                            <div class="flex items-center gap-4 text-xs text-gray-500">
                                <div class="flex items-center gap-1.5">
                                    <i class="fas fa-download"></i>
                                    <span>{{ rand(50, 500) }}+</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <i class="fas fa-star text-amber-500"></i>
                                    <span>4.8</span>
                                </div>
                            </div>
                            <div class="text-xs text-gray-500">
                                Updated {{ $product->updated_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if($products->hasPages())
            <div class="mt-12">
                <div class="bg-white rounded-xl p-6 border border-gray-200">
                    {{ $products->links('vendor.pagination.tailwind') }}
                </div>
            </div>
            @endif
            @endif
        </div>
    </main>

    <!-- Features Section - Modernized -->
    <section class="py-20 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-teal-100 text-teal-800 text-sm font-semibold rounded-full mb-4">
                    Why Choose Us
                </span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Professional Code Solutions
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Each source code is crafted with industry best practices, thorough testing, and comprehensive documentation
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500">
                    <div class="absolute -top-4 left-8 w-12 h-12 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                        <i class="fas fa-shield-alt text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 pt-4">Secure & Production Ready</h3>
                    <p class="text-gray-600 leading-relaxed">Enterprise-grade security with proper authentication, authorization, and data protection.</p>
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fas fa-check text-teal-500"></i>
                                <span>SQL injection protection</span>
                            </li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fas fa-check text-teal-500"></i>
                                <span>XSS prevention</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500">
                    <div class="absolute -top-4 left-8 w-12 h-12 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                        <i class="fas fa-book text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 pt-4">Complete Documentation</h3>
                    <p class="text-gray-600 leading-relaxed">Step-by-step guides, API references, and deployment instructions included.</p>
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fas fa-check text-teal-500"></i>
                                <span>Installation guide</span>
                            </li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fas fa-check text-teal-500"></i>
                                <span>API documentation</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500">
                    <div class="absolute -top-4 left-8 w-12 h-12 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                        <i class="fas fa-sync-alt text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 pt-4">Regular Updates</h3>
                    <p class="text-gray-600 leading-relaxed">Lifetime access to updates, security patches, and new features.</p>
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fas fa-check text-teal-500"></i>
                                <span>Security updates</span>
                            </li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fas fa-check text-teal-500"></i>
                                <span>Feature enhancements</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500">
                    <div class="absolute -top-4 left-8 w-12 h-12 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                        <i class="fas fa-headset text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 pt-4">Dedicated Support</h3>
                    <p class="text-gray-600 leading-relaxed">6 months of premium support with fast response times.</p>
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fas fa-check text-teal-500"></i>
                                <span>Installation help</span>
                            </li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fas fa-check text-teal-500"></i>
                                <span>Bug fixes</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section - Modernized -->
    <section class="py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-gray-900 to-gray-800">
                <div class="absolute inset-0">
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
                </div>
                
                <div class="relative z-10 px-8 py-16 md:py-20 text-center">
                    <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm text-white text-sm font-semibold rounded-full mb-6">
                        Need Something Custom?
                    </span>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                        Custom Development Services
                    </h2>
                    <p class="text-gray-300 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
                        We can build custom solutions tailored to your specific requirements. 
                        From MVP to enterprise applications.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('contact') }}" class="group inline-flex items-center justify-center px-8 py-4 bg-white text-gray-900 font-semibold rounded-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                            <i class="fas fa-code mr-3"></i>
                            Request Custom Quote
                            <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="{{ route('services') }}" class="group inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-white text-white font-semibold rounded-xl hover:bg-white hover:text-gray-900 transition-all duration-300 hover:-translate-y-1">
                            <i class="fas fa-cogs mr-3"></i>
                            View Our Services
                            <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                    <div class="mt-10 pt-8 border-t border-white/10">
                        <p class="text-gray-400">
                            <i class="fas fa-phone-alt mr-2"></i>
                            <span class="font-medium text-white">Support Hotline:</span> 
                            +1 (555) 123-4567 | 
                            <i class="fas fa-envelope ml-4 mr-2"></i>
                            <span class="font-medium text-white">Email:</span> support@codesource.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add to cart functionality
            document.querySelectorAll('.add-to-cart-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const productId = this.getAttribute('data-product-id');
                    const productCard = this.closest('.bg-white');
                    
                    // Show loading state
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Adding...';
                    this.disabled = true;
                    
                    // Add animation
                    productCard.classList.add('ring-2', 'ring-teal-500');
                    
                    // Simulate API call
                    setTimeout(() => {
                        // Success state
                        this.innerHTML = '<i class="fas fa-check mr-2"></i> Added!';
                        this.classList.remove('bg-teal-600', 'hover:bg-teal-700');
                        this.classList.add('bg-green-500', 'hover:bg-green-600');
                        
                        // Show notification
                        showNotification('Product added to cart successfully!', 'success');
                        
                        // Reset after 2 seconds
                        setTimeout(() => {
                            productCard.classList.remove('ring-2', 'ring-teal-500');
                            this.innerHTML = originalText;
                            this.classList.remove('bg-green-500', 'hover:bg-green-600');
                            this.classList.add('bg-teal-600', 'hover:bg-teal-700');
                            this.disabled = false;
                        }, 2000);
                    }, 800);
                });
            });

            // Search input enhancement
            const searchInput = document.querySelector('input[name="q"]');
            if (searchInput) {
                searchInput.addEventListener('focus', function() {
                    this.parentElement.parentElement.classList.add('opacity-100');
                });
                
                searchInput.addEventListener('blur', function() {
                    this.parentElement.parentElement.classList.remove('opacity-100');
                });
            }

            // Category filter scroll enhancement
            const categoryFilter = document.querySelector('.flex.items-center.gap-2.pb-2');
            if (categoryFilter) {
                categoryFilter.addEventListener('wheel', function(e) {
                    if (window.innerWidth < 768) {
                        e.preventDefault();
                        this.scrollLeft += e.deltaY;
                    }
                });
            }

            function showNotification(message, type = 'success') {
                // Remove existing notifications
                document.querySelectorAll('.custom-notification').forEach(n => n.remove());
                
                // Create notification
                const notification = document.createElement('div');
                notification.className = `custom-notification fixed top-6 right-6 px-6 py-4 rounded-xl shadow-2xl z-50 transform transition-all duration-300 translate-x-full max-w-sm ${
                    type === 'success' 
                    ? 'bg-gradient-to-r from-green-500 to-emerald-600 text-white' 
                    : 'bg-gradient-to-r from-red-500 to-pink-600 text-white'
                }`;
                
                notification.innerHTML = `
                    <div class="flex items-center gap-3">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                            <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'}"></i>
                        </div>
                        <div class="flex-1">
                            <div class="font-bold text-sm">${type === 'success' ? 'Success!' : 'Error!'}</div>
                            <div class="text-sm opacity-90 mt-0.5">${message}</div>
                        </div>
                        <button class="text-white/80 hover:text-white">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `;

                document.body.appendChild(notification);
                
                // Add click to dismiss
                notification.querySelector('button').addEventListener('click', () => {
                    notification.classList.remove('translate-x-0');
                    notification.classList.add('translate-x-full');
                    setTimeout(() => notification.remove(), 300);
                });
                
                // Animate in
                setTimeout(() => {
                    notification.classList.remove('translate-x-full');
                    notification.classList.add('translate-x-0');
                }, 10);
                
                // Auto remove after 4 seconds
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.classList.remove('translate-x-0');
                        notification.classList.add('translate-x-full');
                        setTimeout(() => notification.remove(), 300);
                    }
                }, 4000);
            }

            // Initialize animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in-view');
                    }
                });
            }, observerOptions);

            // Observe product cards
            document.querySelectorAll('.group.bg-white').forEach(card => {
                observer.observe(card);
            });
        });
    </script>
    @endpush
</x-app-layout>

<style>
    @keyframes blob {
        0% {
            transform: translate(0px, 0px) scale(1);
        }
        33% {
            transform: translate(30px, -50px) scale(1.1);
        }
        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }
        100% {
            transform: translate(0px, 0px) scale(1);
        }
    }

    .animate-blob {
        animation: blob 7s infinite;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    .animation-delay-4000 {
        animation-delay: 4s;
    }

    .line-clamp-1 {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Smooth scroll for category filter */
    .flex.items-center.gap-2.pb-2 {
        scrollbar-width: thin;
        scrollbar-color: #e5e7eb transparent;
    }

    .flex.items-center.gap-2.pb-2::-webkit-scrollbar {
        height: 4px;
    }

    .flex.items-center.gap-2.pb-2::-webkit-scrollbar-track {
        background: transparent;
    }

    .flex.items-center.gap-2.pb-2::-webkit-scrollbar-thumb {
        background: #e5e7eb;
        border-radius: 2px;
    }

    /* Custom notification animation */
    .custom-notification {
        animation: slideInRight 0.3s ease-out;
    }

    @keyframes slideInRight {
        from {
            transform: translateX(100%);
        }
        to {
            transform: translateX(0);
        }
    }

    /* Product card hover effects */
    .group.bg-white {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .group.bg-white:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    /* Feature card hover effects */
    .group.relative.bg-white {
        transition: all 0.3s ease;
    }

    .group.relative.bg-white:hover {
        transform: translateY(-8px);
    }

    /* Responsive improvements */
    @media (max-width: 640px) {
        .hero-section {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }
        
        .hero-section h1 {
            font-size: 2.5rem;
            line-height: 1.2;
        }
        
        .grid.grid-cols-1 {
            gap: 1rem;
        }
        
        .p-8 {
            padding: 1.5rem;
        }
        
        .text-4xl {
            font-size: 2rem;
        }
        
        .text-5xl {
            font-size: 2.25rem;
        }
    }

    /* Print styles */
    @media print {
        .hero-section,
        .sticky,
        .custom-notification,
        button,
        .add-to-cart-btn,
        .group:hover {
            display: none !important;
        }
        
        .bg-white {
            border: 1px solid #e5e7eb !important;
            box-shadow: none !important;
        }
    }
</style>