<x-app-layout>
    <!-- Hero Section -->
    <section class="hero-section py-20 md:py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Get in <span class="text-gradient-primary">Touch</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Have questions or ready to start your project? We're here to help!
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div>
                    <h2 class="section-title text-4xl font-bold text-dark-navy mb-6">Send Us a Message</h2>
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                                <input type="text" id="name" name="name" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-mint focus:border-primary-mint transition">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-mint focus:border-primary-mint transition">
                            </div>
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-mint focus:border-primary-mint transition">
                        </div>
                        
                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Interested In</label>
                            <select id="service" name="service" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-mint focus:border-primary-mint transition">
                                <option value="">Select a service</option>
                                <option value="web-development">Web Development</option>
                                <option value="ecommerce">E-commerce Solutions</option>
                                <option value="mobile-apps">Mobile App Development</option>
                                <option value="digital-marketing">Digital Marketing</option>
                                <option value="design">Design & Branding</option>
                                <option value="training">Training Programs</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Your Message *</label>
                            <textarea id="message" name="message" rows="5" required 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-mint focus:border-primary-mint transition"></textarea>
                        </div>
                        
                        <div>
                            <button type="submit" class="btn-primary px-8 py-3 rounded-lg text-lg font-semibold w-full">
                                <i class="fas fa-paper-plane mr-3"></i> Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold text-dark-navy mb-6">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-primary-mint rounded-full flex items-center justify-center">
                                        <i class="fas fa-map-marker-alt text-dark-navy text-lg"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-semibold text-dark-navy">Our Office</h4>
                                    <p class="text-gray-600">Gulgasht Colony, Multan, Pakistan</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-primary-mint rounded-full flex items-center justify-center">
                                        <i class="fas fa-phone text-dark-navy text-lg"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-semibold text-dark-navy">Phone Numbers</h4>
                                    <p class="text-gray-600">+92 303 4503319</p>
                                    <p class="text-gray-600">+92 326 6928852</p>
                                    <p class="text-gray-600">+92 327 6321357</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-primary-mint rounded-full flex items-center justify-center">
                                        <i class="fas fa-envelope text-dark-navy text-lg"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-semibold text-dark-navy">Email Address</h4>
                                    <p class="text-gray-600">info@theunionsoft.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-primary-mint rounded-full flex items-center justify-center">
                                        <i class="fas fa-clock text-dark-navy text-lg"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-semibold text-dark-navy">Business Hours</h4>
                                    <p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM</p>
                                    <p class="text-gray-600">Saturday: 10:00 AM - 2:00 PM</p>
                                    <p class="text-gray-600">Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div>
                        <h4 class="font-semibold text-dark-navy mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-dark-navy text-white rounded-full flex items-center justify-center hover:bg-primary-mint transition">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-dark-navy text-white rounded-full flex items-center justify-center hover:bg-primary-mint transition">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-dark-navy text-white rounded-full flex items-center justify-center hover:bg-primary-mint transition">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-dark-navy text-white rounded-full flex items-center justify-center hover:bg-primary-mint transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-dark-navy text-white rounded-full flex items-center justify-center hover:bg-primary-mint transition">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Map -->
                    <div>
                        <h4 class="font-semibold text-dark-navy mb-4">Find Us Here</h4>
                        <div class="bg-gray-200 rounded-lg overflow-hidden h-64">
                            <!-- You can embed Google Maps here -->
                            <div class="w-full h-full flex items-center justify-center bg-gradient-primary text-white">
                                <div class="text-center">
                                    <i class="fas fa-map-marked-alt text-4xl mb-3"></i>
                                    <p>Map Location</p>
                                    <p class="text-sm mt-2">(Google Maps Integration)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="section-title text-4xl font-bold text-dark-navy">Frequently Asked Questions</h2>
                <p class="text-gray-600 mt-4">Common questions about our services and process</p>
            </div>

            <div class="space-y-6">
                <div class="bg-white rounded-xl p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-dark-navy mb-2">What is the typical project timeline?</h3>
                    <p class="text-gray-600">Project timelines vary based on complexity. A simple website might take 2-4 weeks, while custom applications can take 2-6 months. We provide detailed timelines during the consultation phase.</p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-dark-navy mb-2">Do you offer post-launch support?</h3>
                    <p class="text-gray-600">Yes, we offer various support packages including maintenance, updates, and technical support. All projects include a 30-day warranty period with free bug fixes.</p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-dark-navy mb-2">What is your payment structure?</h3>
                    <p class="text-gray-600">We typically work with a 50% upfront payment and 50% upon completion. For larger projects, we can arrange milestone-based payments.</p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-dark-navy mb-2">Do you provide training for our team?</h3>
                    <p class="text-gray-600">Absolutely! We offer comprehensive training programs to help your team understand and manage the delivered solution effectively.</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>