<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO Basic --}}
    <meta name="description" content="@yield('meta_description', 'Samsat Ceria - Solusi Cepat Bayar Pajak Kendaraan. Praktis, Ringkas, dan Aman langsung dari smartphone Anda.')">
    <meta name="keywords" content="@yield('meta_keywords', 'samsat ceria, bayar pajak kendaraan, STNK online, pajak kendaraan bermotor, samsat online')">
    <meta name="author" content="Samsat Ceria">
    <meta name="robots" content="index, follow">

    {{-- Open Graph (WhatsApp, Facebook) --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Samsat Ceria">
    <meta property="og:title" content="@yield('og_title', 'Samsat Ceria - Solusi Cepat Bayar Pajak Kendaraan')">
    <meta property="og:description" content="@yield('og_description', 'Bayar pajak kendaraan kapan saja dan di mana saja. Praktis, Ringkas, dan Aman.')">
    <meta property="og:image" content="@yield('og_image', asset('assets/images/logo.png'))">
    <meta property="og:url" content="{{ url()->current() }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Samsat Ceria - Solusi Cepat Bayar Pajak Kendaraan')">
    <meta name="twitter:description" content="@yield('og_description', 'Bayar pajak kendaraan kapan saja dan di mana saja.')">
    <meta name="twitter:image" content="@yield('og_image', asset('assets/images/logo.png'))">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon-180x180.png') }}">

    <title>@yield('title', 'Samsat Ceria')</title>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Back to Top
        const backToTop = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });

    // Loading Screen
    window.addEventListener('load', function() {
        const loadingScreen = document.getElementById('loadingScreen');
        setTimeout(() => {
            loadingScreen.classList.add('hidden');
        }, 800);
    });
</script>

{{-- Back to Top --}}
<button id="backToTop" class="back-to-top" title="Kembali ke atas">
    <i class="fas fa-arrow-up"></i>
</button>

<body class="min-h-screen flex flex-col">

    {{-- Loading Screen --}}
    <div id="loadingScreen" class="loading-screen">
        <div class="loading-inner">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Samsat Ceria" class="loading-logo">
            <div class="loading-dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <p class="loading-text">Memuat halaman...</p>
        </div>
    </div>

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Konten --}}
    <main class="main-content">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    {{-- Scripts --}}
    @stack('scripts')

</body>

</html>
