<x-layouts.app>
    <x-slot:title>
        {{ 'Contact' }}
    </x-slot:title>
<div class="contactform max-w-md mx-auto mt-10 p-8 bg-white rounded-xl shadow-lg">
    <form action="{{ route('contact.submit') }}" method="post" class="space-y-6">
        @csrf
        <div>
            <label for="name" class="block text-gray-700 font-semibold mb-2">Name:</label>
            <input type="text" id="name" name="name" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50" />
        </div>
        <div>
            <label for="email" class="block text-gray-700 font-semibold mb-2">Email:</label>
            <input type="email" id="email" name="email" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50" />
        </div>
        <div>
            <label for="message" class="block text-gray-700 font-semibold mb-2">Message:</label>
            <textarea id="message" name="message" rows="4" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50 resize-vertical"></textarea>
        </div>
        <input type="submit" value="Submit"
            class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-700 transition duration-150 cursor-pointer" />
    </form>
</div>
    
</x-layouts.app>
