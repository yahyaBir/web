<!DOCTYPE html>
<html lang="tr">
<head>
    @include('partials.head')
    @production
        <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
        <script type="module" src="{{ asset('build/assets/app.js') }}"></script>
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endproduction
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Scripts -->
    @stack('scripts')
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html> 