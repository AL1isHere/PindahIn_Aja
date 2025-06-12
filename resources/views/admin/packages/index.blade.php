<!-- resources/views/admin/packages/index.blade.php -->
@extends('layouts.admin')

@section('title', 'Kelola Paket Layanan')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-2xl font-bold">Kelola Paket Layanan</h3>
        <a href="{{ route('admin.packages.create') }}" class="bg-blue-600 text-white hover:bg-blue-700 rounded-lg text-sm px-5 py-2.5">Tambah Paket Baru</a>
    </div>
    <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">Gambar</th> 
                    <th scope="col" class="px-6 py-3">Nama Paket</th>
                    <th scope="col" class="px-6 py-3">Harga</th>
                    <th scope="col" class="px-6 py-3">Deskripsi</th>
                    <th scope="col" class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($packages as $package)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">
                            @if($package->foto_paket)
                                <img src="{{ asset('storage/' . $package->foto_paket) }}" alt="Foto" class="h-16 w-16 object-cover rounded">
                            @else
                                <div class="h-16 w-16 bg-gray-200 rounded flex items-center justify-center text-xs text-gray-500">No Img</div>
                            @endif
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900">{{ $package->nama_paket }}</td>
                        <td class="px-6 py-4">Rp {{ number_format($package->harga, 0, ',', '.') }}</td>
                        <td class="px-6 py-4 max-w-sm truncate">{{ $package->deskripsi }}</td>
                        <td class="px-6 py-4 flex items-center space-x-2">
                            <a href="{{ route('admin.packages.edit', $package) }}" class="font-medium text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('admin.packages.destroy', $package) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus paket ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center px-6 py-4">Tidak ada data paket.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection