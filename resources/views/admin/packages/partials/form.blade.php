<!-- resources/views/admin/packages/partials/form.blade.php -->
<div class="mb-4">
    <label for="nama_paket" class="block mb-2 text-sm font-medium text-gray-900">Nama Paket</label>
    <input type="text" id="nama_paket" name="nama_paket" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" value="{{ old('nama_paket', $package->nama_paket ?? '') }}" required>
</div>
<div class="mb-4">
    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
    <input type="number" id="harga" name="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" value="{{ old('harga', $package->harga ?? '') }}" required>
</div>
<div class="mb-6">
    <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi Paket</label>
    <textarea id="deskripsi" name="deskripsi" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" required>{{ old('deskripsi', $package->deskripsi ?? '') }}</textarea>
</div>

<div class="mb-6">
    <label for="foto_paket" class="block mb-2 text-sm font-medium text-gray-900">Gambar Paket</label>
    @if(isset($package) && $package->foto_paket)
    <div class="my-2">
        <img src="{{ asset('storage/' . $package->foto_paket) }}" alt="Current Image" class="h-32 rounded">
    </div>
    <p class="text-xs text-gray-500 mb-2">Unggah gambar baru untuk mengganti yang lama.</p>
    @endif
    <input type="file" id="foto_paket" name="foto_paket" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full">
    @error('foto_paket')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>

<button type="submit" class="bg-blue-600 text-white hover:bg-blue-700 w-full rounded-lg text-sm px-5 py-2.5">Simpan Paket</button>
