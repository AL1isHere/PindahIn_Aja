<!-- resources/views/auth/login.blade.php -->
@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center mb-2">Login to Admin Account</h1>
        <p class="text-center text-gray-500 mb-6">Welcome back, Admin!</p>
        
        @error('username')
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                {{ $message }}
            </div>
        @enderror

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                <input type="text" id="username" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
            </div>
            <button type="submit" class="bg-gray-800 text-white hover:bg-gray-900 w-full font-medium rounded-lg text-sm px-5 py-2.5">Login</button>
        </form>
        <a href="{{ route('home') }}" class="text-blue-600 hover:underline text-sm mt-4 w-full text-center block">Kembali ke Halaman Utama</a>
    </div>
</div>
@endsection