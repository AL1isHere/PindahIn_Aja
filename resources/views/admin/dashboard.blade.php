<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<h3 class="text-2xl font-bold mb-4">Ringkasan Statistik</h3>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white p-6 rounded-lg shadow"><h4 class="text-gray-500">Pesanan Baru (Request)</h4><p class="text-3xl font-bold">{{ $stats['request'] }}</p></div>
    <div class="bg-white p-6 rounded-lg shadow"><h4 class="text-gray-500">Pesanan Diproses (Approved)</h4><p class="text-3xl font-bold">{{ $stats['approved'] }}</p></div>
    <div class="bg-white p-6 rounded-lg shadow"><h4 class="text-gray-500">Pesanan Selesai</h4><p class="text-3xl font-bold">{{ $stats['selesai'] }}</p></div>
    <div class="bg-white p-6 rounded-lg shadow"><h4 class="text-gray-500">Total Paket Layanan</h4><p class="text-3xl font-bold">{{ $stats['packages'] }}</p></div>
</div>
<h3 class="text-2xl font-bold mb-4">Pintasan</h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
     <div class="bg-white p-6 rounded-lg shadow"><h4 class="font-bold text-lg mb-2">Lihat Semua Pesanan</h4><p class="text-gray-600 mb-4">Akses halaman untuk mengelola semua pesanan.</p><a href="{{ route('admin.orders.index') }}" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5">Lihat Pesanan</a></div>
     <div class="bg-white p-6 rounded-lg shadow"><h4 class="font-bold text-lg mb-2">Tambah Paket Baru</h4><p class="text-gray-600 mb-4">Masukkan paket layanan baru ke dalam sistem.</p><a href="{{ route('admin.packages.create') }}" class="bg-blue-600 text-white hover:bg-blue-700 rounded-lg text-sm px-5 py-2.5">Tambah Paket</a></div>
</div>
@endsection