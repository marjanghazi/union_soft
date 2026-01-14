<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight hidden">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <!-- Hero Section -->
            <section class="hero-section py-20 md:py-32 px-4 sm:px-6 lg:px-8">
                <div class="relative z-10">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                                Empowering <span class="text-gradient-primary">Digital Excellence</span>
                            </h1>
                            <p class="text-xl text-gray-300 mb-8">
                                Union Soft combines software solutions with digital skills training to transform fresh talent into industry professionals.
                            </p>
                            <div class="flex flex-wrap gap-4">
                                <a href="{{ route('services') }}" class="btn-primary px-8 py-3 rounded-lg text-lg font-semibold inline-flex items-center">
                                    <i class="fas fa-rocket mr-3"></i> Explore Services
                                </a>
                                <a href="{{ route('contact') }}" class="btn-outline-primary px-8 py-3 rounded-lg text-lg font-semibold inline-flex items-center text-white border-white hover:bg-white hover:text-dark-navy">
                                    <i class="fas fa-calendar-alt mr-3"></i> Get Consultation
                                </a>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="bg-white rounded-2xl p-8 shadow-2xl transform rotate-3">
                                <div class="bg-gradient-primary rounded-xl p-1">
                                    <div class="bg-white rounded-lg p-6">
                                        <h3 class="text-2xl font-bold text-dark-navy mb-4">Hybrid Model Advantage</h3>
                                        <ul class="space-y-3">
                                            <li class="flex items-center">
                                                <i class="fas fa-check-circle text-primary-mint mr-3"></i>
                                                <span>Professional Software Services</span>
                                            </li>
                                            <li class="flex items-center">
                                                <i class="fas fa-check-circle text-primary-mint mr-3"></i>
                                                <span>Hands-on Training Programs</span>
                                            </li>
                                            <li class="flex items-center">
                                                <i class="fas fa-check-circle text-primary-mint mr-3"></i>
                                                <span>Industry-Ready Talent</span>
                                            </li>
                                            <li class="flex items-center">
                                                <i class="fas fa-check-circle text-primary-mint mr-3"></i>
                                                <span>Continuous Learning</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Statistics Section -->
            <section class="py-16 bg-gray-50 stats-section">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                        <div class="stat-card text-center">
                            <div class="text-4xl font-bold text-primary-mint counter" data-target="99">0</div>
                            <div class="text-gray-600 mt-2">% Client Satisfaction</div>
                        </div>
                        <div class="stat-card text-center">
                            <div class="text-4xl font-bold text-primary-mint counter" data-target="350">0</div>
                            <div class="text-gray-600 mt-2">Projects Delivered</div>
                        </div>
                        <div class="stat-card text-center">
                            <div class="text-4xl font-bold text-primary-mint counter" data-target="12">0</div>
                            <div class="text-gray-600 mt-2">Years Experience</div>
                        </div>
                        <div class="stat-card text-center">
                            <div class="text-4xl font-bold text-primary-mint counter" data-target="50">0</div>
                            <div class="text-gray-600 mt-2">Trained Professionals</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services Section -->
            <section class="py-20">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="section-title text-4xl font-bold text-dark-navy">Our Services</h2>
                        <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                            Comprehensive digital solutions designed to help your business thrive in the online landscape
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="service-card">
                            <div class="text-blue-green text-4xl mb-4">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h3 class="text-xl font-bold text-dark-navy mb-3">E-commerce Development</h3>
                            <p class="text-gray-600">Beautiful, high-converting online stores tailored to your brand and business needs.</p>
                        </div>

                        <div class="service-card">
                            <div class="text-blue-green text-4xl mb-4">
                                <i class="fas fa-code"></i>
                            </div>
                            <h3 class="text-xl font-bold text-dark-navy mb-3">Web & App Development</h3>
                            <p class="text-gray-600">Custom websites and mobile applications with perfect functionality and user experience.</p>
                        </div>

                        <div class="service-card">
                            <div class="text-blue-green text-4xl mb-4">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3 class="text-xl font-bold text-dark-navy mb-3">Digital Marketing</h3>
                            <p class="text-gray-600">Boost engagement, grow your online presence, and drive measurable business results.</p>
                        </div>

                        <div class="service-card">
                            <div class="text-blue-green text-4xl mb-4">
                                <i class="fas fa-palette"></i>
                            </div>
                            <h3 class="text-xl font-bold text-dark-navy mb-3">Design & Branding</h3>
                            <p class="text-gray-600">Create powerful visual identities that communicate your brand's unique story.</p>
                        </div>
                    </div>

                    <div class="text-center mt-12">
                        <a href="{{ route('services') }}" class="btn-primary px-8 py-3 rounded-lg text-lg font-semibold inline-flex items-center">
                            View All Services <i class="fas fa-arrow-right ml-3"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!-- About Section -->
            <section class="py-20 bg-gray-50">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="section-title text-4xl font-bold text-dark-navy mb-6">About Union Soft</h2>
                            <p class="text-gray-600 mb-6">
                                Union Soft is more than just a software house; it's a mission-driven organization committed to nurturing fresh talent and delivering top-notch digital solutions.
                            </p>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <i class="fas fa-check text-primary-mint mt-1 mr-3"></i>
                                    <div>
                                        <h4 class="font-semibold text-dark-navy">Hybrid Model</h4>
                                        <p class="text-gray-600">Combining professional service delivery with hands-on skill development</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <i class="fas fa-check text-primary-mint mt-1 mr-3"></i>
                                    <div>
                                        <h4 class="font-semibold text-dark-navy">Client-Centric Approach</h4>
                                        <p class="text-gray-600">Tailored solutions to meet unique business needs and objectives</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <i class="fas fa-check text-primary-mint mt-1 mr-3"></i>
                                    <div>
                                        <h4 class="font-semibold text-dark-navy">Continuous Learning</h4>
                                        <p class="text-gray-600">Regular workshops and training sessions for ongoing growth</p>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('about') }}" class="btn-primary px-8 py-3 rounded-lg text-lg font-semibold inline-flex items-center mt-8">
                                Learn More <i class="fas fa-book-open ml-3"></i>
                            </a>
                        </div>
                        <div>
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                                alt="Union Soft Team"
                                class="rounded-2xl shadow-2xl">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Process Section -->
            <section class="py-20">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="section-title text-4xl font-bold text-dark-navy">Our Process</h2>
                        <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                            From initial concept to final delivery, we follow a structured process to ensure success
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="process-step">
                            <h3 class="text-xl font-bold text-dark-navy mb-3">01. Project Consultation</h3>
                            <p class="text-gray-600">We begin with detailed consultation to understand your goals, audience, and requirements.</p>
                        </div>

                        <div class="process-step">
                            <h3 class="text-xl font-bold text-dark-navy mb-3">02. Design & Development</h3>
                            <p class="text-gray-600">Our expert team creates tailored solutions with cutting-edge technology and best practices.</p>
                        </div>

                        <div class="process-step">
                            <h3 class="text-xl font-bold text-dark-navy mb-3">03. Testing & Delivery</h3>
                            <p class="text-gray-600">Rigorous testing ensures quality, followed by smooth delivery and ongoing support.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonials Section -->
            <section class="py-20 bg-gradient-primary">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl font-bold text-white mb-4">What Our Clients Say</h2>
                        <p class="text-white/80">Success stories from businesses we've helped transform</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="testimonial-card">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-primary-mint rounded-full flex items-center justify-center text-white font-bold mr-4">
                                    AK
                                </div>
                                <div>
                                    <h4 class="font-bold text-dark-navy">Ali Khan</h4>
                                    <p class="text-gray-600 text-sm">CEO, Tech Solutions Inc.</p>
                                </div>
                            </div>
                            <p class="text-gray-600 italic">"Union Soft transformed our e-commerce platform, resulting in a 300% increase in online sales within 6 months."</p>
                        </div>

                        <div class="testimonial-card">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-primary-mint rounded-full flex items-center justify-center text-white font-bold mr-4">
                                    SR
                                </div>
                                <div>
                                    <h4 class="font-bold text-dark-navy">Sara Raza</h4>
                                    <p class="text-gray-600 text-sm">Marketing Director</p>
                                </div>
                            </div>
                            <p class="text-gray-600 italic">"The digital marketing training program equipped our team with practical skills that we use daily in our campaigns."</p>
                        </div>

                        <div class="testimonial-card">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-primary-mint rounded-full flex items-center justify-center text-white font-bold mr-4">
                                    MJ
                                </div>
                                <div>
                                    <h4 class="font-bold text-dark-navy">Muhammad Javed</h4>
                                    <p class="text-gray-600 text-sm">Startup Founder</p>
                                </div>
                            </div>
                            <p class="text-gray-600 italic">"Their hybrid model of service and training gave us both a great product and an empowered team."</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="py-20">
                <div class="px-4 sm:px-6 lg:px-8 text-center">
                    <div class="bg-gradient-primary rounded-2xl p-12">
                        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to Transform Your Digital Presence?</h2>
                        <p class="text-white/90 mb-8 text-lg">
                            Let's discuss how Union Soft can help you achieve your business goals
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('contact') }}" class="bg-white text-dark-navy px-8 py-3 rounded-lg text-lg font-semibold inline-flex items-center justify-center hover:bg-gray-100 transition">
                                <i class="fas fa-envelope mr-3"></i> Start a Project
                            </a>
                            <a href="tel:+923034503319" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg text-lg font-semibold inline-flex items-center justify-center hover:bg-white hover:text-dark-navy transition">
                                <i class="fas fa-phone mr-3"></i> (+92) 303 4503319
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>