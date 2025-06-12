<!-- resources/views/pages/tentang.blade.php -->
@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    {{-- PERUBAHAN ADA DI BAGIAN INI --}}
    <section class="bg-white py-20">
        <div class="container mx-auto px-6">
            <div class="md:flex justify-between items-center gap-12">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl font-bold mb-4 leading-tight">Pindahin Aja: Partner Pindahan Terpercaya Anda</h1>
                    <p class="text-gray-600 mb-6">Kami lebih dari sekadar jasa angkut barang. Kami adalah tim profesional yang berdedikasi untuk memberikan pengalaman pindahan yang aman, cepat, dan bebas stres.</p>
                    <a href="{{ route('pemesanan') }}" class="bg-blue-600 text-white hover:bg-blue-700 rounded-lg px-6 py-3">Hubungi Kami Sekarang</a>
                </div>
                <div class="md:w-5/12">
                     {{-- Ganti 'asset/tim-kami.jpg' dengan nama file gambar Anda --}}
                     <img src="{{ asset('storage/asset/timkami.jpg') }}" alt="Tim Pindahin Aja sedang bekerja" class="w-full h-80 object-cover rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
             <div class="grid md:grid-cols-2 gap-16 items-center">
                 <div>
                     <h2 class="text-3xl font-bold mb-4">Misi Kami</h2>
                     <p class="text-gray-600">{{ $siteProfile['misi'] }}</p>
                 </div>
                 <div class="space-y-8">
                    @foreach($siteProfile['values'] as $value)
                     <div>
                         <h3 class="text-xl font-bold mb-2">{{ $value['title'] }}</h3>
                         <p class="text-gray-600">{{ $value['text'] }}</p>
                     </div>
                    @endforeach
                 </div>
             </div>
        </div>
    </section>
@endsection