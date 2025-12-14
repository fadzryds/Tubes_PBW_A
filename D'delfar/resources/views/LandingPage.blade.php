<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>D'Delfar Bengkel Motor</title>
    
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    </head>
    
<body>
    <header class="navbar">
        <div class="logo">D'Delfar</div>
        <nav class="nav-menu">
            <a href="#home">Home</a>
            <a href="#sparepart">Sparepart</a>
            <a href="#service">Service</a>
            <a href="#about">About</a>
        </nav>
        <div class="auth-buttons">
            <a href="/register" class="btn-register">Register</a>
            <a href="/login" class="btn-login">Log in</a>
        </div>
    </header>

    <section class="hero" id="home">
        <div class="hero-text">
            <p class="subtitle">The Best Provider</p>
            <h1>Auto Service<br>& Repair</h1>
            <p class="desc">D'Delfar Bengkel Motor menghadirkan layanan servis premium dengan sentuhan presisi dan dukungan sparepart original yang selalu tersedia. Sistem antrean modern memberikan pengalaman perawatan yang lebih tenang dan tertata.</p>
            <a href="#" class="btn-read">Read More</a>
        </div>
        <div class="hero-image">
            <img src="/images/zx25r.png" alt="Motor Sport">
        </div>
    </section>

    <section class="service-section" id="sparepart">
        <div class="service-header">
        <h2>Sparepart</h2>
        <a href="{{ route('sparepart') }}" class="btn-next">Selanjutnya</a>
        </div>
    
        <div class="service-grid">
            <div class="service-card">
                <img src="/images/oli.jpeg" alt="Oli Mesin">
                <h3>Oli Mesin</h3>
                <p>Kualitas terbaik untuk menjaga performa motor.</p>
                <p class="price">Rp. 2.000.000</p>
                <a href="#" class="btn-book">Pesan Sekarang!</a>
            </div>
    
            <div class="service-card">
                <img src="/images/aki.jpeg" alt="Aki Motor">
                <h3>Aki Motor</h3>
                <p>Daya tahan lama dan aman digunakan.</p>
                <p class="price">Rp. 2.000.000</p>
                <a href="#" class="btn-book">Pesan Sekarang!</a>
            </div>
    
            <div class="service-card">
                <img src="/images/kampas.jpg" alt="Kampas Rem">
                <h3>Kampas Rem</h3>
                <p>Memberikan pengereman yang optimal.</p>
                <p class="price">Rp. 2.000.000</p>
                <a href="#" class="btn-book">Pesan Sekarang!</a>
            </div>
    
            <div class="service-card">
                <img src="/images/v-belt.jpeg" alt="V-Belt Motor">
                <h3>V-Belt Motor</h3>
                <p>Kuat dan tahan lama untuk motor matic.</p>
                <p class="price">Rp. 2.000.000</p>
                <a href="#" class="btn-book">Pesan Sekarang!</a>
            </div>
        </div>
    </section>
    
    <section class="service-section" id="service">
        <div class="service-header">
            <h2>Service</h2>
            <a href="{{ route('service') }}" class="btn-next">Selanjutnya</a>
        </div>
    
        <div class="service-grid">
            <div class="service-card">
                <img src="/images/zx25r.png" alt="Service 1">
                <h3>Paket Service Eliminator 1</h3>
                <p class="detail">Service + Ganti Oli</p>
                <p class="price">Rp. 2.000.000</p>
                <a href="#" class="btn-book">Booking!</a>
            </div>
    
            <div class="service-card">
                <img src="/images/zx25r.png" alt="Service 2">
                <h3>Paket Service Eliminator 2</h3>
                <p class="detail">Service + Ganti Velg</p>
                <p class="price">Rp. 5.000.000</p>
                <a href="#" class="btn-book">Booking!</a>
            </div>
    
            <div class="service-card">
                <img src="/images/zx25r.png" alt="Service 3">
                <h3>Paket Service Eliminator 3</h3>
                <p class="detail">Service + Ganti Rantai</p>
                <p class="price">Rp. 950.000</p>
                <a href="#" class="btn-book">Booking!</a>
            </div>
    
            <div class="service-card">
                <img src="/images/zx25r.png" alt="Service 4">
                <h3>Paket Service Eliminator 4</h3>
                <p class="detail">Service + Ganti Seal</p>
                <p class="price">Rp. 3.000.000</p>
                <a href="#" class="btn-book">Booking</a>
            </div>
        </div>
    </section>

    <section class="about-section" id="about">
        <div class="about-content">
            <h2>Tentang Kami</h2>
            <p>
                D’Delfar Bengkel Motor hadir sebagai solusi terpercaya untuk kebutuhan perawatan 
                dan perbaikan motor Anda. Dengan mekanik berpengalaman dan peralatan modern, 
                kami memberikan pelayanan cepat, aman, dan berkualitas.
            </p>
    
            <p>
                Kami menyediakan layanan service lengkap, sparepart original, sistem booking 
                online, serta konsultasi gratis untuk menjaga performa motor Anda tetap optimal.
            </p>
    
            <a href="#" class="about-btn">Pelajari Lebih Lanjut</a>
        </div>
    
        <div class="about-image">
            <img src="/images/bengkel1.jpeg" alt="Bengkel Motor">
        </div>
    </section>
    
    <footer class="footer">
        <div class="footer-container">
    
            <div class="footer-about">
                <h3>D'Delfar Bengkel Motor</h3>
                <p>
                    Bengkel terpercaya untuk perawatan, perbaikan, dan penyediaan sparepart 
                    motor dengan mekanik profesional dan pelayanan modern.
                </p>
    
                <div class="footer-info">
                    <p><strong>Alamat:</strong> Jl. Mekar Jaya No. 24, Depok, Jawa Barat</p>
                    <p><strong>Jam Operasional:</strong> 09:00 - 20:00 WIB</p>
                    <p><strong>Telepon:</strong> 0896-1234-5678</p>
                </div>
    
                <div class="footer-social">
                    <a href="#" class="social-icon">
                        <img src="/icons/facebook.svg" alt="Facebook">
                    </a>
                    <a href="#" class="social-icon">
                        <img src="/icons/instagram.svg" alt="Instagram">
                    </a>
                    <a href="#" class="social-icon">
                        <img src="/icons/whatsapp.svg" alt="WhatsApp">
                    </a>
                    <a href="#" class="social-icon">
                        <img src="/icons/twitter.svg" alt="Twitter">
                    </a>
                </div>
                
            </div>
    
            <div class="footer-maps">
                <h3>Lokasi Bengkel</h3>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2195552606027!2d106.81838727498642!3d-6.23580956104052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1ceeccbb5a1%3A0x87d57f075444ef98!2sDepok%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1700000000000"
                    width="100%" height="250" style="border:0; border-radius:12px;"
                    allowfullscreen="" loading="lazy">
                </iframe>
            </div>
    
        </div>
    
        <div class="footer-bottom">
            <p>© 2025 D'Delfar Bengkel Motor. All Rights Reserved.</p>
        </div>
    </footer>
    
</body>
</html>
