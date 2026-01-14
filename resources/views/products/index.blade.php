<x-app-layout>
    <!-- Hero Section -->
    <section class="hero-section py-20 md:py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Our <span class="text-gradient-primary">Source Codes</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    High-quality, ready-to-deploy source codes to accelerate your development process
                </p>
                
                <!-- Search Bar -->
                <div class="max-w-2xl mx-auto mt-10">
                    <form action="{{ route('products.search') }}" method="GET" class="relative">
                        <input 
                            type="text" 
                            name="q" 
                            value="{{ request('q') }}"
                            placeholder="Search for source codes, technologies, or categories..."
                            class="w-full px-6 py-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary-mint focus:border-transparent"
                        >
                        <button type="submit" class="absolute right-3 top-3 p-2 bg-primary-mint rounded-lg hover:bg-blue-green transition">
                            <i class="fas fa-search text-dark-navy"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Filter -->
    <section class="py-8 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center justify-center gap-4">
                <a 
                    href="{{ route('products.index') }}" 
                    class="px-6 py-2 rounded-full {{ request()->routeIs('products.index') ? 'bg-primary-mint text-dark-navy font-semibold' : 'bg-white text-gray-700 hover:bg-gray-100' }} transition"
                >
                    All Products
                </a>
                @foreach($categories as $category)
                    <a 
                        href="{{ route('products.category', $category) }}" 
                        class="px-6 py-2 rounded-full {{ request()->is('products/category/' . $category) ? 'bg-primary-mint text-dark-navy font-semibold' : 'bg-white text-gray-700 hover:bg-gray-100' }} transition"
                    >
                        {{ $category }}
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if(request()->has('q'))
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-dark-navy">
                        Search Results for "{{ request('q') }}"
                    </h2>
                    <p class="text-gray-600">{{ $products->total() }} products found</p>
                </div>
            @endif

            @if($products->isEmpty())
                <div class="text-center py-20">
                    <i class="fas fa-code text-6xl text-gray-300 mb-6"></i>
                    <h3 class="text-2xl font-bold text-gray-700 mb-3">No Products Found</h3>
                    <p class="text-gray-600 mb-8">Check back soon for new source code releases!</p>
                    <a href="{{ route('products.index') }}" class="btn-primary px-6 py-3">
                        Browse All Products
                    </a>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($products as $product)
                        <div class="product-card group">
                            <!-- Product Badges -->
                            <div class="absolute top-4 left-4 z-10 flex gap-2">
                                @if($product->is_featured)
                                    <span class="bg-gradient-primary text-white text-xs font-bold px-3 py-1 rounded-full">
                                        <i class="fas fa-star mr-1"></i> Featured
                                    </span>
                                @endif
                                @if($product->sale_price)
                                    <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                        -{{ $product->discount_percentage }}%
                                    </span>
                                @endif
                            </div>

                            <!-- Product Image -->
                            <div class="product-image-container">
                                @if($product->image)
                                    <img 
                                        src="{{ asset('storage/' . $product->image) }}" 
                                        alt="{{ $product->name }}"
                                        class="w-full h-48 object-cover"
                                    >
                                @else
                                    <div class="w-full h-48 bg-gradient-to-r from-blue-green to-primary-mint flex items-center justify-center">
                                        <i class="fas fa-code text-white text-6xl"></i>
                                    </div>
                                @endif
                                <div class="product-overlay">
                                    <a href="{{ route('products.show', $product->slug) }}" class="btn-outline-primary">
                                        View Details
                                    </a>
                                    <button class="btn-primary mt-3 add-to-cart-btn" data-product-id="{{ $product->id }}">
                                        <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                                    </button>
                                </div>
                            </div>

                            <!-- Product Info -->
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-3">
                                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">
                                        {{ $product->category }}
                                    </span>
                                    <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm rounded-full">
                                        {{ $product->technology }}
                                    </span>
                                </div>

                                <h3 class="text-xl font-bold text-dark-navy mb-2">
                                    <a href="{{ route('products.show', $product->slug) }}" class="hover:text-primary-mint transition">
                                        {{ $product->name }}
                                    </a>
                                </h3>

                                <p class="text-gray-600 mb-4 line-clamp-2">
                                    {{ $product->short_description }}
                                </p>

                                <div class="flex items-center justify-between">
                                    <div class="price">
                                        @if($product->sale_price)
                                            <span class="text-2xl font-bold text-dark-navy">
                                                ${{ number_format($product->sale_price, 2) }}
                                            </span>
                                            <span class="text-gray-400 line-through ml-2">
                                                ${{ number_format($product->price, 2) }}
                                            </span>
                                        @else
                                            <span class="text-2xl font-bold text-dark-navy">
                                                ${{ number_format($product->price, 2) }}
                                            </span>
                                        @endif
                                    </div>

                                    <div class="flex items-center space-x-2">
                                        @if($product->demo_url)
                                            <a 
                                                href="{{ $product->demo_url }}" 
                                                target="_blank"
                                                class="p-2 text-blue-green hover:bg-blue-50 rounded-lg transition"
                                                title="Live Demo"
                                            >
                                                <i class="fas fa-external-link-alt"></i>
                                            </a>
                                        @endif
                                        @if($product->documentation_url)
                                            <a 
                                                href="{{ $product->documentation_url }}" 
                                                target="_blank"
                                                class="p-2 text-blue-green hover:bg-blue-50 rounded-lg transition"
                                                title="Documentation"
                                            >
                                                <i class="fas fa-book"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <!-- Features -->
                               <!-- Features -->
