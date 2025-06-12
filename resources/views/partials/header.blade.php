<!-- resources/views/partials/header.blade.php -->
<header class="bg-white shadow-md sticky top-0 z-50">
    <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-800">PindahIn Aja</a>
        <div class="hidden md:flex items-center space-x-6">
            <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600">Home</a>
            <a href="{{ route('layanan') }}" class="text-gray-600 hover:text-blue-600">Layanan</a>
            <a href="{{ route('tentang') }}" class="text-gray-600 hover:text-blue-600">Tentang Kami</a>
            <a href="{{ route('pemesanan') }}" class="text-gray-600 hover:text-blue-600">Hubungi Kami</a>
        </div>
        <div class="hidden md:block">
             <a href="{{ route('login') }}" class="bg-gray-800 text-white hover:bg-gray-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Admin Login</a>
        </div>
        <!-- Mobile Menu Button can be added here -->
    </nav>
</header>