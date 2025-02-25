@extends('layouts.app')

@section('title', 'Hakkımızda - Arşen Prosess')

@section('description', 'Arşen Prosess olarak süperkritik akışkan teknolojileri alanında Türkiye\'nin öncü şirketiyiz. Yenilikçi çözümlerimiz ve uzman ekibimizle sektöre yön veriyoruz.')

@section('content')
    <section class="page-header">
        <div class="container">
            <h1>Hakkımızda</h1>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <!-- Vizyon & Misyon -->
            <div class="vision-mission">
                <div class="vision-box">
                    <h2>Vizyonumuz</h2>
                    <p>Süperkritik akışkan teknolojileri alanında global bir teknoloji şirketi olmak ve sürdürülebilir üretim çözümleriyle dünya standartlarında hizmet sunmak.</p>
                </div>
                <div class="mission-box">
                    <h2>Misyonumuz</h2>
                    <p>Yenilikçi ve çevre dostu teknolojiler geliştirerek, müşterilerimizin üretim süreçlerini daha verimli ve sürdürülebilir hale getirmek.</p>
                </div>
            </div>

            <!-- Şirket Hikayesi -->
            <div class="company-story">
                <div class="story-content">
                    <h2>Hikayemiz</h2>
                    <p>2020 yılında kurulan Arşen Prosess, süperkritik akışkan teknolojileri alanında Türkiye'nin öncü şirketlerinden biridir. Kurulduğumuz günden bu yana, sürdürülebilir üretim ve yenilikçi çözümler konusunda sektöre yön veriyoruz.</p>
                    <p>Deneyimli mühendislik ekibimiz ve Ar-Ge çalışmalarımızla, müşterilerimize özel çözümler geliştiriyor ve süperkritik akışkan teknolojilerinin endüstriyel uygulamalarında lider konumumuzu sürdürüyoruz.</p>
                </div>
                <div class="story-image">
                    <img src="{{ asset('images/about/company.jpg') }}" alt="Arşen Prosess Ekibi">
                </div>
            </div>

            <!-- Değerlerimiz -->
            <div class="values-section">
                <h2>Değerlerimiz</h2>
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3>Yenilikçilik</h3>
                        <p>Sürekli gelişim ve inovasyona odaklanarak, en son teknolojileri takip ediyor ve uyguluyoruz.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h3>Sürdürülebilirlik</h3>
                        <p>Çevre dostu teknolojiler geliştirerek, gelecek nesillere daha temiz bir dünya bırakmayı hedefliyoruz.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3>Güvenilirlik</h3>
                        <p>Müşterilerimizle uzun vadeli ve güvene dayalı ilişkiler kurarak, kaliteli hizmet sunuyoruz.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Takım Çalışması</h3>
                        <p>Uzman ekibimizle birlikte, her projede en iyi sonucu elde etmek için çalışıyoruz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 