@extends('layouts.app')

@section('title', 'Tutorial - Samsat Ceria')

@section('content')

    <section class="section-tutorial-page animate-on-scroll">
        <div class="container-informasi">
            <div class="tutorial-page-inner">

                {{-- Sidebar --}}
                <div class="tutorial-sidebar-wrapper">
                    @include('tutorial.partials.sidebar')
                </div>

                {{-- Konten --}}
                <div class="tutorial-content-wrapper">
                    @if (request()->is('tutorial') || request()->is('tutorial/index'))
                        <div class="tutorial-content-header">
                            <h2>Tutorial <span>Populer</span></h2>
                            <p>Pilih tutorial yang ingin Anda pelajari</p>
                        </div>

                        <div class="tutorial-popular-grid">
                            @include('tutorial.partials.popular-tutorials')
                        </div>
                    @else
                        @yield('tutorial-content')
                    @endif
                </div>

            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            {{-- Accordion --}}
            const accordionToggles = document.querySelectorAll('.accordion-toggle');
            accordionToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const chevron = this.querySelector('.fa-chevron-down');
                    const content = this.nextElementSibling;
                    const isActive = this.classList.contains('active');

                    accordionToggles.forEach(other => {
                        other.classList.remove('active');
                        other.querySelector('.fa-chevron-down').classList.remove(
                            'rotate-180');
                        other.nextElementSibling.style.maxHeight = '0';
                    });

                    if (!isActive) {
                        this.classList.add('active');
                        chevron.classList.add('rotate-180');
                        content.style.maxHeight = content.scrollHeight + 'px';
                    }
                });
            });

            {{-- Card Hover --}}
            document.querySelectorAll('.tutorial-popular-card').forEach(card => {
                card.addEventListener('mouseenter', () => card.style.transform = 'translateY(-4px)');
                card.addEventListener('mouseleave', () => card.style.transform = 'translateY(0)');
            });

            {{-- Highlight Active Menu --}}

            function highlightActiveMenu() {
                const currentPath = window.location.pathname;

                document.querySelectorAll('.sidebar-link').forEach(link => {
                    const isActive = link.getAttribute('href') === currentPath;
                    link.classList.toggle('sidebar-link-active', isActive);
                });

                document.querySelectorAll('.accordion-item').forEach(item => {
                    const hasActiveLink = [...item.querySelectorAll('.sidebar-link')]
                        .some(link => link.getAttribute('href') === currentPath);

                    if (hasActiveLink) {
                        const toggle = item.querySelector('.accordion-toggle');
                        const content = item.querySelector('.accordion-content');
                        if (toggle && content) {
                            toggle.classList.add('active');
                            toggle.querySelector('.fa-chevron-down').classList.add('rotate-180');
                            content.style.maxHeight = content.scrollHeight + 'px';
                        }
                    }
                });
            }

            highlightActiveMenu();
        });
    </script>
@endpush
