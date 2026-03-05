{{-- SIDEBAR TUTORIAL --}}
<div class="tutorial-sidebar">

    {{-- Tombol Mobile --}}
    <button id="sidebar-mobile-button" class="sidebar-mobile-btn">
        <i class="fas fa-bars" id="sidebar-icon"></i>
    </button>

    {{-- Overlay --}}
    <div id="sidebar-overlay" class="sidebar-overlay"></div>

    {{-- Sidebar Konten --}}
    <div id="sidebar-content" class="sidebar-content">

        {{-- Header Mobile --}}
        <div class="sidebar-mobile-header">
            <h3>Tutorial</h3>
            <button id="sidebar-close-button" class="sidebar-close-btn">
                <i class="fas fa-times"></i>
            </button>
        </div>

        {{-- Header Desktop --}}
        <h3 class="sidebar-desktop-title">Tutorial</h3>

        {{-- Menu --}}
        <div class="sidebar-menu">

            {{-- Registrasi --}}
            <div class="sidebar-menu-item">
                <div class="sidebar-menu-header">
                    <span>Registrasi</span>
                    <button class="accordion-btn" data-target="submenu-registrasi">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div id="submenu-registrasi" class="sidebar-submenu">
                    {{-- Registrasi --}}
                    <a href="{{ route('tutorial.show', 'registrasi') }}#registrasi-pengguna"
                        class="sidebar-link">Registrasi Pengguna</a>
                    <a href="{{ route('tutorial.show', 'registrasi') }}#masuk-aplikasi" class="sidebar-link">Masuk
                        Aplikasi</a>
                    <a href="{{ route('tutorial.show', 'registrasi') }}#ubah-profil" class="sidebar-link">Ubah
                        Profil</a>
                </div>
            </div>

            {{-- STNK --}}
            <div class="sidebar-menu-item">
                <div class="sidebar-menu-header">
                    <span>STNK</span>
                    <button class="accordion-btn" data-target="submenu-stnk">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div id="submenu-stnk" class="sidebar-submenu">
                    {{-- STNK --}}
                    <a href="{{ route('tutorial.show', 'stnk') }}#tambah-kendaraan" class="sidebar-link">Tambah Data
                        Kendaraan</a>
                    <a href="{{ route('tutorial.show', 'stnk') }}#pengesahan-stnk" class="sidebar-link">Pengesahan
                        STNK</a>
                    <a href="{{ route('tutorial.show', 'stnk') }}#pengiriman-dokumen" class="sidebar-link">Proses
                        Pengiriman Dokumen</a>
                </div>
            </div>

            {{-- Pembayaran --}}
            <div class="sidebar-menu-item">
                <div class="sidebar-menu-header">
                    <span>Cara Pembayaran</span>
                    <button class="accordion-btn" data-target="submenu-pembayaran">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div id="submenu-pembayaran" class="sidebar-submenu">
                    {{-- Pembayaran --}}
                    <a href="{{ route('tutorial.show', 'pembayaran') }}#cara-pembayaran" class="sidebar-link">Cara
                        Pembayaran Dokumen</a>
                    <a href="{{ route('tutorial.show', 'pembayaran') }}#status-transaksi" class="sidebar-link">Halaman
                        Status Transaksi</a>
                    <a href="{{ route('tutorial.show', 'pembayaran') }}#status-pengiriman" class="sidebar-link">Halaman
                        Status Pengiriman</a>
                </div>
            </div>

            {{-- Dokumen Digital --}}
            <div class="sidebar-menu-item">
                <div class="sidebar-menu-header">
                    <span>Dokumen Digital</span>
                    <button class="accordion-btn" data-target="submenu-digital">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div id="submenu-digital" class="sidebar-submenu">
                    {{-- Dokumen Digital --}}
                    <a href="{{ route('tutorial.show', 'dokumen-digital') }}#e-tbpkb" class="sidebar-link">Penerbitan
                        E-TBPKB</a>
                    <a href="{{ route('tutorial.show', 'dokumen-digital') }}#e-pengesahan"
                        class="sidebar-link">Penerbitan E-Pengesahan</a>
                    <a href="{{ route('tutorial.show', 'dokumen-digital') }}#e-kd" class="sidebar-link">Penerbitan
                        E-KD</a>
                </div>
            </div>

        </div>

        {{-- Bantuan --}}
        <div class="sidebar-help">
            <h4><i class="fas fa-headset"></i> Butuh Bantuan?</h4>
            <a href="{{ route('hubungi-kami.index') }}" class="sidebar-help-link">
                Hubungi Support
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>

    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            {{-- Sidebar Mobile --}}
            const sidebarContent = document.getElementById('sidebar-content');
            const sidebarOverlay = document.getElementById('sidebar-overlay');
            const mobileButton = document.getElementById('sidebar-mobile-button');
            const closeButton = document.getElementById('sidebar-close-button');
            const sidebarIcon = document.getElementById('sidebar-icon');

            function bukaSidebar() {
                sidebarContent.classList.add('active');
                sidebarOverlay.classList.add('active');
                sidebarIcon?.classList.replace('fa-bars', 'fa-times');
            }

            function tutupSidebar() {
                sidebarContent.classList.remove('active');
                sidebarOverlay.classList.remove('active');
                sidebarIcon?.classList.replace('fa-times', 'fa-bars');
            }

            mobileButton?.addEventListener('click', bukaSidebar);
            closeButton?.addEventListener('click', tutupSidebar);
            sidebarOverlay?.addEventListener('click', tutupSidebar);
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') tutupSidebar();
            });

            {{-- Accordion --}}
            document.querySelectorAll('.accordion-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    const submenu = document.getElementById(this.getAttribute('data-target'));
                    const icon = this.querySelector('.fa-chevron-down');
                    if (!submenu) return;

                    const isHidden = submenu.classList.contains('hidden');
                    submenu.classList.toggle('hidden', !isHidden);
                    icon.style.transform = isHidden ? 'rotate(180deg)' : 'rotate(0deg)';
                    this.classList.toggle('active', isHidden);
                });
            });

        });
    </script>
@endpush
