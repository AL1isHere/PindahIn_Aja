<!-- resources/views/pages/beranda.blade.php -->
@extends('layouts.app')

@section('title', 'Pindahan Mudah dan Cepat - Pindahin Aja')

@section('content')
    @include('partials.banner', [
        'title' => 'Pindahan Mudah dan Cepat',
        'subtitle' => 'Kami menawarkan layanan pindahan yang aman, terpercaya, dan profesional untuk kebutuhan Anda.',
        'buttonText' => 'Lihat Semua Layanan',
        'buttonUrl' => route('layanan'),
        'backgroundImage' => 'https://images.unsplash.com/photo-1730154838368-c37b1fdebcf6?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
    ])

    <!-- Featured Packages Section -->
    <section class="py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-2">Paket Layanan Unggulan</h2>
            <p class="text-gray-600 mb-10">Pilih paket yang sesuai dengan kebutuhan Anda.</p>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse($featuredPackages as $package)
                    <div class="bg-white p-6 rounded-lg shadow-md border hover:shadow-xl transition-shadow text-left flex flex-col">
                        <div class="h-40 mb-4 rounded-md overflow-hidden">
                            @if($package->foto_paket)
                                <img src="{{ asset('storage/' . $package->foto_paket) }}" alt="{{ $package->nama_paket }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400">Gambar tidak tersedia</div>
                            @endif
                        </div>
                        <h3 class="text-xl font-bold mb-2">{{ $package->nama_paket }}</h3>
                        <p class="text-gray-600 mb-4 text-sm flex-grow">{{ Str::limit($package->deskripsi, 80) }}</p>
                        <p class="font-bold text-lg text-blue-600 mb-4">Rp {{ number_format($package->harga, 0, ',', '.') }}</p>
                        <a href="{{ route('layanan.detail', $package) }}" class="mt-auto block text-center text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5">Lihat Detail</a>
                    </div>
                @empty
                    <p class="col-span-4 text-center text-gray-500">Saat ini belum ada paket layanan unggulan.</p>
                @endforelse
            </div>
            <a href="{{ route('layanan') }}" class="mt-8 inline-block bg-gray-800 text-white hover:bg-gray-900 font-medium rounded-lg text-sm px-5 py-2.5">Cek Semua Paket</a>
        </div>
    </section>
    
    <!-- Why Choose Us Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-10">Mengapa Memilih Kami?</h2>
            <div class="grid md:grid-cols-3 gap-12">
                {{-- PERUBAHAN DI SINI --}}
                <div class="p-6">
                    <img src="{{ asset('storage/asset/save.svg') }}" alt="Keamanan" class="h-50 w-full object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">Aman</h3>
                    <p class="text-gray-600">Layanan kami menjamin keamanan barang Anda dengan pengepakan standar profesional.</p>
                </div>
                <div class="p-6">
                    <img src="{{ asset('storage/asset/fast.svg') }}" alt="Cepat" class="h-50 w-full object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">Cepat</h3>
                    <p class="text-gray-600">Kami berkomitmen untuk menyelesaikan proses pindahan sesuai jadwal yang ditentukan.</p>
                </div>
                <div class="p-6">
                    <img src="{{ asset('storage/asset/profesional.svg') }}" alt="Profesional" class="h-50 w-full object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">Profesional</h3>
                    <p class="text-gray-600">Tim kami terlatih dan berpengalaman untuk menangani berbagai jenis barang dengan hati-hati.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16">
         <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-10">Apa Kata Pelanggan Kami?</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <p class="text-gray-600 mb-4 italic">"Layanan yang sangat memuaskan! Timnya ramah dan bekerja dengan sangat efisien. Semua barang sampai dengan selamat."</p>
                    <p class="font-bold mt-4">- Alice</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <p class="text-gray-600 mb-4 italic">"Cepat dan profesional, saya sangat merekomendasikan Pindahin Aja untuk kebutuhan pindahan kantor. Tidak ada gangguan sama sekali."</p>
                    <p class="font-bold mt-4">- Bob</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md md:col-span-2 lg:col-span-1">
                    <p class="text-gray-600 mb-4 italic">"Awalnya khawatir dengan barang-barang pecah belah, tapi tim Pindahin Aja benar-benar ahli dalam pengepakan. Hebat!"</p>
                    <p class="font-bold mt-4">- Charlie</p>
                </div>
            </div>
        </div>
    </section>
@endsection