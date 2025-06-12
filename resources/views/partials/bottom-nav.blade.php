<!-- resources/views/partials/bottom-nav.blade.php -->
<nav class="md:hidden fixed bottom-0 inset-x-0 bg-white shadow-t z-50 flex justify-around">
    <a href="{{ route('home') }}" class="flex flex-col items-center justify-center text-center p-3 {{ request()->routeIs('home') ? 'text-blue-600' : 'text-gray-600' }}">
        <i class="fas fa-home text-xl"></i>
        <span class="text-xs mt-1">Home</span>
    </a>
    <a href="{{ route('layanan') }}" class="flex flex-col items-center justify-center text-center p-3 {{ request()->routeIs('layanan') || request()->routeIs('layanan.detail') ? 'text-blue-600' : 'text-gray-600' }}">
        <i class="fas fa-box-open text-xl"></i>
        <span class="text-xs mt-1">Layanan</span>
    </a>
    <a href="{{ route('pemesanan') }}" class="flex flex-col items-center justify-center text-center p-3 {{ request()->routeIs('pemesanan') ? 'text-blue-600' : 'text-gray-600' }}">
        <i class="fas fa-file-signature text-xl"></i>
        <span class="text-xs mt-1">Pesan</span>
    </a>
    <a href="{{ route('tentang') }}" class="flex flex-col items-center justify-center text-center p-3 {{ request()->routeIs('tentang') ? 'text-blue-600' : 'text-gray-600' }}">
        <i class="fas fa-info-circle text-xl"></i>
        <span class="text-xs mt-1">Tentang</span>
    </a>
</nav>