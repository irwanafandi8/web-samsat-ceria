@extends('layouts.app')

@section('title', 'Informasi - Samsat Ceria')

@section('content')

    {{-- DETAIL ARTIKEL --}}
    @if (isset($artikelDetail) && $artikelDetail && session('show_detail', true))
        <section class="detail-artikel" id="detail-artikel">
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
                    </div>
                </div>

            </div>
        </section>
    @endif

    {{-- SECTION INFORMASI --}}
    <section class="section-informasi-list">
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
                                    {{ \Carbon\Carbon::parse($artikel['datetime'])->format('d M Y') }}
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
