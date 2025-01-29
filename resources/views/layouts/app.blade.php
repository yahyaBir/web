<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arşen Prosess - Süperkritik Ekstraktör Çözümleri</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="navbar-brand">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="UP Logo">
                </a>
            </div>

            <button class="mobile-toggle" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="navbar-menu">
                <ul class="nav-list">
                    <li class="nav-item dropdown">
                        <button class="nav-link dropdown-toggle">
                            Ürünler
                            <svg class="dropdown-arrow" width="10" height="10" viewBox="0 0 10 10">
                                <path d="M1 3L5 7L9 3" stroke="currentColor" stroke-width="2" fill="none"/>
                            </svg>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#superkritik">Süperkritik Ekstraktör</a></li>
                            <li><a href="#ekstraksiyon">Ekstraksiyon Sistemleri</a></li>
                            <li><a href="#otomasyon">Otomasyon Sistemleri</a></li>
                            <li><a href="#proses">Proses Ekipmanları</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#sektorler" class="nav-link">Sektörler</a>
                    </li>
                    <li class="nav-item">
                        <a href="#hakkimizda" class="nav-link">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a href="#iletisim" class="nav-link">İletişim</a>
                    </li>
                </ul>
                <div class="navbar-end">
                    <a href="#iletisim" class="contact-button">İletişime Geç</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer içeriği daha sonra eklenecek -->
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html> 