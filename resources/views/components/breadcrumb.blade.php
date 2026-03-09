@if (count($items) > 0)
    <nav class="breadcrumb-nav" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb-list">

                {{-- Home selalu ada --}}
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}" class="breadcrumb-link">
                        <i class="fas fa-home"></i>
                        Beranda
                    </a>
                </li>

                @foreach ($items as $i => $item)
                    <li class="breadcrumb-item">
                        <i class="fas fa-chevron-right breadcrumb-separator"></i>
                        @if ($i === count($items) - 1)
                            {{-- Item terakhir = halaman aktif --}}
                            <span class="breadcrumb-active">{{ $item['label'] }}</span>
                        @else
                            <a href="{{ $item['url'] }}" class="breadcrumb-link">{{ $item['label'] }}</a>
                        @endif
                    </li>
                @endforeach

            </ol>
        </div>
    </nav>
@endif
