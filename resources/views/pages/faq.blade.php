@extends('layouts.app')

@section('title', 'FAQ - Samsat Ceria')

@section('meta_description', 'Temukan jawaban atas pertanyaan seputar Samsat Ceria. FAQ lengkap tentang registrasi,
    pembayaran pajak, dan dokumen digital.')
@section('meta_keywords', 'FAQ samsat ceria, pertanyaan samsat, bantuan samsat ceria')
@section('og_title', 'FAQ - Samsat Ceria')
@section('og_description', 'Temukan jawaban atas pertanyaan yang sering ditanyakan seputar Samsat Ceria.')

@section('content')

    <x-breadcrumb :items="[['label' => 'FAQ', 'url' => route('faq.index')]]" />

    {{-- PAGE HEADER --}}
    <section class="page-header animate-on-scroll">
        <div class="container">
            <div class="page-header-inner">
                <h1>Frequently Asked Questions</h1>
                <p>Temukan jawaban atas pertanyaan yang sering ditanyakan seputar Samsat Ceria</p>
            </div>
        </div>
    </section>

    {{-- FAQ CONTENT --}}
    <section class="section-faq animate-on-scroll">
        <div class="container-faq">

            {{-- Search --}}
            <div class="faq-search">
                <div class="faq-search-inner">
                    <i class="fas fa-search"></i>
                    <input type="text" id="faqSearch" placeholder="Cari pertanyaan...">
                </div>
            </div>

            {{-- Kategori Tab --}}
            <div class="faq-tabs">
                <button class="faq-tab active" data-kategori="semua">Semua</button>
                @foreach ($faqs as $i => $group)
                    <button class="faq-tab" data-kategori="{{ $i }}">
                        <i class="{{ $group['icon'] }}"></i>
                        {{ $group['kategori'] }}
                    </button>
                @endforeach
            </div>

            {{-- FAQ Groups --}}
            <div class="faq-groups" id="faqGroups">
                @foreach ($faqs as $i => $group)
                    <div class="faq-group" data-group="{{ $i }}">

                        {{-- Group Header --}}
                        <div class="faq-group-header">
                            <div class="faq-group-icon">
                                <i class="{{ $group['icon'] }}"></i>
                            </div>
                            <h2>{{ $group['kategori'] }}</h2>
                        </div>

                        {{-- Accordion Items --}}
                        <div class="faq-list">
                            @foreach ($group['faqs'] as $j => $faq)
                                <div class="faq-item" data-pertanyaan="{{ strtolower($faq['pertanyaan']) }}">
                                    <button class="faq-question" data-index="{{ $i }}-{{ $j }}">
                                        <span>{{ $faq['pertanyaan'] }}</span>
                                        <i class="fas fa-chevron-down faq-chevron"></i>
                                    </button>
                                    <div class="faq-answer" id="faq-{{ $i }}-{{ $j }}">
                                        <p>{{ $faq['jawaban'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                @endforeach

                {{-- Empty State Search --}}
                <div class="faq-empty" id="faqEmpty" style="display: none;">
                    <div class="empty-state-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Pertanyaan tidak ditemukan</h3>
                    <p>Coba gunakan kata kunci lain atau hubungi tim support kami.</p>
                    <a href="{{ route('hubungi-kami.index') }}" class="btn-primary-red">
                        Hubungi Kami
                    </a>
                </div>
            </div>

            {{-- CTA --}}
            <div class="faq-cta">
                <div class="faq-cta-inner">
                    <div class="faq-cta-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="faq-cta-text">
                        <h3>Masih punya pertanyaan?</h3>
                        <p>Tim support kami siap membantu Anda 24/7</p>
                    </div>
                    <a href="{{ route('hubungi-kami.index') }}" class="btn-primary-red">
                        Hubungi Kami
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // ACCORDION
            document.querySelectorAll('.faq-question').forEach(btn => {
                btn.addEventListener('click', function() {
                    const index = this.getAttribute('data-index');
                    const answer = document.getElementById('faq-' + index);
                    const chevron = this.querySelector('.faq-chevron');
                    const isOpen = this.classList.contains('active');

                    // Tutup semua
                    document.querySelectorAll('.faq-question').forEach(b => {
                        b.classList.remove('active');
                        b.querySelector('.faq-chevron').style.transform = 'rotate(0deg)';
                    });
                    document.querySelectorAll('.faq-answer').forEach(a => {
                        a.style.maxHeight = '0';
                        a.style.padding = '0 1.5rem';
                    });

                    // Buka yang diklik
                    if (!isOpen) {
                        this.classList.add('active');
                        chevron.style.transform = 'rotate(180deg)';
                        answer.style.maxHeight = answer.scrollHeight + 40 + 'px';
                        answer.style.padding = '1rem 1.5rem';
                    }
                });
            });

            // TAB FILTER
            document.querySelectorAll('.faq-tab').forEach(tab => {
                tab.addEventListener('click', function() {
                    document.querySelectorAll('.faq-tab').forEach(t => t.classList.remove(
                        'active'));
                    this.classList.add('active');

                    const kategori = this.getAttribute('data-kategori');

                    document.querySelectorAll('.faq-group').forEach(group => {
                        if (kategori === 'semua') {
                            group.style.display = 'block';
                        } else {
                            group.style.display = group.getAttribute('data-group') ===
                                kategori ? 'block' : 'none';
                        }
                    });

                    // Reset search
                    document.getElementById('faqSearch').value = '';
                    document.querySelectorAll('.faq-item').forEach(item => item.style.display =
                        'block');
                    document.getElementById('faqEmpty').style.display = 'none';
                });
            });

            // SEARCH
            document.getElementById('faqSearch').addEventListener('input', function() {
                const keyword = this.value.toLowerCase().trim();
                let totalVisible = 0;

                // Reset tab
                document.querySelectorAll('.faq-tab').forEach(t => t.classList.remove('active'));
                document.querySelector('.faq-tab[data-kategori="semua"]').classList.add('active');
                document.querySelectorAll('.faq-group').forEach(g => g.style.display = 'block');

                document.querySelectorAll('.faq-item').forEach(item => {
                    const pertanyaan = item.getAttribute('data-pertanyaan');
                    const visible = keyword === '' || pertanyaan.includes(keyword);
                    item.style.display = visible ? 'block' : 'none';
                    if (visible) totalVisible++;
                });

                // Sembunyikan group yang semua item-nya tersembunyi
                document.querySelectorAll('.faq-group').forEach(group => {
                    const visibleItems = [...group.querySelectorAll('.faq-item')]
                        .filter(item => item.style.display !== 'none');
                    group.style.display = visibleItems.length > 0 ? 'block' : 'none';
                });

                document.getElementById('faqEmpty').style.display = totalVisible === 0 ? 'block' : 'none';
            });

        });
    </script>
@endpush
