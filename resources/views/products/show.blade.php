<x-app-layout>
    <!-- Product Hero Section -->
    <section class="hero-section py-20 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <nav class="flex items-center justify-center text-sm mb-8" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{ route('home') }}" class="inline-flex items-center text-white hover:text-primary-mint transition">
                                <i class="fas fa-home mr-2"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                                <a href="{{ route('products.index') }}" class="ml-1 text-white hover:text-primary-mint transition">
                                    Source Codes
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                                <span class="ml-1 text-primary-mint font-medium">{{ $product->category }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <div class="flex flex-wrap items-center justify-center gap-3 mb-6">
                    @if($product->is_featured)
                        <span class="bg-gradient-primary text-white text-sm font-bold px-4 py-1.5 rounded-full">
                            <i class="fas fa-star mr-2"></i> Featured
                        </span>
                    @endif
                    @if($product->sale_price)
                        <span class="bg-red-500 text-white text-sm font-bold px-4 py-1.5 rounded-full">
                            -{{ $product->discount_percentage }}% OFF
                        </span>
                    @endif
                    <span class="bg-blue-green/20 text-blue-green text-sm font-bold px-4 py-1.5 rounded-full">
                        {{ $product->license }} License
                    </span>
                </div>

                <h1 class="text-3xl md:text-5xl font-bold text-white mb-6 max-w-4xl mx-auto">
                    {{ $product->name }}
                </h1>
                <p class="text-lg text-gray-300 max-w-3xl mx-auto">
                    {{ $product->short_description }}
                </p>
            </div>
        </div>
    </section>

    <!-- Product Details -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Product Images -->
                    <div class="p-6 lg:p-8">
                        <!-- Main Image -->
                        <div class="rounded-xl overflow-hidden mb-6 bg-gradient-to-br from-gray-50 to-gray-100">
                            @if($product->image)
                                <img 
                                    src="{{ asset('storage/' . $product->image) }}" 
                                    alt="{{ $product->name }}"
                                    class="w-full h-80 object-cover"
                                    id="main-product-image"
                                >
                            @else
                                <div class="w-full h-80 bg-gradient-to-r from-blue-green to-primary-mint flex items-center justify-center">
                                    <i class="fas fa-code text-white text-8xl"></i>
                                </div>
                            @endif
                        </div>

                        <!-- Screenshots Gallery -->
                        @php
                            $screenshots = is_array($product->screenshots) ? $product->screenshots : [];
                            if (is_string($product->screenshots) && !empty($product->screenshots)) {
                                $decodedScreenshots = json_decode($product->screenshots, true);
                                if (json_last_error() === JSON_ERROR_NONE) {
                                    $screenshots = $decodedScreenshots;
                                }
                            }
                        @endphp

                        @if(count($screenshots) > 0)
                            <div class="mb-8">
                                <h3 class="text-lg font-bold text-dark-navy mb-4">Screenshots</h3>
                                <div class="grid grid-cols-4 gap-3">
                                    @foreach($screenshots as $index => $screenshot)
                                        <div class="cursor-pointer rounded-lg overflow-hidden border-2 border-transparent hover:border-primary-mint transition"
                                             onclick="changeMainImage('{{ asset('storage/' . $screenshot) }}')">
                                            <img 
                                                src="{{ asset('storage/' . $screenshot) }}" 
                                                alt="Screenshot {{ $index + 1 }}"
                                                class="w-full h-20 object-cover"
                                            >
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Quick Links -->
                        <div class="flex flex-wrap gap-4">
                            @if($product->demo_url)
                                <a href="{{ $product->demo_url }}" target="_blank" 
                                   class="flex-1 min-w-[200px] bg-dark-navy text-white px-6 py-3 rounded-lg font-semibold inline-flex items-center justify-center hover:bg-opacity-90 transition">
                                    <i class="fas fa-external-link-alt mr-3"></i> Live Demo
                                </a>
                            @endif
                            @if($product->documentation_url)
                                <a href="{{ $product->documentation_url }}" target="_blank" 
                                   class="flex-1 min-w-[200px] bg-blue-green text-white px-6 py-3 rounded-lg font-semibold inline-flex items-center justify-center hover:bg-opacity-90 transition">
                                    <i class="fas fa-book mr-3"></i> Documentation
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- Product Info & Purchase -->
                    <div class="p-6 lg:p-8 bg-gray-50">
                        <!-- Price & Action -->
                        <div class="mb-8">
                            <div class="flex items-center justify-between mb-6">
                                <div>
                                    @if($product->sale_price)
                                        <div class="flex items-baseline">
                                            <span class="text-4xl font-bold text-dark-navy">
                                                ${{ number_format($product->sale_price, 2) }}
                                            </span>
                                            <span class="text-xl text-gray-400 line-through ml-3">
                                                ${{ number_format($product->price, 2) }}
                                            </span>
                                        </div>
                                    @else
                                        <span class="text-4xl font-bold text-dark-navy">
                                            ${{ number_format($product->price, 2) }}
                                        </span>
                                    @endif
                                    <p class="text-gray-600 mt-2">One-time payment</p>
                                </div>
                                <div class="text-right">
                                    <div class="inline-flex items-center px-4 py-2 bg-primary-mint/20 text-primary-mint rounded-full text-sm font-semibold">
                                        <i class="fas fa-tag mr-2"></i> Instant Download
                                    </div>
                                </div>
                            </div>

                            <button class="w-full btn-primary py-4 text-lg font-bold mb-4 add-to-cart-btn" data-product-id="{{ $product->id }}">
                                <i class="fas fa-shopping-cart mr-3"></i> Add to Cart - ${{ number_format($product->sale_price ?? $product->price, 2) }}
                            </button>

                            <button class="w-full bg-dark-navy text-white py-4 rounded-lg text-lg font-bold hover:bg-opacity-90 transition mb-4">
                                <i class="fas fa-bolt mr-3"></i> Buy Now
                            </button>

                            <p class="text-center text-gray-600 text-sm">
                                <i class="fas fa-lock mr-2"></i> Secure payment powered by Stripe
                            </p>
                        </div>

                        <!-- Product Meta -->
                        <div class="mb-8">
                            <h3 class="text-lg font-bold text-dark-navy mb-4">Product Information</h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-white p-4 rounded-lg">
                                    <div class="text-gray-600 text-sm mb-1">Technology</div>
                                    <div class="font-semibold text-dark-navy">{{ $product->technology }}</div>
                                </div>
                                <div class="bg-white p-4 rounded-lg">
                                    <div class="text-gray-600 text-sm mb-1">Version</div>
                                    <div class="font-semibold text-dark-navy">{{ $product->version }}</div>
                                </div>
                                <div class="bg-white p-4 rounded-lg">
                                    <div class="text-gray-600 text-sm mb-1">Category</div>
                                    <div class="font-semibold text-dark-navy">{{ $product->category }}</div>
                                </div>
                                <div class="bg-white p-4 rounded-lg">
                                    <div class="text-gray-600 text-sm mb-1">License</div>
                                    <div class="font-semibold text-dark-navy">{{ $product->license }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Features Preview -->
                        @php
                            $productFeatures = is_array($product->features) ? $product->features : [];
                            if (is_string($product->features) && !empty($product->features)) {
                                $decodedFeatures = json_decode($product->features, true);
                                if (json_last_error() === JSON_ERROR_NONE) {
                                    $productFeatures = $decodedFeatures;
                                }
                            }
                        @endphp

                        @if(count($productFeatures) > 0)
                            <div class="mb-8">
                                <h3 class="text-lg font-bold text-dark-navy mb-4">Key Features</h3>
                                <div class="space-y-3">
                                    @foreach(array_slice($productFeatures, 0, 5) as $feature)
                                        <div class="flex items-start">
                                            <i class="fas fa-check text-primary-mint mt-1 mr-3"></i>
                                            <span class="text-gray-700">{{ $feature }}</span>
                                        </div>
                                    @endforeach
                                    @if(count($productFeatures) > 5)
                                        <div class="text-center">
                                            <span class="text-primary-mint font-semibold">+{{ count($productFeatures) - 5 }} more features</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <!-- Requirements -->
                        @if($product->requirements)
                            <div>
                                <h3 class="text-lg font-bold text-dark-navy mb-4">Requirements</h3>
                                <div class="bg-white p-4 rounded-lg">
                                    <div class="text-gray-700 whitespace-pre-line">{{ $product->requirements }}</div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details Tabs -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-lg">
                <!-- Tabs -->
                <div class="border-b border-gray-200">
                    <nav class="flex flex-col sm:flex-row">
                        <button class="tab-button active py-4 px-6 text-lg font-semibold text-dark-navy border-b-2 border-primary-mint transition"
                                onclick="openTab('description')">
                            <i class="fas fa-file-alt mr-3"></i> Description
                        </button>
                        <button class="tab-button py-4 px-6 text-lg font-semibold text-gray-600 hover:text-dark-navy transition"
                                onclick="openTab('features')">
                            <i class="fas fa-star mr-3"></i> Features
                        </button>
                        <button class="tab-button py-4 px-6 text-lg font-semibold text-gray-600 hover:text-dark-navy transition"
                                onclick="openTab('support')">
                            <i class="fas fa-headset mr-3"></i> Support
                        </button>
                    </nav>
                </div>

                <!-- Tab Content -->
                <div class="p-6 lg:p-8">
                    <!-- Description Tab -->
                    <div id="description-tab" class="tab-content active">
                        <div class="prose max-w-none">
                            <h2 class="text-2xl font-bold text-dark-navy mb-6">About This Source Code</h2>
                            <div class="text-gray-700 whitespace-pre-line leading-relaxed">
                                {{ $product->description }}
                            </div>
                        </div>
                    </div>

                    <!-- Features Tab -->
                    <div id="features-tab" class="tab-content hidden">
                        <h2 class="text-2xl font-bold text-dark-navy mb-6">Complete Feature List</h2>
                        @if(count($productFeatures) > 0)
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                @foreach($productFeatures as $index => $feature)
                                    <div class="flex items-start p-4 bg-gray-50 rounded-lg hover:bg-primary-mint/5 transition">
                                        <div class="w-8 h-8 bg-primary-mint/20 text-primary-mint rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                            {{ $index + 1 }}
                                        </div>
                                        <span class="text-gray-700">{{ $feature }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-12">
                                <i class="fas fa-star text-4xl text-gray-300 mb-4"></i>
                                <p class="text-gray-600">No features listed for this product.</p>
                            </div>
                        @endif
                    </div>

                    <!-- Support Tab -->
                    <div id="support-tab" class="tab-content hidden">
                        <h2 class="text-2xl font-bold text-dark-navy mb-6">Support & Updates</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="p-6 bg-gradient-to-br from-blue-green/10 to-primary-mint/10 rounded-xl">
                                <div class="w-12 h-12 bg-blue-green text-white rounded-full flex items-center justify-center mb-4">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <h3 class="text-xl font-bold text-dark-navy mb-3">Lifetime Updates</h3>
                                <p class="text-gray-700">Receive free updates and bug fixes for this source code. All future versions will be available in your account dashboard.</p>
                            </div>

                            <div class="p-6 bg-gradient-to-br from-primary-mint/10 to-secondary-mint/10 rounded-xl">
                                <div class="w-12 h-12 bg-primary-mint text-dark-navy rounded-full flex items-center justify-center mb-4">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <h3 class="text-xl font-bold text-dark-navy mb-3">Technical Support</h3>
                                <p class="text-gray-700">Get 6 months of technical support included with your purchase. Our team will help you with installation and configuration.</p>
                            </div>

                            <div class="p-6 bg-gradient-to-br from-dark-navy/10 to-blue-green/10 rounded-xl">
                                <div class="w-12 h-12 bg-dark-navy text-white rounded-full flex items-center justify-center mb-4">
                                    <i class="fas fa-file-code"></i>
                                </div>
                                <h3 class="text-xl font-bold text-dark-navy mb-3">Documentation</h3>
                                <p class="text-gray-700">Comprehensive documentation including setup guides, API references, and deployment instructions.</p>
                            </div>

                            <div class="p-6 bg-gradient-to-br from-secondary-mint/10 to-primary-mint/10 rounded-xl">
                                <div class="w-12 h-12 bg-secondary-mint text-dark-navy rounded-full flex items-center justify-center mb-4">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <h3 class="text-xl font-bold text-dark-navy mb-3">Secure License</h3>
                                <p class="text-gray-700">{{ $product->license }} License allows you to use this code for commercial projects with proper attribution.</p>
                            </div>
                        </div>

                        <div class="mt-8 p-6 bg-gray-50 rounded-xl">
                            <h3 class="text-lg font-bold text-dark-navy mb-4">Need Customization?</h3>
                            <p class="text-gray-700 mb-4">We offer customization services for this source code. Contact us for a quote on custom features or modifications.</p>
                            <a href="{{ route('contact') }}" class="inline-flex items-center text-primary-mint font-semibold hover:text-blue-green transition">
                                <i class="fas fa-envelope mr-2"></i> Request Customization Quote
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    @if($relatedProducts->count() > 0)
        <section class="py-12 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="section-title text-3xl font-bold text-dark-navy">Related Source Codes</h2>
                    <p class="text-gray-600 mt-4">You might also be interested in these products</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($relatedProducts as $relatedProduct)
                        <div class="product-card group">
                            <!-- Product Badges -->
                            <div class="absolute top-3 left-3 z-10 flex gap-2">
                                @if($relatedProduct->is_featured)
                                    <span class="bg-gradient-primary text-white text-xs font-bold px-2 py-1 rounded-full">
                                        <i class="fas fa-star"></i>
                                    </span>
                                @endif
                            </div>

                            <!-- Product Image -->
                            <div class="product-image-container">
                                @if($relatedProduct->image)
                                    <img 
                                        src="{{ asset('storage/' . $relatedProduct->image) }}" 
                                        alt="{{ $relatedProduct->name }}"
                                        class="w-full h-40 object-cover"
                                    >
                                @else
                                    <div class="w-full h-40 bg-gradient-to-r from-blue-green to-primary-mint flex items-center justify-center">
                                        <i class="fas fa-code text-white text-5xl"></i>
                                    </div>
                                @endif
                                <div class="product-overlay">
                                    <a href="{{ route('products.show', $relatedProduct->slug) }}" class="btn-outline-primary px-4 py-2 text-sm">
                                        View Details
                                    </a>
                                </div>
                            </div>

                            <!-- Product Info -->
                            <div class="p-4">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded-full">
                                        {{ $relatedProduct->category }}
                                    </span>
                                    <span class="text-sm font-bold text-dark-navy">
                                        ${{ number_format($relatedProduct->sale_price ?? $relatedProduct->price, 2) }}
                                    </span>
                                </div>

                                <h3 class="text-base font-bold text-dark-navy mb-2 line-clamp-1">
                                    <a href="{{ route('products.show', $relatedProduct->slug) }}" class="hover:text-primary-mint transition">
                                        {{ $relatedProduct->name }}
                                    </a>
                                </h3>

                                <p class="text-gray-600 text-sm mb-3 line-clamp-2">
                                    {{ $relatedProduct->short_description }}
                                </p>

                                <a href="{{ route('products.show', $relatedProduct->slug) }}" 
                                   class="w-full btn-primary py-2 text-sm font-semibold inline-flex items-center justify-center">
                                    View Details <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- CTA Section -->
    <section class="py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-gradient-primary rounded-2xl p-8 md:p-12">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Have Questions About This Source Code?</h2>
                <p class="text-white/90 mb-6 text-lg">
                    Contact our sales team for pre-sales questions or technical inquiries
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="bg-white text-dark-navy px-6 py-3 rounded-lg text-lg font-semibold inline-flex items-center justify-center hover:bg-gray-100 transition">
                        <i class="fas fa-envelope mr-3"></i> Contact Sales
                    </a>
                    <a href="{{ route('products.index') }}" class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-lg text-lg font-semibold inline-flex items-center justify-center hover:bg-white hover:text-dark-navy transition">
                        <i class="fas fa-code mr-3"></i> Browse More Source Codes
                    </a>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add to cart functionality
            const addToCartBtn = document.querySelector('.add-to-cart-btn');
            if (addToCartBtn) {
                addToCartBtn.addEventListener('click', function() {
                    const productId = this.getAttribute('data-product-id');
                    
                    // Show loading state
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Adding to Cart...';
                    this.disabled = true;
                    
                    // Simulate API call (you'll replace this with actual API call)
                    setTimeout(() => {
                        this.innerHTML = '<i class="fas fa-check mr-2"></i> Added to Cart!';
                        this.classList.remove('btn-primary');
                        this.classList.add('bg-green-600', 'text-white');
                        
                        // Show notification
                        showNotification('"' + "{{ $product->name }}" + '" added to cart successfully!', 'success');
                        
                        // Reset button after 2 seconds
                        setTimeout(() => {
                            this.innerHTML = originalText;
                            this.classList.remove('bg-green-600', 'text-white');
                            this.classList.add('btn-primary');
                            this.disabled = false;
                        }, 2000);
                    }, 1000);
                });
            }
            
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

        // Tab functionality
        function openTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
                tab.classList.add('hidden');
            });
            
            // Remove active class from all buttons
            document.querySelectorAll('.tab-button').forEach(button => {
                button.classList.remove('active', 'border-primary-mint', 'text-dark-navy');
                button.classList.add('text-gray-600');
                button.querySelector('i').classList.remove('text-primary-mint');
            });
            
            // Show current tab content
            document.getElementById(tabName + '-tab').classList.remove('hidden');
            document.getElementById(tabName + '-tab').classList.add('active');
            
            // Add active class to current button
            const activeButton = document.querySelector(`[onclick="openTab('${tabName}')"]`);
            activeButton.classList.add('active', 'border-primary-mint', 'text-dark-navy');
            activeButton.classList.remove('text-gray-600');
            activeButton.querySelector('i').classList.add('text-primary-mint');
        }

        // Image gallery functionality
        function changeMainImage(newSrc) {
            const mainImage = document.getElementById('main-product-image');
            if (mainImage) {
                // Add fade effect
                mainImage.style.opacity = '0';
                setTimeout(() => {
                    mainImage.src = newSrc;
                    mainImage.style.opacity = '1';
                }, 200);
            }
        }
    </script>
    @endpush

    <style>
        .product-card {
            @apply bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300 hover:shadow-lg relative;
        }

        .product-image-container {
            @apply relative overflow-hidden;
        }

        .product-overlay {
            @apply absolute inset-0 bg-dark-navy/80 flex flex-col items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100 p-4;
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

        .btn-primary {
            @apply bg-gradient-primary text-white px-6 py-3 rounded-lg font-semibold inline-flex items-center justify-center hover:opacity-90 transition;
        }

        .btn-outline-primary {
            @apply border-2 border-primary-mint text-primary-mint px-4 py-2 rounded-lg font-semibold inline-flex items-center justify-center hover:bg-primary-mint hover:text-white transition;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</x-app-layout>