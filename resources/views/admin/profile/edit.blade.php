<!-- resources/views/admin/profile/edit.blade.php -->
@extends('layouts.admin')

@section('title', 'Kelola Profil Website')

@section('content')
<h3 class="text-2xl font-bold mb-6">Kelola Profil Website</h3>
<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow">
    <form action="{{ route('admin.profile.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="misi" class="block mb-2 text-sm font-medium text-gray-900">Misi Kami</label>
            <textarea id="misi" name="misi" rows="4" class="bg-gray-50 border border-gray-300 w-full p-2.5 rounded-lg" required>{{ old('misi', $siteProfile['misi']) }}</textarea>
        </div>
        <div class="mb-6">
            <label for="inovasi" class="block mb-2 text-sm font-medium text-gray-900">Nilai: Inovasi</label>
            <textarea id="inovasi" name="inovasi" rows="3" class="bg-gray-50 border border-gray-300 w-full p-2.5 rounded-lg" required>{{ old('inovasi', $siteProfile['values']['inovasi']['text']) }}</textarea>
        </div>
        <div class="mb-6">
            <label for="integritas" class="block mb-2 text-sm font-medium text-gray-900">Nilai: Integritas</label>
            <textarea id="integritas" name="integritas" rows="3" class="bg-gray-50 border border-gray-300 w-full p-2.5 rounded-lg" required>{{ old('integritas', $siteProfile['values']['integritas']['text']) }}</textarea>
        </div>
        <div class="mb-6">
            <label for="profesionalisme" class="block mb-2 text-sm font-medium text-gray-900">Nilai: Profesionalisme</label>
            <textarea id="profesionalisme" name="profesionalisme" rows="3" class="bg-gray-50 border border-gray-300 w-full p-2.5 rounded-lg" required>{{ old('profesionalisme', $siteProfile['values']['profesionalisme']['text']) }}</textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white hover:bg-blue-700 w-full rounded-lg text-sm px-5 py-2.5">Simpan Perubahan Profil</button>
    </form>
</div>
@endsection