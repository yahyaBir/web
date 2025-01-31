<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arşen Prosess - Süperkritik Ekstraktör Çözümleri</title>
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="navbar-brand">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('images/beyaz-logo.png') }}" alt="UP Logo">
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

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-brand">
                <img src="{{ asset('images/beyaz-logo.png') }}" alt="Arşen Prosess Logo" class="footer-logo">
                <div class="newsletter">
                    <p>Şimdi abone olun ve en son güncellemelerimizi alın.</p>
                    <div class="email-signup">
                        <input type="email" placeholder="E-Mail Adresi">
                        <button type="submit">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-nav">
                <div class="footer-section">
                    <h3>Ürünler</h3>
                    <ul>
                        <li><a href="#superkritik">Süperkritik Ekstraktör</a></li>
                        <li><a href="#ekstraksiyon">Ekstraksiyon Sistemleri</a></li>
                        <li><a href="#otomasyon">Otomasyon Sistemleri</a></li>
                        <li><a href="#proses">Proses Ekipmanları</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Endüstriyel</h3>
                    <ul>
                        <li><a href="#gida">Gıda Endüstrisi</a></li>
                        <li><a href="#kimya">Kimya Endüstrisi</a></li>
                        <li><a href="#ilac">İlaç Endüstrisi</a></li>
                        <li><a href="#kozmetik">Kozmetik Endüstrisi</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Uygulamalar</h3>
                    <ul>
                        <li><a href="#vidalama">Vidalama</a></li>
                        <li><a href="#kaynak">Kaynak</a></li>
                        <li><a href="#montaj">Montaj</a></li>
                        <li><a href="#test">Test ve Kontrol</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Hizmet ve Destek</h3>
                    <ul>
                        <li><a href="#servis">Satış Sonrası Servis</a></li>
                        <li><a href="#sikca-sorulanlar">Sıkça Sorulanlar</a></li>
                        <li><a href="#destek">Teknik Destek</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Arşen Prosess Hakkında</h3>
                    <ul>
                        <li><a href="#hakkimizda">Hakkımızda</a></li>
                        <li><a href="#iletisim">İletişim</a></li>
                        <li><a href="#gizlilik">Gizlilik Politikası</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2024 Arşen Prosess - Tüm Hakları Saklıdır.</p>
            <a href="#" class="onemore">onemore<span>design</span></a>
        </div>
    </footer>
</body>
</html> 