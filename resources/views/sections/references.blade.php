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