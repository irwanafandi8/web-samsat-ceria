<footer class="footer">
    <div class="container">
        <div class="footer-grid">

            {{-- Kolom 1: Logo & Tagline --}}
            <div class="footer-brand">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Samsat Ceria" class="footer-logo">
                <p class="footer-tagline">
                    Praktis Kapan Pun,<br>
                    Di Mana Pun,<br>
                    Semua Layanan Tersedia!
                </p>
            </div>

            {{-- Kolom 2: Link --}}
            <div class="footer-links">
                <h6 class="footer-heading">Lainnya</h6>
                <ul>
                    <li><a href="{{ route('home') }}" class="footer-link">Beranda</a></li>
                    <li><a href="{{ route('mengenai-samsat.index') }}" class="footer-link">Mengenai Samsat Ceria</a>
                    </li>
                    <li><a href="{{ route('faq.index') }}" class="footer-link">FAQ</a></li>
                    <li><a href="{{ route('informasi.index') }}" class="footer-link">Informasi</a></li>
                    <li><a href="{{ route('tutorial.index') }}" class="footer-link">Tutorial</a></li>
                    <li><a href="{{ route('hubungi-kami.index') }}" class="footer-link">Hubungi Kami</a></li>
                </ul>
            </div>

            {{-- Kolom 3: Social Media --}}
            <div class="footer-social-icons">
                <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-btn">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-btn">
                    <i class="fab fa-x-twitter"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-btn">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-btn">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-btn">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>

        </div>

        {{-- Copyright --}}
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Samsat Ceria. Semua hak dilindungi. &nbsp;|&nbsp; Cepat • Ringkas • Aman</p>
        </div>
    </div>
</footer>
