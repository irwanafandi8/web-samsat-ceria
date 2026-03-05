@extends('tutorial.index')

@section('title', 'Tutorial - Samsat Ceria')

@section('tutorial-content')

    @foreach ($data['sections'] as $section)
        <div id="{{ $section['id'] }}" style="margin-bottom: 3rem;">

            <div class="tutorial-section-title-center">
                <h2>{{ $section['judul'] }}</h2>
            </div>

            <div class="tutorial-detail-layout">

                {{-- Kiri: Konten --}}
                <div class="tutorial-detail-left">
                    @foreach ($section['sub_sections'] as $sub)
                        <div class="tutorial-sub-section">
                            <h3>{{ $sub['judul'] }}</h3>
                            <ul class="tutorial-numbered-list">
                                @foreach ($sub['steps'] as $i => $step)
                                    <li>
                                        <span class="num">{{ $i + 1 }}.</span>
                                        {{ $step }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>

                {{-- Kanan: Mockup --}}
                <div class="tutorial-detail-right {{ count($section['images'] ?? []) === 1 ? 'single-mockup' : '' }}">
                    @if (!empty($section['images']))
                        @foreach ($section['images'] as $img)
                            <img src="{{ asset($img) }}" alt="{{ $section['judul'] }}" class="tutorial-mockup-img">
                        @endforeach
                    @else
                        <img src="{{ asset('assets/images/samsat-ceria-app.png') }}" alt="Samsat Ceria App"
                            class="tutorial-mockup-img">
                    @endif
                </div>

            </div>
        </div>
    @endforeach

@endsection
        