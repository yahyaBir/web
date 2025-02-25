@extends('layouts.app')

@section('title', 'Süperkritik CO2 Ekstraksiyon')

@section('description', 'Süperkritik CO2 ekstraksiyon teknolojisi hakkında detaylı bilgi. Modern, verimli ve çevre dostu ekstraksiyon yöntemi.')

@section('content')
    <section class="page-header">
        <div class="container">
            <h1>Süperkritik CO2 Ekstraksiyon</h1>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="content-wrapper">
                <article class="technology-intro">
                    <h2>Süperkritik Akışkan Ekstraksiyon (SFE) Teknolojisi Nedir?</h2>
                    <p>Süperkritik ekstraksiyon, çeşitli endüstrilerde değerli bileşenleri izole etmek ve saflaştırmak için kullanılan, modern, verimli ve çevre dostu bir ekstraksiyon yöntemidir. Bu teknoloji, özellikle gıda, kozmetik, ilaç, ve biyoteknoloji endüstrilerinde yaygın olarak tercih edilmektedir. Süperkritik ekstraksiyon, geleneksel yöntemlere göre daha etkili, güvenli ve sürdürülebilir bir çözüm sunar.</p>
                    
                    <div class="highlight-box">
                        <h3>Geleceğin Teknolojisi Bugünden</h3>
                        <p>Süperkritik ekstraksiyon, endüstriyel süreçlerde sürdürülebilirliğin ve verimliliğin ön plana çıktığı günümüzde giderek daha fazla tercih edilen bir yöntemdir. Geleneksel kimyasal ve toksik solvent bazlı yöntemlere kıyasla üstünlüğü, daha temiz ve yüksek kaliteli ürünler elde edilmesine olanak tanır. Üstelik bu teknoloji, kimyasal ve biyolojik proseslerin inovatif uygulamaları için Arşen Process tarafından sürekli olarak geliştirilmektedir.</p>
                    </div>
                </article>

                <article class="supercritical-fluid">
                    <h2>Süperkritik Akışkan Nedir?</h2>
                    <p>Bir maddenin kritik sıcaklık ve basıncın üzerine çıkarıldığında ne sıvı ne de gaz fazında bulunduğu duruma "süperkritik faz" denir. Bu durumdaki maddeye ise süperkritik akışkan adı verilir. Süperkritik akışkanlar, gazların difüzyon kabiliyeti ile sıvıların çözücülük gücünü birleştirir.</p>
                </article>

                <article class="advantages">
                    <h2>Süperkritik Karbondioksit'in (SC-CO2) Avantajları</h2>
                    <div class="advantages-grid">
                        <div class="advantage-card">
                            <h3>Çevre Dostu</h3>
                            <p>Süperkritik Karbondioksit, geleneksel çözgenlere göre çok daha çevre dostudur. Toksik madde değildir ve biyolojik olarak parçalanabilir.</p>
                        </div>
                        <div class="advantage-card">
                            <h3>Yüksek Verim</h3>
                            <p>Süperkritik akışkanlar, geniş bir moleküler ürün gamını yüksek verimle çözebilir.</p>
                        </div>
                        <div class="advantage-card">
                            <h3>Düşük Sıcaklık</h3>
                            <p>Düşük sıcaklıklarda etkili olduğu için değerli ve hassas bileşiklerin bozulmadan elde edilmesini sağlar.</p>
                        </div>
                        <div class="advantage-card">
                            <h3>Geri Dönüştürülebilir</h3>
                            <p>Ekstrakte edilen bileşenlerden kolayca ayrışır, yeniden kullanılmak üzere depolanabilir.</p>
                        </div>
                    </div>
                </article>

                <article class="process">
                    <h2>Süperkritik Akışkan Ekstraksiyonu Nasıl Çalışır?</h2>
                    <div class="process-steps">
                        <div class="step">
                            <span class="step-number">1</span>
                            <h3>Hammadde Hazırlığı</h3>
                            <p>Ekstrakte edilecek bitki veya biyokütle ektraktörlere yerleştirilir.</p>
                        </div>
                        <div class="step">
                            <span class="step-number">2</span>
                            <h3>Süperkritik Akışkan Uygulaması</h3>
                            <p>CO₂, kritik sıcaklık ve basınç koşullarına getirilerek süperkritik hale geçirilir.</p>
                        </div>
                        <div class="step">
                            <span class="step-number">3</span>
                            <h3>Çözünme ve Ayırma</h3>
                            <p>Süperkritik CO₂, hedef bileşenleri hammaddeden çözer ve ayırır.</p>
                        </div>
                        <div class="step">
                            <span class="step-number">4</span>
                            <h3>CO₂'nin Geri Kazanımı</h3>
                            <p>Kullanılan CO₂ geri kazanılır ve tekrar kullanıma sokulur.</p>
                        </div>
                    </div>
                </article>

                <article class="comparison">
                    <h2>Verimlilik Karşılaştırma Tablosu</h2>
                    <div class="table-responsive">
                        <table class="comparison-table">
                            <thead>
                                <tr>
                                    <th>Özellikler</th>
                                    <th>Süperkritik Akışkan Ekstraksiyonu</th>
                                    <th>Buhar Distilasyonu</th>
                                    <th>Hexane Distilasyonu</th>
                                    <th>Soğuk Pres</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ekstakt Edilen Ürün</td>
                                    <td>Esansiyel ve esansiyel olmayan yağlar</td>
                                    <td>Sadece esansiyel yağlar</td>
                                    <td>Esansiyel ve esansiyel olmayan yağlar</td>
                                    <td>Sadece Sabit Yağlar</td>
                                </tr>
                                <tr>
                                    <td>Ekstraksiyon Metodu</td>
                                    <td>Karbondioksit</td>
                                    <td>Buhar Distilasyonu</td>
                                    <td>Çözücü Ekstraksiyonu</td>
                                    <td>Mekanik Ekstrksiyon</td>
                                </tr>
                                <tr>
                                    <td>Enerji Tüketimi</td>
                                    <td><span class="rating very-low">Çok Düşük</span></td>
                                    <td><span class="rating high">Yüksek</span></td>
                                    <td><span class="rating medium">Orta</span></td>
                                    <td><span class="rating low">Düşük</span></td>
                                </tr>
                                <tr>
                                    <td>Ekstrakt Verimliliği</td>
                                    <td><span class="rating very-high">Çok Yüksek</span></td>
                                    <td><span class="rating medium">Orta</span></td>
                                    <td><span class="rating high">Yüksek</span></td>
                                    <td><span class="rating low">Düşük</span></td>
                                </tr>
                                <tr>
                                    <td>Ekstrakt Kalitesi</td>
                                    <td><span class="rating very-high">Çok Yüksek</span></td>
                                    <td><span class="rating low">Düşük</span></td>
                                    <td><span class="rating low">Düşük</span></td>
                                    <td><span class="rating medium">Orta</span></td>
                                </tr>
                                <tr>
                                    <td>Tüketci Talebi</td>
                                    <td><span class="rating very-high">Çok Yüksek</span></td>
                                    <td><span class="rating low">Düşük</span></td>
                                    <td><span class="rating medium">Orta</span></td>
                                    <td><span class="rating high">Yüksek</span></td>
                                </tr>
                                <tr>
                                    <td>Karlılık</td>
                                    <td><span class="rating very-high">Çok Yüksek</span></td>
                                    <td><span class="rating low">Düşük</span></td>
                                    <td><span class="rating medium">Orta</span></td>
                                    <td><span class="rating very-low">Çok Düşük</span></td>
                                </tr>
                                <tr>
                                    <td>Toksik Kalıntı</td>
                                    <td><span class="rating positive">Yok</span></td>
                                    <td><span class="rating positive">Yok</span></td>
                                    <td><span class="rating negative">Var</span></td>
                                    <td><span class="rating positive">Yok</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection 