<x-app-layout>
    <x-slot name="header">
        Contact Us
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Contact Union Soft</h1>
                <p>Email: info@unionsoft.com</p>
                <p>Phone: +92 300 1234567</p>
            </div>
        </div>
    </div>
    <form action="{{ route('contact.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Your Message" required></textarea>
    <button type="submit">Send</button>
</form>

</x-app-layout>
