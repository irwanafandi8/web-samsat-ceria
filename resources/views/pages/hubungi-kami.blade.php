@extends('layouts.app')

@section('title', 'Hubungi Kami - Samsat Ceria')

@section('content')

    {{-- HEADER --}}
    <section class="page-header">
        <div class="container">
            <div class="page-header-inner">
                <h1>Hubungi Kami</h1>
                <p>Silakan kirim pesan kepada kami melalui formulir di bawah ini</p>
            </div>
        </div>
    </section>

    {{-- FORM KONTAK --}}
    <section class="section-kontak">
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
    <div id="successModal" class="modal-overlay {{ session('success') ? 'active' : '' }}">
        <div class="modal-box {{ session('success') ? 'active' : '' }}">

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

            // MODAL
            const successModal = document.getElementById('successModal');
            const closeModalBtn = document.getElementById('closeModalBtn');
            const closeModalBtnOk = document.getElementById('closeModalBtnOk');
            const modalBox = successModal?.querySelector('.modal-box');

            function closeModal() {
                modalBox.classList.remove('active');
                setTimeout(() => successModal.classList.remove('active'), 200);
            }

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

            // Buat elemen warning
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

            // Validasi realtime saat user mulai ketik
            Object.values(fields).forEach(({
                el
            }) => {
                el?.addEventListener('input', () => {
                    if (el.value.trim() !== '') clearWarning(el);
                });

                // Validasi email format realtime
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

            // Validasi saat submit
            form?.addEventListener('submit', function(e) {
                let valid = true;

                // Clear semua warning dulu
                Object.values(fields).forEach(({
                    el
                }) => clearWarning(el));

                // Cek setiap field
                Object.values(fields).forEach(({
                    el,
                    msg
                }) => {
                    if (!el?.value.trim()) {
                        showWarning(el, msg);
                        valid = false;
                    }
                });

                // Cek email format
                const emailEl = fields.email.el;
                if (emailEl?.value.trim() && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailEl.value)) {
                    showWarning(emailEl, 'Format email tidak valid.');
                    valid = false;
                }

                // Cek minimal karakter pesan
                const msgEl = fields.message.el;
                if (msgEl?.value.trim() && msgEl.value.trim().length < 10) {
                    showWarning(msgEl, 'Pesan minimal 10 karakter.');
                    valid = false;
                }

                if (!valid) {
                    e.preventDefault();
                    // Scroll ke field pertama yang error
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
