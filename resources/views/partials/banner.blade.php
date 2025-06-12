<!-- resources/views/partials/banner.blade.php -->
<section class="relative bg-gray-700 text-white text-center py-24 px-4 bg-cover bg-center" style="background-image: url('{{ $backgroundImage }}')">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative z-10 max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight">{{ $title }}</h1>
        @if(isset($subtitle))
        <p class="text-lg md:text-xl mb-8">{{ $subtitle }}</p>
        @endif
        @if(isset($buttonUrl) && isset($buttonText))
        <a href="{{ $buttonUrl }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg text-sm px-6 py-3 transition-colors duration-300">{{ $buttonText }}</a>
        @endif
    </div>
</section>