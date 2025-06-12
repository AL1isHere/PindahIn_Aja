<!-- resources/views/pages/layanan.blade.php -->
@extends('layouts.app')

@section('title', 'Paket Layanan Kami')

@section('content')
    {{-- PERUBAHAN DI SINI --}}
    @include('partials.banner', [
        'title' => 'Temukan Paket Pindahan yang Sesuai',
        'subtitle' => 'Berbagai paket layanan pemindahan barang untuk memenuhi kebutuhan Anda.',
        'buttonText' => 'Pesan Sekarang',
        'buttonUrl' => route('pemesanan'),
        'backgroundImage' => 'https://images.unsplash.com/photo-1651928977880-ffb2d963b6b4?q=80&w=2074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
    ])
    
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-10 text-center">Semua Paket Layanan</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($packages as $package)
                    <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col">
                        <div class="h-40 mb-4 rounded-md overflow-hidden">
                            @if($package->foto_paket)
                                <img src="{{ asset('storage/' . $package->foto_paket) }}" alt="{{ $package->nama_paket }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400">Gambar tidak tersedia</div>
                            @endif
                        </div>
                        <h3 class="text-xl font-bold">{{ $package->nama_paket }}</h3>
                        <p class="text-gray-600 my-2 flex-grow">{{ $package->deskripsi }}</p>
                        <p class="text-xl font-bold text-blue-600 mb-4">Rp {{ number_format($package->harga, 0, ',', '.') }}</p>
                        <a href="{{ route('layanan.detail', $package) }}" class="mt-auto bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center">Lihat Detail & Pesan</a>
                    </div>
                @empty
                    <p class="col-span-3 text-center text-gray-500">Saat ini belum ada paket layanan yang tersedia.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection