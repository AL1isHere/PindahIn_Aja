<!-- resources/views/admin/packages/edit.blade.php -->
@extends('layouts.admin')
@section('title', 'Edit Paket')
@section('content')
<h3 class="text-2xl font-bold mb-6">Edit Paket: {{ $package->nama_paket }}</h3>
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow">
    <form action="{{ route('admin.packages.update', $package) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.packages.partials.form')
    </form>
</div>
@endsection