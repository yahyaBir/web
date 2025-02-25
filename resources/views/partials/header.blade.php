<header class="header">
    <nav class="navbar" role="navigation" aria-label="Ana navigasyon">
        <div class="navbar-brand">
            <a href="{{ route('home') }}" class="logo" aria-label="Ana sayfa">
                <img src="{{ asset('images/beyaz-logo.png') }}" alt="Arşen Prosess Logo" width="180" height="70">
            </a>
        </div>

        <button class="mobile-toggle" aria-label="Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="navbar-menu">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('superkritik') }}" class="nav-link">Süperkritik CO2</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle">
                        Çözümlerimiz
                        <svg class="dropdown-arrow" width="10" height="10" viewBox="0 0 10 10">
                            <path d="M1 3L5 7L9 3" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#superkritik">Pilot</a></li>
                        <li><a href="#ekstraksiyon">Hafif Endüstriyel</a></li>
                        <li><a href="#otomasyon">Endüstriyel</a></li>
                        <li><a href="#proses">Ağır Endüstriyel</a></li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('applications') }}" class="nav-link">Uygulamalar</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link">Hakkımızda</a>
                </li>
            </ul>
            <div class="navbar-end">
                <a href="{{ route('contact') }}" class="contact-button">İletişim</a>
            </div>
        </div>
    </nav>
</header> 