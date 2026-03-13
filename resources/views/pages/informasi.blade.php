@extends('layouts.app')

@section('title', 'Informasi - Samsat Ceria')

@section('meta_description', 'Informasi terbaru seputar pajak kendaraan bermotor, STNK, dan layanan Samsat Ceria.')
@section('og_title', 'Informasi - Samsat Ceria')
@section('og_description', 'Baca artikel dan informasi terbaru seputar layanan Samsat Ceria.')

@section('content')

    <x-breadcrumb :items="[['label' => 'Informasi', 'url' => route('informasi.index')]]" />

    {{-- DETAIL ARTIKEL --}}
    @if (isset($artikelDetail) && $artikelDetail && session('show_detail', true))
        <section class="detail-artikel animate-on-scroll" id="detail-artikel">
            <div class="container">

                {{-- Tombol Close --}}
                <div class="detail-close">
                    <a href="{{ route('informasi.close-detail') }}"
                        onclick="event.preventDefault(); document.getElementById('close-detail-form').submit();">
                        <i class="fas fa-times"></i>
                    </a>
                    <form id="close-detail-form" action="{{ route('informasi.close-detail') }}" method="GET"
                        style="display:none;"></form>
                </div>

                {{-- Konten --}}
                <div class="detail-content">
                    <div class="detail-image">
                        <img src="{{ asset($artikelDetail['gambar']) }}" alt="{{ $artikelDetail['judul'] }}" loading="lazy">
                    </div>
                    <div class="detail-text">
                        <h3>{{ $artikelDetail['judul'] }}</h3>

                        {{-- Sumber --}}
                        @if (!empty($artikelDetail['sumber']))
                            <p class="detail-sumber">
                                <i class="fas fa-newspaper"></i>
                                Sumber: <strong>{{ $artikelDetail['sumber'] }}</strong>
                            </p>
                        @endif

                        @if (isset($artikelDetail['deskripsi']) && is_array($artikelDetail['deskripsi']))
                            @foreach ($artikelDetail['deskripsi'] as $paragraf)
                                <p>{{ $paragraf }}</p>
                            @endforeach
                        @else
                            <p>{{ $artikelDetail['deskripsi'] ?? '' }}</p>
                        @endif

                        <p class="informasi-date">
                            <i class="far fa-calendar-alt"></i>
                            {{ \Carbon\Carbon::parse($artikelDetail['created_at'])->format('d M Y') }}
                        </p>

                        {{-- SHARE ARTIKEL --}}
                        <div class="share-artikel">
                            <p class="share-label">
                                <i class="fas fa-share-alt"></i>
                                Bagikan artikel ini:
                            </p>
                            <div class="share-buttons">
                                <a href="https://wa.me/?text={{ urlencode($artikelDetail['judul'] . ' - ' . url()->current() . '?slug=' . request('slug')) }}"
                                    target="_blank" class="share-btn share-wa">
                                    <i class="fab fa-whatsapp"></i>
                                    WhatsApp
                                </a>
                                <a href="https://twitter.com/intent/tweet?text={{ urlencode($artikelDetail['judul']) }}&url={{ urlencode(url()->current() . '?slug=' . request('slug')) }}"
                                    target="_blank" class="share-btn share-twitter">
                                    <i class="fab fa-x-twitter"></i>
                                    Twitter
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current() . '?slug=' . request('slug')) }}"
                                    target="_blank" class="share-btn share-fb">
                                    <i class="fab fa-facebook-f"></i>
                                    Facebook
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    @endif

    {{-- ARTIKEL TERKAIT --}}
    @if (isset($artikelTerkait) && count($artikelTerkait) > 0)
        <div class="container animate-on-scroll">
            <div class="artikel-terkait">
                <h4 class="artikel-terkait-title">
                    Artikel Terkait
                </h4>
                <div class="artikel-terkait-grid">
                    @foreach ($artikelTerkait as $terkait)
                        <a href="{{ route('informasi.index', ['slug' => $terkait['slug'] ?? '']) }}"
                            class="artikel-terkait-card">
                            <div class="artikel-terkait-image">
                                <img src="{{ asset($terkait['gambar'] ?? '') }}" alt="{{ $terkait['judul'] ?? '' }}"
                                    loading="lazy">
                            </div>
                            <div class="artikel-terkait-content">
                                @if (!empty($terkait['kategori']))
                                    <span class="artikel-terkait-kategori">
                                        {{ $terkait['kategori'] }}
                                    </span>
                                @endif
                                <h5>{{ Str::limit($terkait['judul'] ?? '', 60) }}</h5>
                                <p class="artikel-terkait-date">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ \Carbon\Carbon::parse($terkait['created_at'])->format('d M Y') }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    {{-- SEARCH --}}
    <section class="section-search animate-on-scroll">
        <div class="container">
            <form action="{{ route('informasi.index') }}" method="GET" class="search-form">
                <div class="search-input-wrapper">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" name="search" placeholder="Cari artikel..." value="{{ $search ?? '' }}"
                        class="search-input" autocomplete="off">
                    @if (!empty($search))
                        <a href="{{ route('informasi.index') }}" class="search-clear">
                            <i class="fas fa-times"></i>
                        </a>
                    @endif
                </div>
                <button type="submit" class="search-btn">
                    Cari
                </button>
            </form>

            @if (!empty($search))
                <p class="search-result-info">
                    Menampilkan hasil untuk: <strong>"{{ $search }}"</strong>
                    — {{ count($artikels) }} artikel ditemukan
                </p>
            @endif
        </div>
    </section>

    {{-- SECTION INFORMASI --}}
    <section class="section-informasi-list animate-on-scroll">
        <div class="container">

            <div class="section-header-left">
                <h2>Informasi Lainnya</h2>
            </div>

            @if (isset($artikels) && count($artikels) > 0)

                @php
                    $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                    $perPage = 6;
                    $totalPages = ceil(count($artikels) / $perPage);
                    $startIndex = ($currentPage - 1) * $perPage;
                    $paginatedArtikels = array_slice($artikels, $startIndex, $perPage);
                @endphp

                <div class="informasi-grid-list">
                    @foreach ($paginatedArtikels as $artikel)
                        <div class="informasi-card">
                            <div class="informasi-card-image">
                                <a href="{{ route('informasi.index', ['slug' => $artikel['slug']]) }}">
                                    <img src="{{ asset($artikel['gambar']) }}" alt="{{ $artikel['judul'] }}">
                                </a>
                            </div>
                            <div class="informasi-card-content">
                                <a href="{{ route('informasi.index', ['slug' => $artikel['slug']]) }}">
                                    <h3>{{ Str::limit($artikel['judul'], 50) }}</h3>
                                </a>
                                <p class="informasi-date">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ \Carbon\Carbon::parse($artikel['created_at'])->format('d M Y') }}
                                </p>
                                <div class="informasi-card-footer">
                                    <a href="{{ route('informasi.index', ['slug' => $artikel['slug']]) }}"
                                        class="link-more">
                                        Selengkapnya <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Pagination --}}
                @if ($totalPages > 1)
                    <div class="pagination">
                        @if ($currentPage > 1)
                            <a href="?page={{ $currentPage - 1 }}" class="pagination-btn">
                                <i class="fas fa-arrow-left"></i>
                            </a>
                        @else
                            <button class="pagination-btn disabled" disabled>
                                <i class="fas fa-arrow-left"></i>
                            </button>
                        @endif

                        @if ($currentPage < $totalPages)
                            <a href="?page={{ $currentPage + 1 }}" class="pagination-btn">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        @else
                            <button class="pagination-btn disabled" disabled>
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        @endif
                    </div>
                @endif
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

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('show_detail'))
                const detailSection = document.getElementById('detail-artikel');
                if (detailSection) {
                    setTimeout(() => {
                        detailSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }, 100);
                }
            @endif
        });
    </script>
@endpush
