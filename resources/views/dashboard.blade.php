<x-app-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-50">
        <div class="bg-red-600 shadow-xl rounded-lg p-6 text-center">
            <!-- Tombol Dashboard -->
            <a href="{{ route('create-qrcode') }}" 
               class="inline-block bg-red-600 text-white text-lg font-bold px-6 py-3 rounded-lg hover:bg-red-700 transform transition-all duration-300">
                Buat QR Code
            </a>
        </div>
    </div>
</x-app-layout>
