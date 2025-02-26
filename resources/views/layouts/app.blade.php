<!DOCTYPE html>
<html lang="tr">
<head>
    @include('partials.head')
    @vite(['resources/js/app.js'])
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Scripts -->
    @stack('scripts')
</body>
</html> 