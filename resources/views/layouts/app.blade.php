<!DOCTYPE html>
<html lang="tr">
<head>
    @include('partials.head')
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