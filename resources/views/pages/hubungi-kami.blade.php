@extends('layouts.app')

@section('title', 'Hubungi Kami - Samsat Ceria')

@section('meta_description', 'Hubungi tim Samsat Ceria. Kami siap membantu Anda 24/7 melalui formulir kontak.')
@section('og_title', 'Hubungi Kami - Samsat Ceria')
@section('og_description', 'Ada pertanyaan? Tim support Samsat Ceria siap membantu Anda kapan saja.')

@push('meta')
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
@endpush

@section('content')

    <x-breadcrumb :items="[['label' => 'Hubungi Kami', 'url' => route('hubungi-kami.index')]]" />

    {{-- HEADER --}}
    <section class="page-header animate-on-scroll">
        <div class="container">
            <div class="page-header-inner">
                <h1>Hubungi Kami</h1>
                <p>Silakan kirim pesan kepada kami melalui formulir di bawah ini</p>
            </div>
        </div>
    </section>

    {{-- FORM KONTAK --}}
    <section class="section-kontak animate-on-scroll">
        <div class="container">
            <div class="kontak-wrapper">
                <div class="kontak-card">

                    @if (session('error'))
                        <div class="alert-warning" style="margin-bottom: 1rem;">
                            <i class="fas fa-exclamation-circle"></i>
                            <p>{{ session('error') }}</p>
                        </div>
                    @endif
                    <form action="{{ route('hubungi-kami.store') }}" method="POST" id="contactForm">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda"
                                value="{{ old('name') }}">
                            @error('name')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="nama@email.com"
                                value="{{ old('email') }}">
                            @error('email')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" id="subject" name="subject" placeholder="Subjek pesan"
                                value="{{ old('subject') }}">
                            @error('subject')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tulis pesan Anda di sini...">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-submit">
                            <button type="submit" class="btn-submit">
                                <i class="fas fa-paper-plane"></i>
                                Kirim Pesan
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>

    {{-- MODAL SUCCESS --}}
    <div id="successModal" class="modal-overlay">
        <div class="modal-box">

            <button id="closeModalBtn" class="modal-close-x">
                <i class="fas fa-times"></i>
            </button>

            <div class="modal-icon">
                <i class="fas fa-check"></i>
            </div>

            <h3>Pesan terkirim!</h3>
            <p>Terimakasih sudah menghubungi kami</p>

            <button id="closeModalBtnOk" class="btn-modal-close">OK</button>

        </div>
    </div>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // Ambil status success dari PHP
            const isSuccess = {{ $success ? 'true' : 'false' }};

            // MODAL
            const successModal = document.getElementById('successModal');
            const closeModalBtn = document.getElementById('closeModalBtn');
            const closeModalBtnOk = document.getElementById('closeModalBtnOk');
            const modalBox = successModal?.querySelector('.modal-box');

            function openModal() {
                successModal.classList.add('active');
                modalBox.classList.add('active');
            }

            function closeModal() {
                modalBox.classList.remove('active');
                setTimeout(() => successModal.classList.remove('active'), 200);
            }

            // Tampilkan modal hanya jika bukan dari back button
            if (isSuccess && !sessionStorage.getItem('modal_shown')) {
                sessionStorage.setItem('modal_shown', 'true');
                openModal();
            }

            // Reset sessionStorage saat navigasi ke halaman lain
            window.addEventListener('pagehide', function() {
                sessionStorage.removeItem('modal_shown');
            });

            // Back button — sembunyikan modal
            window.addEventListener('pageshow', function(e) {
                if (e.persisted) {
                    closeModal();
                    sessionStorage.removeItem('modal_shown');
                }
            });

            closeModalBtn?.addEventListener('click', closeModal);
            closeModalBtnOk?.addEventListener('click', closeModal);
            successModal?.addEventListener('click', (e) => {
                if (e.target === successModal) closeModal();
            });
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closeModal();
            });

            // VALIDASI FORM
            const form = document.getElementById('contactForm');
            const fields = {
                name: {
                    el: document.getElementById('name'),
                    msg: 'Nama lengkap wajib diisi.'
                },
                email: {
                    el: document.getElementById('email'),
                    msg: 'Email wajib diisi.'
                },
                subject: {
                    el: document.getElementById('subject'),
                    msg: 'Subjek wajib diisi.'
                },
                message: {
                    el: document.getElementById('message'),
                    msg: 'Pesan wajib diisi.'
                },
            };

            function showWarning(input, message) {
                clearWarning(input);
                input.classList.add('input-error');
                const warn = document.createElement('span');
                warn.className = 'input-warning';
                warn.textContent = message;
                input.parentNode.appendChild(warn);
            }

            function clearWarning(input) {
                input.classList.remove('input-error');
                const existing = input.parentNode.querySelector('.input-warning');
                if (existing) existing.remove();
            }

            Object.values(fields).forEach(({
                el
            }) => {
                el?.addEventListener('input', () => {
                    if (el.value.trim() !== '') clearWarning(el);
                });

                if (el?.type === 'email') {
                    el.addEventListener('blur', () => {
                        if (el.value.trim() && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(el.value)) {
                            showWarning(el, 'Format email tidak valid.');
                        } else if (el.value.trim()) {
                            clearWarning(el);
                        }
                    });
                }
            });

            form?.addEventListener('submit', function(e) {
                let valid = true;

                Object.values(fields).forEach(({
                    el
                }) => clearWarning(el));

                Object.values(fields).forEach(({
                    el,
                    msg
                }) => {
                    if (!el?.value.trim()) {
                        showWarning(el, msg);
                        valid = false;
                    }
                });

                const emailEl = fields.email.el;
                if (emailEl?.value.trim() && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailEl.value)) {
                    showWarning(emailEl, 'Format email tidak valid.');
                    valid = false;
                }

                const msgEl = fields.message.el;
                if (msgEl?.value.trim() && msgEl.value.trim().length < 10) {
                    showWarning(msgEl, 'Pesan minimal 10 karakter.');
                    valid = false;
                }

                if (!valid) {
                    e.preventDefault();
                    const firstError = form.querySelector('.input-error');
                    firstError?.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            });

        });
    </script>
@endpush
