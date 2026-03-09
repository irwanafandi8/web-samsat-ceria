@extends('layouts.app')

@section('title', 'Mengenai - Samsat Ceria')

@section('content')

    <x-breadcrumb :items="[['label' => 'Mengenai Samsat Ceria', 'url' => route('mengenai-samsat.index')]]" />

    {{-- CONTENT MENGENAI --}}
    <section class="section-mengenai animate-on-scroll">
        <div class="container">

            {{-- Tombol Kembali --}}
            <div class="mengenai-back">
                <a href="{{ route('home') }}" class="back-btn">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>

            {{-- Judul --}}
            <div class="mengenai-header">
                <h1>Aplikasi Samsat Ceria</h1>
            </div>

            {{-- Konten --}}
            <div class="mengenai-inner">

                {{-- Deskripsi --}}
                <div class="mengenai-text">
                    <p>Aplikasi Samsat Ceria merupakan layanan digital untuk pengesahan STNK tahunan, pembayaran Pajak
                        Kendaraan (PK), serta pembayaran Sumbangan Wajib Dana Kecelakaan Lalu Lintas Jalan (SWDKLLJ).</p>
                    <p>Secara digital, aplikasi ini memanfaatkan basis data kendaraan yang dikelola oleh Polri, basis data
                        kependudukan yang berada pada Direktorat Jenderal Dukcapil Kementerian Dalam Negeri, serta sistem
                        informasi pajak kendaraan yang dikelola oleh masing-masing Badan Pendapatan Daerah (Bapenda)
                        Provinsi.</p>
                    <p>Seluruh data tersebut diintegrasikan secara nasional dalam satu sistem berbasis kecerdasan buatan
                        (Artificial Intelligence atau AI) melalui aplikasi berbasis mobile platform.</p>
                    <p>Sistem ini dirancang untuk menyelenggarakan pelayanan publik secara digital sekaligus mengakomodasi
                        kepentingan berbagai pihak terkait, seperti Bapenda, Jasa Raharja, dan Bank Pembangunan Daerah,
                        tanpa mengesampingkan fungsi pengawasan registrasi dan identifikasi kepemilikan kendaraan yang
                        menjadi salah satu tugas utama Polri.</p>
                    <p>Sistem pada aplikasi Samsat Ceria memungkinkan dilakukannya verifikasi identitas pemilik kendaraan
                        melalui proses pencocokan wajah (face matching) yang disesuaikan dengan data KTP elektronik yang
                        tercatat di Kementerian Dalam Negeri.</p>
                </div>

                {{-- App & Download --}}
                <div class="mengenai-app">
                    <img src="{{ asset('assets/images/samsat-ceria-app.png') }}" alt="Samsat Ceria Mobile App"
                        loading="lazy">
                    <p>Unduh Aplikasi Samsat Ceria di Smartphone Anda Sekarang melalui Google Play.</p>
                    <a href="#" class="download-btn-store">
                        <img src="{{ asset('assets/images/download-playstore.png') }}" alt="Download di Google Play">
                    </a>
                </div>

            </div>
        </div>
    </section>

@endsection
