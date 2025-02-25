@extends('layouts.app')

@section('title', 'İletişim - Arşen Prosess')

@section('description', 'Arşen Prosess ile iletişime geçin. Süperkritik ekstraksiyon teknolojileri hakkında bilgi almak ve çözümlerimizi keşfetmek için bize ulaşın.')

@section('content')
    <section class="page-header">
        <div class="container">
            <h1>İletişim</h1>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="contact-intro">
                <h2>Bize Ulaşın</h2>
                <p>Süperkritik ekstraksiyon teknolojileri hakkında daha fazla bilgi almak veya ihtiyaçlarınıza özel çözümler için bizimle iletişime geçin.</p>
            </div>

            <div class="contact-content">
                <!-- İletişim Bilgileri -->
                <div class="contact-info">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3>Adres</h3>
                        <p>Teknopark İstanbul, No: 1/4A<br>Pendik, İstanbul</p>
                    </div>

                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h3>Telefon</h3>
                        <p>+90 (216) 999 99 99</p>
                    </div>

                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3>E-posta</h3>
                        <p>info@arsenprosess.com</p>
                    </div>

                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3>Çalışma Saatleri</h3>
                        <p>Pazartesi - Cuma: 09:00 - 18:00</p>
                    </div>
                </div>

                <!-- İletişim Formu -->
                <div class="contact-form-container">
                    <div class="form-header">
                        <h3>İletişim Formu</h3>
                        <p>Size en kısa sürede dönüş yapacağız.</p>
                    </div>

                    <form class="contact-form" action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Ad Soyad</label>
                            <input type="text" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="company">Firma Adı</label>
                            <input type="text" id="company" name="company">
                        </div>

                        <div class="form-group">
                            <label for="email">E-posta</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefon</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>

                        <div class="form-group full-width">
                            <label for="subject">Konu</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>

                        <div class="form-group full-width">
                            <label for="message">Mesajınız</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>

                        <div class="form-group full-width">
                            <button type="submit" class="submit-button">
                                <span>Gönder</span>
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Harita -->
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.952560149717!2d29.320774776352684!3d40.88741897136085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cad8f7ee6f57e9%3A0x829c2672b9f5c2d9!2sTeknopark%20%C4%B0stanbul!5e0!3m2!1str!2str!4v1690123456789!5m2!1str!2str" 
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
@endsection 