<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>D'Delfar Bengkel Motor</title>
    
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    </head>
    
<body>
    <nav class="navbar">
        <div class="logo">D'Delfar</div>
        
        <div class="hamburger" id="hamburgerBtn">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="nav-menu">
            <a href="/">Home</a>
            <a href="/sparepart">Sparepart</a>
            <a href="/service">Service</a>
            <a href="/about">About</a>
        </div>
    
        @auth
        <div class="profile-wrapper">
            <img src="{{ asset('storage/' . auth()->user()->foto) }}"
                 class="nav-avatar"
                 id="avatarToggle">
    
            <!-- Dropdown Profile -->
            <div class="dropdown-profile" id="dropdownProfile">
                <div class="profile-header">
                    <img src="{{ asset('storage/' . auth()->user()->foto) }}" class="profile-photo">
                    <div>
                        <strong>{{ auth()->user()->nama }}</strong><br>
                        <small>{{ auth()->user()->email }}</small>
                    </div>
                </div>
    
                <div class="dropdown-divider"></div>
    
                <a href="/profile" class="btn-edit">Lihat Profile</a>
    
                @if(auth()->user()->role !== 'user')
                    <a href="{{ route('filament.admin.pages.dashboard') }}" class="btn-admin">Admin Panel</a>
                @endif
    
                <div class="dropdown-divider"></div>
    
                <!-- Dark / Light Mode Switch -->
                <div class="theme-switch">
                    <span>Dark Mode</span>
                    <label class="switch">
                        <input type="checkbox" id="themeToggle">
                        <span class="slider round"></span>
                    </label>
                </div>
    
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn-logout">Logout</button>
                </form>
            </div>
        </div>
        @endauth
    
        @guest
            <div class="auth-buttons">
                <a href="/register" class="btn-register">Register</a>
                <a href="/login" class="btn-login">Login</a>
            </div>
        @endguest
    </nav>
    
    <!-- Mobile Dropdown Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="/">Home</a>
        <a href="/sparepart">Sparepart</a>
        <a href="/service">Service</a>
        <a href="/about">About</a>
    
        {{-- IF USER NOT LOGGED IN --}}
        @guest
            <div class="mobile-auth-buttons">
                <a href="/login" class="mobile-btn-login">Login</a>
                <a href="/register" class="mobile-btn-register">Register</a>
            </div>
        @endguest
    
        {{-- IF USER LOGGED IN --}}
        @auth
            <div class="mobile-profile">
                <img src="{{ asset('storage/' . auth()->user()->foto) }}" 
                     class="nav-avatar" id="mobileAvatarToggle">
    
                <div class="mobile-profile-dropdown" id="mobileProfileDropdown">
                    <div class="profile-header">
                        <img src="{{ asset('storage/' . auth()->user()->foto) }}" 
                             class="profile-photo">
                        <div>
                            <strong>{{ auth()->user()->nama }}</strong><br>
                            <small>{{ auth()->user()->email }}</small>
                        </div>
                    </div>
    
                    <div class="dropdown-divider"></div>
    
                    <a href="{{ route('profile') }}" class="btn-edit">Lihat Profile</a>
    
                    @if(auth()->user()->role !== 'user')
                        <a href="{{ route('filament.admin.pages.dashboard') }}" class="btn-admin">
                            Admin Panel
                        </a>
                    @endif
    
                    <div class="dropdown-divider"></div>
    
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn-logout">Logout</button>
                    </form>
                </div>
            </div>
        @endauth
    </div>
    
    <main>
        @yield('content')
    </main>

    <script>
        /* ================================
           HAMBURGER TOGGLE
        ================================ */
        const hamburger = document.getElementById("hamburgerBtn");
        const mobileMenu = document.getElementById("mobileMenu");
        
        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active");
            mobileMenu.classList.toggle("show");
        });
        
        /* CLOSE WHEN CLICK OUTSIDE */
        document.addEventListener("click", function(e){
            if (!hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
                mobileMenu.classList.remove("show");
                hamburger.classList.remove("active");
            }
        });
        
        /* ================================
           PROFILE DROPDOWN (DESKTOP)
        ================================ */
        const avatar = document.getElementById("avatarToggle");
        const dropdown = document.getElementById("dropdownProfile");
        
        if (avatar) {
            avatar.addEventListener("click", () => {
                dropdown.style.display =
                    dropdown.style.display === "block" ? "none" : "block";
            });
        }
        
        document.addEventListener("click", function(e) {
            if (avatar && !avatar.contains(e.target) && !dropdown.contains(e.target)) {
                dropdown.style.display = "none";
            }
        });
        
        /* ================================
           PROFILE DROPDOWN (MOBILE)
        ================================ */
        const mobileAvatar = document.getElementById("mobileAvatarToggle");
        const mobileProfileDropdown = document.getElementById("mobileProfileDropdown");
        
        if (mobileAvatar) {
            mobileAvatar.addEventListener("click", () => {
                mobileProfileDropdown.classList.toggle("show");
            });
        }
        
        document.addEventListener("click", function(e) {
            if (
                mobileAvatar &&
                !mobileAvatar.contains(e.target) &&
                !mobileProfileDropdown.contains(e.target)
            ) {
                mobileProfileDropdown.classList.remove("show");
            }
        });
        </script>
</body>
</html>