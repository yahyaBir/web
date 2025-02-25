<section class="products" id="urunler" aria-label="Ürünlerimiz">
    <div class="section-header">
        <h2>Ürünlerimiz</h2>
        <p>Arşen Prosess olarak Süperkritik extraktör çözümlerimizle yanınızdayız</p>
    </div>
    
    <div class="product-grid">
        @for ($i = 1; $i <= 4; $i++)
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