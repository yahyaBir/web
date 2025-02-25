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