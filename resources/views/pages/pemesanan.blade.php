<!-- resources/views/pages/pemesanan.blade.php -->
@extends('layouts.app')

@section('title', 'Formulir Pemesanan')

@section('content')
<div class="container mx-auto px-6 py-16">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
       <h1 class="text-3xl font-bold mb-8 text-center">Formulir Pemesanan</h1>
       
       @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Oops!</strong>
            <span class="block sm:inline">Ada beberapa masalah dengan input Anda.</span>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
       @endif

       <form action="{{ route('pemesanan.store') }}" method="POST">
           @csrf
           <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="email_pemesan" class="block mb-2 text-sm font-medium text-gray-900">Alamat Email</label>
                    <input type="email" id="email_pemesan" name="email_pemesan" value="{{ old('email_pemesan') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="nomor_telepon" class="block mb-2 text-sm font-medium text-gray-900">Nomor Telepon/WhatsApp</label>
                    <input type="tel" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="tanggal_pindahan" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Rencana Pemindahan</label>
                    <input type="date" id="tanggal_pindahan" name="tanggal_pindahan" value="{{ old('tanggal_pindahan') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="md:col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Paket Layanan yang Dipilih</label>
                    <select name="package_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <option value="">-- Pilih Paket --</option>
                        @foreach($packages as $package)
                            <option value="{{ $package->id }}" {{ request()->get('package_id') == $package->id ? 'selected' : '' }}>
                                {{ $package->nama_paket }} - (Rp {{ number_format($package->harga, 0, ',', '.') }})
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="md:col-span-2">
                    <label for="alamat_asal" class="block mb-2 text-sm font-medium text-gray-900">Alamat Asal</label>
                    <textarea id="alamat_asal" name="alamat_asal" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>{{ old('alamat_asal') }}</textarea>
                </div>
                <div class="md:col-span-2">
                    <label for="alamat_tujuan" class="block mb-2 text-sm font-medium text-gray-900">Alamat Tujuan</label>
                    <textarea id="alamat_tujuan" name="alamat_tujuan" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>{{ old('alamat_tujuan') }}</textarea>
                </div>
                <div class="md:col-span-2 text-center">
                    <button type="submit" class="bg-blue-600 text-white hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 w-full md:w-auto">Kirim Pesanan</button>
                </div>
           </div>
       </form>
    </div>
</div>
@endsection