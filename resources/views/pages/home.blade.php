@extends('layouts.app')

@section('title', 'Beranda - Samsat Ceria')

@section('meta_description', 'Samsat Ceria - Solusi Cepat Bayar Pajak Kendaraan. Bayar pajak STNK online kapan saja dan di mana saja. Praktis, Ringkas, dan Aman.')
@section('og_title', 'Beranda - Samsat Ceria')
@section('og_description', 'Bayar pajak kendaraan online kapan saja. Praktis, Ringkas, dan Aman bersama Samsat Ceria.')

@section('content')

    {{-- HERO SECTION --}}
    <section class="section-hero hero-bg animate-on-scroll"
        style="background-image: url('{{ asset('assets/images/banner/Banner.jpg') }}')" id="hero-section">
        <div class="container-hero">
            <div class="hero-inner">

                {{-- Logo --}}
                <div class="hero-logo">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Samsat Ceria">
                </div>

                {{-- Tagline --}}
                <div class="hero-text">
                    <h2 class="hero-title">
                        Praktis Kapan Pun,
                        <span>Di Mana Pun,</span>
                        Semua Layanan Tersedia!
                    </h2>
                    <p class="hero-desc">
                        "Dengan Samsat Ceria, bayar pajak kendaraan sekarang bisa kapan saja, tanpa ribet, dan tetap aman."
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- SECTION DOWNLOAD APP --}}
    <section class="section-download animate-on-scroll" id="download-section">
        <div class="container">
            <div class="download-inner">

                {{-- Teks --}}
                <div class="download-text">
                    <h1 class="section-title">
                        Akses Layanan Kendaraan<br>
                        Lebih Mudah di Aplikasi Samsat Ceria
                    </h1>
                    <p class="section-desc">
                        Unduh Aplikasi Samsat Ceria di Smartphone Anda Sekarang melalui Google Play.
                    </p>
                    <div class="download-buttons">
                        <a href="#" class="download-btn">
                            <img src="{{ asset('assets/images/download-appstore.png') }}" alt="Download di App Store" loading="lazy">
                        </a>
                        <a href="#" class="download-btn">
                            <img src="{{ asset('assets/images/download-playstore.png') }}" alt="Download di Google Play" loading="lazy">
                        </a>
                    </div>
                </div>

                {{-- Gambar App --}}
                <div class="download-mockup">
                    <div class="mockup-app">
                        <img src="{{ asset('assets/images/samsat-ceria-app.png') }}" alt="Samsat Ceria App" loading="lazy">
                    </div>
                    <div class="mockup-ellipse mockup-ellipse-1">
                        <img src="{{ asset('assets/images/ellipse-bg.png') }}" alt="" loading="lazy">
                    </div>
                    <div class="mockup-ellipse mockup-ellipse-2">
                        <img src="{{ asset('assets/images/ellipse-bg.png') }}" alt="" loading="lazy">
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- SECTION TENTANG APLIKASI --}}
    <section class="section-about animate-on-scroll" id="informasiApp-section">
        <div class="container">
            <div class="about-inner">

                {{-- Gambar --}}
                <div class="about-image">
                    <img src="{{ asset('assets/images/pngwing.png') }}" alt="Aplikasi Samsat Ceria" loading="lazy">
                </div>

                {{-- Teks --}}
                <div class="about-text">
                    <h1 class="section-title">Apa itu Aplikasi Samsat Ceria?</h1>
                    <p class="section-desc">
                        Samsat Ceria adalah aplikasi digital untuk pengesahan STNK dan pembayaran pajak
                        kendaraan yang terintegrasi secara nasional, menggunakan AI dan verifikasi wajah
                        berbasis data e-KTP.
                    </p>
                    <a href="{{ route('mengenai-samsat.index') }}" class="link-more">
                        Klik Untuk Informasi Selengkapnya
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- SECTION TUTORIAL --}}
    <section class="section-tutorial animate-on-scroll" id="tutorial-section">
        <div class="container">
            <div class="tutorial-inner">

                {{-- Header --}}
                <div class="tutorial-header">
                    <h2 class="section-title">
                        Tutorial Menggunakan<br>Samsat Ceria
                    </h2>
                </div>

                {{-- Daftar Tutorial --}}
                <div class="tutorial-list">

                    <a href="{{ route('tutorial.show', 'registrasi') }}" class="tutorial-item">
                        <div class="tutorial-item-left">
                            <img src="{{ asset('assets/images/tutorial/icon-tutor-1.png') }}" alt="Registrasi" loading="lazy">
                            <span>Cara Mendaftarkan Akun Samsat Ceria</span>
                        </div>
                        <i class="fas fa-arrow-right"></i>
                    </a>

                    <a href="{{ route('tutorial.show', 'pembayaran') }}" class="tutorial-item">
                        <div class="tutorial-item-left">
                            <img src="{{ asset('assets/images/tutorial/icon-tutor-2.png') }}" alt="Pembayaran" loading="lazy">
                            <span>Cara Melakukan Pembayaran</span>
                        </div>
                        <i class="fas fa-arrow-right"></i>
                    </a>

                    <a href="{{ route('tutorial.show', 'stnk') }}" class="tutorial-item">
                        <div class="tutorial-item-left">
                            <img src="{{ asset('assets/images/tutorial/icon-tutor-3.png') }}" alt="STNK" loading="lazy">
                            <span>Cara Mendaftarkan Kendaraan</span>
                        </div>
                        <i class="fas fa-arrow-right"></i>
                    </a>

                </div>

            </div>
        </div>
    </section>

    {{-- SECTION INFORMASI --}}
    <section class="section-informasi animate-on-scroll" id="informasi-section">
        <div class="container-informasi-home">

            <div class="section-header-center">
                <h3 class="section-title">Informasi</h3>
            </div>

            @if (isset($artikels) && count($artikels) > 0)

                <div class="informasi-grid">
                    @foreach ($artikels as $artikel)
                        <div class="informasi-card-home">
                            <div class="informasi-card-home-image">
                                <a href="{{ route('informasi.index', ['slug' => $artikel['slug']]) }}">
                                    <img src="{{ asset($artikel['gambar']) }}" alt="{{ $artikel['judul'] }}">
                                </a>
                            </div>
                            <div class="informasi-card-home-content">
                                <a href="{{ route('informasi.index', ['slug' => $artikel['slug']]) }}">
                                    <h3>{{ Str::limit($artikel['judul'], 50) }}</h3>
                                </a>
                                <p class="informasi-date-home">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ \Carbon\Carbon::parse($artikel['datetime'])->format('d M Y') }}
                                </p>
                                <div class="informasi-card-home-footer">
                                    <a href="{{ route('informasi.index', ['slug' => $artikel['slug']]) }}"
                                        class="link-more">
                                        Selengkapnya <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="section-btn-center">
                    <a href="{{ route('informasi.index') }}" class="btn-primary-red">
                        Informasi Lainnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            @else
                <div class="empty-state">
                    <div class="empty-state-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h3>Belum Ada Informasi</h3>
                    <p>Saat ini belum ada informasi terbaru. Silakan kunjungi kembali nanti.</p>
                </div>
            @endif

        </div>
    </section>

@endsection
