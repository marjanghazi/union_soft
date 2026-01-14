<x-app-layout>
    <!-- Hero Section -->
    <section class="hero-section py-20 md:py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Our <span class="text-gradient-primary">Services</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Comprehensive digital solutions designed to help businesses thrive in the online landscape
                </p>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Web Development -->
                <div class="service-card">
                    <div class="text-blue-green text-4xl mb-4">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark-navy mb-3">Web Development</h3>
                    <p class="text-gray-600 mb-4">Custom websites and web applications built with modern technologies.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>Custom WordPress Development</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>Laravel Applications</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>React.js Frontends</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>API Development</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn-outline-primary px-6 py-2 rounded-lg inline-flex items-center">
                        Get Quote <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- E-commerce -->
                <div class="service-card">
                    <div class="text-blue-green text-4xl mb-4">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark-navy mb-3">E-commerce Solutions</h3>
                    <p class="text-gray-600 mb-4">Beautiful, high-converting online stores tailored to your brand.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>Shopify Store Development</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>WooCommerce Solutions</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>Custom E-commerce Platforms</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>Payment Gateway Integration</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn-outline-primary px-6 py-2 rounded-lg inline-flex items-center">
                        Get Quote <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Mobile Apps -->
                <div class="service-card">
                    <div class="text-blue-green text-4xl mb-4">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark-navy mb-3">Mobile App Development</h3>
                    <p class="text-gray-600 mb-4">Cross-platform mobile applications for iOS and Android.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>Flutter App Development</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>React Native Applications</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>Native iOS/Android Apps</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>App Store Deployment</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn-outline-primary px-6 py-2 rounded-lg inline-flex items-center">
                        Get Quote <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Digital Marketing -->
                <div class="service-card">
                    <div class="text-blue-green text-4xl mb-4">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark-navy mb-3">Digital Marketing</h3>
                    <p class="text-gray-600 mb-4">Boost engagement and grow your online presence.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>SEO Optimization</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>Social Media Marketing</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>PPC Campaign Management</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>Content Marketing</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn-outline-primary px-6 py-2 rounded-lg inline-flex items-center">
                        Get Quote <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Design & Branding -->
                <div class="service-card">
                    <div class="text-blue-green text-4xl mb-4">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark-navy mb-3">Design & Branding</h3>
                    <p class="text-gray-600 mb-4">Create powerful visual identities that tell your brand's story.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>UI/UX Design</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>Logo & Brand Identity</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>Marketing Materials Design</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>Website Mockups & Prototypes</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn-outline-primary px-6 py-2 rounded-lg inline-flex items-center">
                        Get Quote <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Training Services -->
                <div class="service-card">
                    <div class="text-blue-green text-4xl mb-4">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark-navy mb-3">Training & Skills Development</h3>
                    <p class="text-gray-600 mb-4">Transform fresh talent into industry-ready professionals.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>Web Development Bootcamps</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>Digital Marketing Courses</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>Corporate Training Programs</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary-mint mr-2"></i>
                            <span>Internship Programs</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn-outline-primary px-6 py-2 rounded-lg inline-flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="section-title text-4xl font-bold text-dark-navy">Our Service Process</h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    A structured approach to ensure quality and timely delivery
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 bg-primary-mint rounded-full flex items-center justify-center">
                        <span class="text-2xl font-bold text-dark-navy">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-dark-navy mb-3">Discovery</h3>
                    <p class="text-gray-600">Understanding your requirements, goals, and target audience.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 bg-primary-mint rounded-full flex items-center justify-center">
                        <span class="text-2xl font-bold text-dark-navy">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-dark-navy mb-3">Planning</h3>
                    <p class="text-gray-600">Creating detailed project plans, timelines, and resource allocation.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 bg-primary-mint rounded-full flex items-center justify-center">
                        <span class="text-2xl font-bold text-dark-navy">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-dark-navy mb-3">Execution</h3>
                    <p class="text-gray-600">Development, design, and implementation with regular updates.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 bg-primary-mint rounded-full flex items-center justify-center">
                        <span class="text-2xl font-bold text-dark-navy">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-dark-navy mb-3">Delivery & Support</h3>
                    <p class="text-gray-600">Testing, deployment, and ongoing maintenance support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-gradient-primary rounded-2xl p-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to Start Your Project?</h2>
                <p class="text-white/90 mb-8 text-lg">
                    Contact us for a free consultation and project quote
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="bg-white text-dark-navy px-8 py-3 rounded-lg text-lg font-semibold inline-flex items-center justify-center hover:bg-gray-100 transition">
                        <i class="fas fa-envelope mr-3"></i> Get Free Consultation
                    </a>
                    <a href="tel:+923034503319" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg text-lg font-semibold inline-flex items-center justify-center hover:bg-white hover:text-dark-navy transition">
                        <i class="fas fa-phone mr-3"></i> Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>