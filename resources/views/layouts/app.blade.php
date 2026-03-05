<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Samsat Ceria')</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- Vite CSS & JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Konten --}}
    <main class="main-content">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    {{-- Scripts --}}
    @stack('scripts')

</body>

</html>
