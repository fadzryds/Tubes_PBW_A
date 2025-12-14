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
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('sparepart') }}">Sparepart</a>
            <a href="{{ url('service') }}">Service</a>
            <a href="{{ url('/') }}">About</a>
        </nav>
    
        <div class="auth-buttons">
            <a href="#" class="btn-register">Register</a>
            <a href="#" class="btn-login">Log in</a>
        </div>
    </header>

    <section class="service-section" id="sparepart">
        <div class="service-header">
        <h2>Sparepart</h2>
        <a href="{{ url('/') }}" class="btn-next">Kembali</a>
        </div>
    
        <div class="service-grid">
    <div class="service-card">
        <img src="/images/oli.jpeg" alt="Oli Mesin">
        <h3>Oli Mesin</h3>
        <p>Kualitas terbaik untuk menjaga performa motor.</p>
        <p class="price">Rp. 2.000.000</p>
        <a href="{{ route('sparepart.show', 1) }}" class="btn-book">Booking</a>
    </div>

    <div class="service-card">
        <img src="/images/aki.jpeg" alt="Aki Motor">
        <h3>Aki Motor</h3>
        <p>Daya tahan lama dan aman digunakan.</p>
        <p class="price">Rp. 2.000.000</p>
        <a href="{{ route('sparepart.show', 2) }}" class="btn-book">Booking</a>
    </div>

    <div class="service-card">
        <img src="/images/kampas.jpg" alt="Kampas Rem">
        <h3>Kampas Rem</h3>
        <p>Memberikan pengereman yang optimal.</p>
        <p class="price">Rp. 2.000.000</p>
        <a href="{{ route('sparepart.show', 3) }}" class="btn-book">Booking</a>
    </div>

    <div class="service-card">
        <img src="/images/v-belt.jpeg" alt="V-Belt Motor">
        <h3>V-Belt Motor</h3>
        <p>Kuat dan tahan lama untuk motor matic.</p>
        <p class="price">Rp. 2.000.000</p>
        <a href="{{ route('sparepart.show', 4) }}" class="btn-book">Booking</a>
    </div>

    <div class="service-card">
        <img src="/images/oli.jpeg" alt="Oli Mesin">
        <h3>Oli Mesin</h3>
        <p>Kualitas terbaik untuk menjaga performa motor.</p>
        <p class="price">Rp. 2.000.000</p>
        <a href="{{ route('sparepart.show', 5) }}" class="btn-book">Booking</a>
    </div>

    <div class="service-card">
        <img src="/images/aki.jpeg" alt="Aki Motor">
        <h3>Aki Motor</h3>
        <p>Daya tahan lama dan aman digunakan.</p>
        <p class="price">Rp. 2.000.000</p>
        <a href="{{ route('sparepart.show', 6) }}" class="btn-book">Booking</a>
    </div>

    <div class="service-card">
        <img src="/images/kampas.jpg" alt="Kampas Rem">
        <h3>Kampas Rem</h3>
        <p>Memberikan pengereman yang optimal.</p>
        <p class="price">Rp. 2.000.000</p>
        <a href="{{ route('sparepart.show', 7) }}" class="btn-book">Booking</a>
    </div>

    <div class="service-card">
        <img src="/images/v-belt.jpeg" alt="V-Belt Motor">
        <h3>V-Belt Motor</h3>
        <p>Kuat dan tahan lama untuk motor matic.</p>
        <p class="price">Rp. 2.000.000</p>
        <a href="{{ route('sparepart.show', 8) }}" class="btn-book">Booking</a>
    </div>

    <div class="service-card">
        <img src="/images/oli.jpeg" alt="Oli Mesin">
        <h3>Oli Mesin</h3>
        <p>Kualitas terbaik untuk menjaga performa motor.</p>
        <p class="price">Rp. 2.000.000</p>
        <a href="{{ route('sparepart.show', 9) }}" class="btn-book">Booking</a>
    </div>

    <div class="service-card">
        <img src="/images/aki.jpeg" alt="Aki Motor">
        <h3>Aki Motor</h3>
        <p>Daya tahan lama dan aman digunakan.</p>
        <p class="price">Rp. 2.000.000</p>
        <a href="{{ route('sparepart.show', 10) }}" class="btn-book">Booking</a>
    </div>

    <div class="service-card">
        <img src="/images/kampas.jpg" alt="Kampas Rem">
        <h3>Kampas Rem</h3>
        <p>Memberikan pengereman yang optimal.</p>
        <p class="price">Rp. 2.000.000</p>
        <a href="{{ route('sparepart.show', 11) }}" class="btn-book">Booking</a>
    </div>

    <div class="service-card">
        <img src="/images/v-belt.jpeg" alt="V-Belt Motor">
        <h3>V-Belt Motor</h3>
        <p>Kuat dan tahan lama untuk motor matic.</p>
        <p class="price">Rp. 2.000.000</p>
        <a href="{{ route('sparepart.show', 12) }}" class="btn-book">Booking</a>
    </div>
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