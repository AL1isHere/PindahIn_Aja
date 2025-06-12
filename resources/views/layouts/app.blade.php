<!-- resources/views/layouts/app.blade.php -->
<!-- Layout utama untuk Halaman Publik -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Pindahin Aja')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style> body { font-family: 'Inter', sans-serif; } </style>
    @stack('styles')
</head>
{{-- PERUBAHAN DI SINI: class flex, flex-col, dan min-h-screen ditambahkan --}}
<body class="bg-gray-50 text-gray-800 pb-20 md:pb-0 flex flex-col min-h-screen">
    
    @include('partials.header')

    {{-- PERUBAHAN DI SINI: class flex-grow ditambahkan --}}
    <main class="flex-grow">
        @if(session('success'))
            <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md my-4 container mx-auto" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <div>
                        <p class="font-bold">Sukses!</p>
                        <p class="text-sm">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @yield('content')
    </main>

    @include('partials.footer')
    
    @include('partials.bottom-nav')

    @stack('scripts')
</body>
</html>