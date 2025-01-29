@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <img src="{{ asset('images/robomation.png') }}" alt="Endüstriyel Ekipmanlar" class="hero-image">
        </div>
    </section>

    <!-- Ürünler Section -->
    <section class="products" id="urunler">
        <div class="section-header">
            <h1>Ürünlerimiz</h1>
            <p>Arşen Prosess olarak Süperkritik extraktör çözümlerimizle yanınızdayız</p>
        </div>
        
        <div class="product-grid">
            @for ($i = 1; $i <= 4; $i++)
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/product-' . $i . '.jpg') }}" alt="Süperkritik Ekstraktör">
                    </div>
                    <div class="product-info">
                        <h3>Süperkritik Ekstraktör</h3>
                        <a href="#" class="product-link">Detaylı Bilgi</a>
                    </div>
                </div>
            @endfor
        </div>
    </section>
@endsection 