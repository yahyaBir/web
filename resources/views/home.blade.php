@extends('layouts.app')

@section('title', 'Arşen Prosess - Süperkritik Ekstraktör Çözümleri')

@section('description', 'Süperkritik ekstraktör çözümleri ile endüstriyel ekstraksiyon sistemleri. Yüksek verimli ve hızlı ekstraksiyon teknolojileri.')

@section('content')
    <main>
        <!-- Hero Section -->
        <section class="hero" aria-label="Ana bölüm">
            <div class="hero-content">
                <video class="hero-video" autoplay muted loop playsinline aria-hidden="true">
                    <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
                    <p>Tarayıcınız video oynatmayı desteklemiyor.</p>
                </video>
                <div class="hero-overlay">
                    <h1>Arşen Prosess</h1>
                    <p>Süperkritik Ekstraktör Çözümleri</p>
                </div>
            </div>
        </section>

        <!-- Özellikler Section -->
        <section class="features" aria-label="Özellikler">
            <div class="features-container">
                <div class="features-nav">
                    <div class="features-buttons" role="tablist" aria-label="Ürün özellikleri">
                        <div class="feature-btn" role="tab" tabindex="0" data-feature="extraction" aria-selected="false" aria-controls="extraction-panel">
                            <h2 class="feature-title">Hızlı</h2>
                        </div>
                        <div class="feature-btn" role="tab" tabindex="0" data-feature="automation" aria-selected="false" aria-controls="automation-panel">
                            <h2 class="feature-title">Yüksek Verimli</h2>
                        </div>
                        <div class="feature-btn" role="tab" tabindex="0" data-feature="equipment" aria-selected="false" aria-controls="equipment-panel">
                            <h2 class="feature-title">Seçici</h2>
                        </div>
                        <div class="feature-btn" role="tab" tabindex="0" data-feature="service" aria-selected="false" aria-controls="service-panel">
                            <h2 class="feature-title">Yüksek Saflıkta Ekstraksiyon</h2>
                        </div>
                    </div>
                    
                    <div class="features-descriptions">
                        <p id="extraction-panel" class="feature-description" data-feature="extraction" role="tabpanel" aria-labelledby="extraction-btn">
                            Rakiplerinden minimum 2 kat hızlı ekstraksiyon teknolojisi
                        </p>
                        <p id="automation-panel" class="feature-description" data-feature="automation" role="tabpanel" aria-labelledby="automation-btn">
                            Tam otomatik kontrol sistemleri ile kesintisiz ve hassas proses yönetimi
                        </p>
                        <p id="equipment-panel" class="feature-description" data-feature="equipment" role="tabpanel" aria-labelledby="equipment-btn">
                            Endüstriyel standartlara uygun, yüksek kaliteli proses ekipmanları
                        </p>
                        <p id="service-panel" class="feature-description" data-feature="service" role="tabpanel" aria-labelledby="service-btn">
                            7/24 teknik destek ve yerinde servis hizmeti ile kesintisiz çalışma garantisi
                        </p>
                    </div>
                </div>
                
                <div class="features-content">
                    <div class="feature-info" role="tabpanel" data-feature="extraction">
                        <div class="feature-image">
                            <img src="{{ asset('images/metal-tank.jpg') }}" 
                                 alt="Hızlı süperkritik ekstraktör sistemi" 
                                 loading="lazy"
                                 width="800"
                                 height="600">
                        </div>
                    </div>
                    
                    <div class="feature-info" role="tabpanel" data-feature="automation">
                        <div class="feature-image">
                            <img src="{{ asset('images/robomation.png') }}" 
                                 alt="Otomatik kontrol sistemi paneli" 
                                 loading="lazy"
                                 width="800"
                                 height="600">
                        </div>
                    </div>
                    
                    <div class="feature-info" role="tabpanel" data-feature="equipment">
                        <div class="feature-image">
                            <img src="{{ asset('images/metal-tank.jpg') }}" 
                                 alt="Endüstriyel proses ekipmanları" 
                                 loading="lazy"
                                 width="800"
                                 height="600">
                        </div>
                    </div>
                    
                    <div class="feature-info" role="tabpanel" data-feature="service">
                        <div class="feature-image">
                            <img src="{{ asset('images/robomation.png') }}" 
                                 alt="Teknik servis ve destek ekibi" 
                                 loading="lazy"
                                 width="800"
                                 height="600">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ürünler Section -->
        <section class="products" id="urunler" aria-label="Ürünlerimiz">
            <div class="section-header">
                <h2>Ürünlerimiz</h2>
                <p>Arşen Prosess olarak Süperkritik extraktör çözümlerimizle yanınızdayız</p>
            </div>
            
            <div class="product-grid">
                @for ($i = 1; $i <= 8; $i++)
                    <article class="product-card">
                        <div class="product-image">
                            <img src="{{ asset('images/metal-tank.jpg') }}" 
                                 alt="Süperkritik Ekstraktör Model {{ $i }}"
                                 loading="lazy"
                                 width="300"
                                 height="400">
                        </div>
                        <div class="product-info">
                            <h3>Süperkritik Ekstraktör</h3>
                        </div>
                    </article>
                @endfor
            </div>
        </section>

        <!-- Referanslar Section -->
        <section class="references" id="referanslar" aria-label="Referanslarımız">
            <div class="section-header">
                <h2>Referanslarımız</h2>
                <p>Güvenilir İş Ortaklarımız</p>
            </div>
            
            <div class="references-grid">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="reference-item">
                        <img src="{{ asset('images/Google-Logo.wine.svg') }}" 
                             alt="Referans Firma {{ $i }}"
                             loading="lazy"
                             width="200"
                             height="100">
                    </div>
                @endfor
            </div>
        </section>
    </main>
@endsection

@push('styles')
    <!-- Sayfa özel stilleri buraya -->
@endpush

@push('scripts')
    <!-- Sayfa özel scriptleri buraya -->
@endpush 