<div class="mt-4 pt-4 border-t border-gray-100">
    <div class="flex flex-wrap gap-2">
        @php
            // Safely handle features - ensure it's an array
            $productFeatures = is_array($product->features) ? $product->features : [];
            
            // If features is a JSON string, decode it
            if (is_string($product->features) && !empty($product->features)) {
                $decodedFeatures = json_decode($product->features, true);
                if (json_last_error() === JSON_ERROR_NONE) {
                    $productFeatures = $decodedFeatures;
                }
            }
        @endphp
        
        @foreach(array_slice($productFeatures, 0, 3) as $feature)
            <span class="text-xs text-gray-500">
                <i class="fas fa-check text-primary-mint mr-1"></i>
                {{ is_string($feature) ? $feature : '' }}
            </span>
        @endforeach
        
        @if(count($productFeatures) > 3)
            <span class="text-xs text-gray-500">
                +{{ count($productFeatures) - 3 }} more
            </span>
        @endif
    </div>
</div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($products->hasPages())
                    <div class="mt-12">
                        {{ $products->links() }}
                    </div>
                @endif
            @endif
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="section-title text-4xl font-bold text-dark-navy">Why Choose Our Source Codes?</h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Professionally developed, thoroughly tested, and ready for production
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 bg-white rounded-xl shadow-sm">
                    <div class="w-16 h-16 mx-auto mb-6 bg-primary-mint rounded-full flex items-center justify-center">
                        <i class="fas fa-shield-alt text-2xl text-dark-navy"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark-navy mb-3">Secure & Clean Code</h3>
                    <p class="text-gray-600">Following best practices with proper security measures and clean architecture.</p>
                </div>

                <div class="text-center p-6 bg-white rounded-xl shadow-sm">
                    <div class="w-16 h-16 mx-auto mb-6 bg-primary-mint rounded-full flex items-center justify-center">
                        <i class="fas fa-file-code text-2xl text-dark-navy"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark-navy mb-3">Well Documented</h3>
                    <p class="text-gray-600">Comprehensive documentation including setup guides and API references.</p>
                </div>

                <div class="text-center p-6 bg-white rounded-xl shadow-sm">
                    <div class="w-16 h-16 mx-auto mb-6 bg-primary-mint rounded-full flex items-center justify-center">
                        <i class="fas fa-sync-alt text-2xl text-dark-navy"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark-navy mb-3">Lifetime Updates</h3>
                    <p class="text-gray-600">Receive updates and bug fixes for your purchased source codes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-gradient-primary rounded-2xl p-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Need Custom Development?</h2>
                <p class="text-white/90 mb-8 text-lg">
                    If you don't find what you're looking for, we can build a custom solution tailored to your needs
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="bg-white text-dark-navy px-8 py-3 rounded-lg text-lg font-semibold inline-flex items-center justify-center hover:bg-gray-100 transition">
                        <i class="fas fa-code mr-3"></i> Request Custom Quote
                    </a>
                    <a href="{{ route('services') }}" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg text-lg font-semibold inline-flex items-center justify-center hover:bg-white hover:text-dark-navy transition">
                        <i class="fas fa-cogs mr-3"></i> View Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add to cart functionality
            document.querySelectorAll('.add-to-cart-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const productId = this.getAttribute('data-product-id');
                    
                    // Show loading state
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Adding...';
                    this.disabled = true;
                    
                    // Simulate API call (you'll replace this with actual API call)
                    setTimeout(() => {
                        this.innerHTML = '<i class="fas fa-check mr-2"></i> Added!';
                        this.classList.remove('btn-primary');
                        this.classList.add('bg-green-500', 'text-white');
                        
                        // Show notification
                        showNotification('Product added to cart successfully!', 'success');
                        
                        // Reset button after 2 seconds
                        setTimeout(() => {
                            this.innerHTML = originalText;
                            this.classList.remove('bg-green-500', 'text-white');
                            this.classList.add('btn-primary');
                            this.disabled = false;
                        }, 2000);
                    }, 1000);
                });
            });
            
            function showNotification(message, type = 'success') {
                // Create notification element
                const notification = document.createElement('div');
                notification.className = `fixed top-4 right-4 px-6 py-3 rounded-lg shadow-lg z-50 transform transition-transform duration-300 ${
                    type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
                }`;
                notification.innerHTML = `
                    <div class="flex items-center">
                        <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'} mr-3"></i>
                        <span>${message}</span>
                    </div>
                `;
                
                // Add to DOM
                document.body.appendChild(notification);
                
                // Remove after 3 seconds
                setTimeout(() => {
                    notification.remove();
                }, 3000);
            }
        });
    </script>
    @endpush
</x-app-layout>

<style>
.product-card {
    @apply bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300 hover:shadow-lg relative;
}

.product-image-container {
    @apply relative overflow-hidden;
}

.product-overlay {
    @apply absolute inset-0 bg-dark-navy/80 flex flex-col items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100 p-6;
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.btn-primary {
    @apply bg-gradient-primary text-white px-6 py-2 rounded-lg font-semibold inline-flex items-center justify-center hover:opacity-90 transition;
}

.btn-outline-primary {
    @apply border-2 border-primary-mint text-primary-mint px-6 py-2 rounded-lg font-semibold inline-flex items-center justify-center hover:bg-primary-mint hover:text-white transition;
}
</style>