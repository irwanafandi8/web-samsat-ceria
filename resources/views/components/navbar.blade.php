<header id="main-header">
    <nav class="nav-container">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="nav-logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Samsat Ceria">
        </a>

        {{-- Desktop Menu --}}
        <ul class="nav-menu">
            <li>
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active-nav' : '' }}">
                    Beranda
                </a>
            </li>
            <li>
                <a href="#tutorial-section"
                    class="nav-link {{ request()->routeIs('tutorial.*') ? 'active-nav' : '' }}">
                    Tutorial
                </a>
            </li>
            <li>
                <a href="#informasi-section"
                    class="nav-link {{ request()->routeIs('informasi.*') ? 'active-nav' : '' }}">
                    Informasi
                </a>
            </li>
            <li>
                <a href="{{ route("hubungi-kami.index") }}"
                    class="nav-link {{ request()->routeIs('hubungi-kami.*') ? 'active-nav' : '' }}">
                    Hubungi Kami
                </a>
            </li>
        </ul>

        {{-- Mobile Button --}}
        <button id="mobile-menu-button" class="nav-mobile-btn">
            <i class="fas fa-bars" id="sidebar-icon"></i>
        </button>

    </nav>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="nav-mobile-menu hidden">
        <ul class="mobile-menu-list">
            <li class="mobile-menu-item">
                <a href="{{ route('home') }}"
                    class="mobile-nav-link {{ request()->routeIs('home') ? 'active-mobile-nav' : '' }}">
                    Beranda
                </a>
            </li>
            <li class="mobile-menu-item">
                <a href="{{ route('tutorial.index') }}"
                    class="mobile-nav-link {{ request()->routeIs('tutorial.*') ? 'active-mobile-nav' : '' }}">
                    Tutorial
                </a>
            </li>
            <li class="mobile-menu-item">
                <a href="{{ route('informasi.index') }}"
                    class="mobile-nav-link {{ request()->routeIs('informasi.*') ? 'active-mobile-nav' : '' }}">
                    Informasi
                </a>
            </li>
            <li class="mobile-menu-item">
                <a href="{{ route('hubungi-kami.index') }}"
                    class="mobile-nav-link {{ request()->routeIs('hubungi-kami.*') ? 'active-mobile-nav' : '' }}">
                    Hubungi Kami
                </a>
            </li>
        </ul>
    </div>
</header>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const icon = mobileMenuButton?.querySelector('i');

            function toggleMenu(open) {
                mobileMenu.classList.toggle('hidden', !open);
                icon?.classList.toggle('fa-bars', !open);
                icon?.classList.toggle('fa-times', open);
            }

            mobileMenuButton?.addEventListener('click', (e) => {
                e.stopPropagation();
                toggleMenu(mobileMenu.classList.contains('hidden'));
            });

            document.addEventListener('click', (e) => {
                if (!mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                    toggleMenu(false);
                }
            });

            {{-- Header scroll effect --}}
            const header = document.getElementById('main-header');
            const isHomePage = {{ request()->routeIs('home') ? 'true' : 'false' }};

            function checkScroll() {
                if (isHomePage) {
                    header.classList.toggle('header-scrolled', window.scrollY > 50);
                } else {
                    header.classList.add('header-scrolled');
                }
            }

            window.addEventListener('scroll', checkScroll);
            checkScroll();
        });
    </script>
@endpush
