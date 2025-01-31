@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <video class="hero-video" autoplay muted loop playsinline>
                <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
            </video>
            <!--
            <div class="hero-overlay">
                <h1>Arşen Prosess</h1>
                <p>Süperkritik Ekstraktör Çözümleri</p>
            </div>
            -->
        </div>
    </section>

    <!-- Ürünler Section -->
    <section class="products" id="urunler">
        <div class="section-header">
            <h1>Ürünlerimiz</h1>
            <p>Arşen Prosess olarak Süperkritik extraktör çözümlerimizle yanınızdayız</p>
        </div>
        
        <div class="product-grid">
            @for ($i = 1; $i <= 8; $i++)
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/metal-tank.jpg') }}" alt="Süperkritik Ekstraktör">
                    </div>
                    <div class="product-info">
                        <h3>Süperkritik Ekstraktör</h3>
                    </div>
                </div>
            @endfor
        </div>
    </section>

    <!-- Referanslar Section -->
    <section class="references" id="referanslar">
        <div class="section-header">
            <h1>Referanslarımız</h1>
            <p>Güvenilir İş Ortaklarımız</p>
        </div>
        
        <div class="references-grid">
            <div class="reference-item">
                <img src="{{ asset('images/Google-Logo.wine.svg') }}" alt="Referans 1">
            </div>
            <div class="reference-item">
                <img src="{{ asset('images/Google-Logo.wine.svg') }}" alt="Referans 2">
            </div>
            <div class="reference-item">
                <img src="{{ asset('images/Google-Logo.wine.svg') }}" alt="Referans 3">
            </div>
            <div class="reference-item">
                <img src="{{ asset('images/Google-Logo.wine.svg') }}" alt="Referans 4">
            </div>
            <div class="reference-item">
                <img src="{{ asset('images/Google-Logo.wine.svg') }}" alt="Referans 5">
            </div>
            <div class="reference-item">
                <img src="{{ asset('images/Google-Logo.wine.svg ') }}" alt="Referans 6">
            </div>
            <div class="reference-item">
                <img src="{{ asset('images/Google-Logo.wine.svg ') }}" alt="Referans 6">
            </div>
             <div class="reference-item">
                <img src="{{ asset('images/Google-Logo.wine.svg ') }}" alt="Referans 6">
            </div>
        </div>
    </section>
@endsection 