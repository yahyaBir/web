@extends('layouts.app')

@section('title', 'Uygulamalar - Arşen Prosess')

@section('description', 'Süperkritik CO2 ekstraksiyon teknolojisinin farklı endüstrilerdeki uygulamaları. Değerli bileşik saflaştırma ve ileri dönüşüm çözümleri.')

@section('content')
    <section class="page-header">
        <div class="container">
            <h1>Uygulamalar</h1>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="content-wrapper">
                <!-- Değerli Bileşik Saflaştırma -->
                <article class="compounds-section">
                    <h2>Değerli Bileşik Saflaştırma</h2>
                    <div class="compounds-grid">
                        <div class="compound-card">
                            <div class="compound-image">
                                <img src="{{ asset('images/applications/cbd.jpg') }}" alt="CBD Ekstraksiyonu">
                            </div>
                            <div class="compound-content">
                                <h3>Kanabidiol (CBD)</h3>
                            </div>
                        </div>
                        <div class="compound-card">
                            <div class="compound-image">
                                <img src="{{ asset('images/applications/hemp.jpg') }}" alt="Kenevir Tohumu Yağı">
                            </div>
                            <div class="compound-content">
                                <h3>Kenevir Tohumu Yağı</h3>
                            </div>
                        </div>
                        <div class="compound-card">
                            <div class="compound-image">
                                <img src="{{ asset('images/applications/black-seed.jpg') }}" alt="Çörekotu Yağı">
                            </div>
                            <div class="compound-content">
                                <h3>Çörekotu Yağı</h3>
                            </div>
                        </div>
                        <div class="compound-card">
                            <div class="compound-image">
                                <img src="{{ asset('images/applications/spices.jpg') }}" alt="Sıvı Baharatlar">
                            </div>
                            <div class="compound-content">
                                <h3>Sıvı Baharatlar</h3>
                            </div>
                        </div>
                        <div class="compound-card">
                            <div class="compound-image">
                                <img src="{{ asset('images/applications/astaxanthin.jpg') }}" alt="Astaxanthin">
                            </div>
                            <div class="compound-content">
                                <h3>Astaxanthin</h3>
                            </div>
                        </div>
                        <div class="compound-card">
                            <div class="compound-image">
                                <img src="{{ asset('images/applications/omega3.jpg') }}" alt="Algal Omega-3">
                            </div>
                            <div class="compound-content">
                                <h3>Algal Omega-3</h3>
                            </div>
                        </div>
                        <div class="compound-card">
                            <div class="compound-image">
                                <img src="{{ asset('images/applications/protein.jpg') }}" alt="Bitkisel Nature Protein">
                            </div>
                            <div class="compound-content">
                                <h3>Bitkisel Nature Protein</h3>
                            </div>
                        </div>
                        <div class="compound-card">
                            <div class="compound-image">
                                <img src="{{ asset('images/applications/cosmetics.jpg') }}" alt="Kozmetik">
                            </div>
                            <div class="compound-content">
                                <h3>Kozmetik</h3>
                            </div>
                        </div>
                        <div class="compound-card">
                            <div class="compound-image">
                                <img src="{{ asset('images/applications/rose.jpg') }}" alt="Gül">
                            </div>
                            <div class="compound-content">
                                <h3>Gül</h3>
                            </div>
                        </div>
                        <div class="compound-card">
                            <div class="compound-image">
                                <img src="{{ asset('images/applications/lavender.jpg') }}" alt="Lavanta">
                            </div>
                            <div class="compound-content">
                                <h3>Lavanta</h3>
                            </div>
                        </div>
                        <div class="compound-card">
                            <div class="compound-image">
                                <img src="{{ asset('images/applications/hops.jpg') }}" alt="Şerbetçiotu">
                            </div>
                            <div class="compound-content">
                                <h3>Şerbetçiotu</h3>
                            </div>
                        </div>
                        <div class="compound-card">
                            <div class="compound-image">
                                <img src="{{ asset('images/applications/curcumin.jpg') }}" alt="Kurkumin">
                            </div>
                            <div class="compound-content">
                                <h3>Kurkumin</h3>
                            </div>
                        </div>
                        <div class="compound-card">
                            <div class="compound-image">
                                <img src="{{ asset('images/applications/coffee.jpg') }}" alt="Kahve">
                            </div>
                            <div class="compound-content">
                                <h3>Kahve</h3>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- İleri Dönüşüm -->
                <article class="upcycling-section">
                    <h2>İleri Dönüşüm</h2>
                    <div class="section-intro">
                        <h3>İleri Dönüşüm Uygulamaları: Atıklardan Katma değere</h3>
                        <p>Süperkritik Akışkan Ekstraksiyon (SFE) teknolojisi, özellikle organik atıkların ileri dönüşümü için büyük potansiyel sunar. Tarım, gıda, kozmetik, eczacılık ve biyoyakıt endüstrilerinde kullanılmayan veya düşük ekonomik değer taşıyan yan ürünleri işleyerek yüksek katma değerli bileşikler üretmek mümkündür.</p>
                    </div>

                    <div class="upcycling-grid">
                        <div class="upcycling-card">
                            <div class="upcycling-image">
                                <img src="{{ asset('images/applications/olive-pomace.jpg') }}" alt="Zeytin Posası">
                            </div>
                            <div class="upcycling-content">
                                <h3>Zeytin Posası</h3>
                                <p>Zeytinyağı üretimi sırasında ortaya çıkan posa, fenolik bileşikler açısından oldukça zengindir. Süperkritik CO₂ kullanılarak bu posadan oleuropein, hidroksitirosol ve diğer antioksidanlar çıkarılabilir.</p>
                            </div>
                        </div>

                        <div class="upcycling-card">
                            <div class="upcycling-image">
                                <img src="{{ asset('images/applications/citrus-peels.jpg') }}" alt="Narenciye Kabukları">
                            </div>
                            <div class="upcycling-content">
                                <h3>Narenciye Kabukları</h3>
                                <p>Portakal, limon ve greyfurt kabukları, uçucu yağlar (limonen gibi) açısından değerlidir. SFE, bu kabuklardan uçucu yağların yanı sıra pektin gibi lifli materyalleri de elde etmeyi mümkün kılar.</p>
                            </div>
                        </div>

                        <div class="upcycling-card">
                            <div class="upcycling-image">
                                <img src="{{ asset('images/applications/coffee-grounds.jpg') }}" alt="Kahve Posası">
                            </div>
                            <div class="upcycling-content">
                                <h3>Kahve Posası</h3>
                                <p>Kahve üretiminde ortaya çıkan atıklar, kafein ve antioksidanlar açısından zengindir. Süperkritik CO₂ ekstraksiyonu ile kahve posasından kafein ve lipidler çıkarılabilir.</p>
                            </div>
                        </div>

                        <div class="upcycling-card">
                            <div class="upcycling-image">
                                <img src="{{ asset('images/applications/grape-seeds.jpg') }}" alt="Üzüm Çekirdekleri">
                            </div>
                            <div class="upcycling-content">
                                <h3>Üzüm Çekirdekleri</h3>
                                <p>Şarap üretimi sırasında oluşan üzüm çekirdekleri, proantosiyanidin gibi güçlü antioksidanlar içerir. Bu bileşikler, süperkritik CO₂ ile yüksek saflıkta elde edilebilir.</p>
                            </div>
                        </div>

                        <div class="upcycling-card">
                            <div class="upcycling-image">
                                <img src="{{ asset('images/applications/nut-waste.jpg') }}" alt="Fındık ve Çekirdek Atıkları">
                            </div>
                            <div class="upcycling-content">
                                <h3>Fındık ve Çekirdek Atıkları</h3>
                                <p>Fındık ve diğer yağlı tohumların işlenmesi sırasında kalan kabuklar ve posalar, süperkritik ekstraksiyon ile bitkisel yağlar ve fenolik bileşikler açısından değerlendirilebilir.</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection 