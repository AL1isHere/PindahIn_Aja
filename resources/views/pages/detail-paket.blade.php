<!-- resources/views/pages/detail-paket.blade.php -->
@extends('layouts.app')

@section('title', 'Detail Paket ' . $package->nama_paket)

@section('content')
<div class="container mx-auto px-6 py-16">
    <div class="grid md:grid-cols-2 gap-12 items-center max-w-5xl mx-auto">
        <div>
            <div class="bg-gray-200 h-96 rounded-lg overflow-hidden">
                @if($package->foto_paket)
                    <img src="{{ asset('storage/' . $package->foto_paket) }}" alt="{{ $package->nama_paket }}" class="w-full h-full object-cover">
                @else
                    <div class="w-full h-full flex items-center justify-center text-2xl font-bold text-gray-500">Gambar tidak tersedia</div>
                @endif
            </div>
        </div>
        <div>
            <span class="text-sm font-semibold text-blue-600">DETAIL PAKET</span>
            <h1 class="text-4xl font-bold mt-1">{{ $package->nama_paket }}</h1>
            <p class="text-2xl font-semibold text-gray-800 my-4">Rp {{ number_format($package->harga, 0, ',', '.') }}</p>
            <p class="text-gray-600 leading-relaxed mb-6">{{ $package->deskripsi }}</p>
            <a href="{{ route('pemesanan', ['package_id' => $package->id]) }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg text-lg px-8 py-3">Pesan Sekarang</a>
        </div>
    </div>
</div>
@endsection