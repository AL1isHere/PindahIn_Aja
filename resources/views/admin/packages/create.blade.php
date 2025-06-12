<!-- resources/views/admin/packages/create.blade.php -->
@extends('layouts.admin')
@section('title', 'Tambah Paket Baru')
@section('content')
<h3 class="text-2xl font-bold mb-6">Tambah Paket Baru</h3>
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow">
    <form action="{{ route('admin.packages.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.packages.partials.form')
    </form>
</div>
@endsection