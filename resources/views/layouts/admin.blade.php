<!-- resources/views/admin/layouts/admin.blade.php -->
{{-- Layout untuk admin panel dengan sidebar --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- ... (styles) ... --}}
</head>
<body class="bg-gray-100">
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="h-16 flex items-center justify-center text-2xl font-bold">Admin Panel</div>
            <nav class="flex-1 px-4 py-4 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-2 rounded-md hover:bg-gray-700">Dashboard</a>
                <a href="{{ route('admin.orders.index') }}" class="flex items-center px-4 py-2 rounded-md hover:bg-gray-700">Kelola Pesanan</a>
                <a href="{{ route('admin.packages.index') }}" class="flex items-center px-4 py-2 rounded-md hover:bg-gray-700">Kelola Paket</a>
                <a href="{{ route('admin.profile.edit') }}" class="flex items-center px-4 py-2 rounded-md hover:bg-gray-700">Kelola Profil</a>
            </nav>
            <div class="p-4">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center px-4 py-2 rounded-md bg-red-600 hover:bg-red-700">Logout</button>
                </form>
            </div>
        </aside>
        
        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="h-16 bg-white shadow-sm flex items-center justify-between px-6">
                <h2 class="text-xl font-semibold">@yield('title')</h2>
                <p>Selamat datang, {{ auth()->user()->username }}!</p>
            </header>
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>