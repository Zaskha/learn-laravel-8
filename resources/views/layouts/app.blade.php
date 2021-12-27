<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Zaskha</title>
    <link rel="stylesheet" href="/css/app.css">
    
    {{-- @yield('styles')    cara 1 --}}
    {{-- {{ $styles }}       cara 2 --}}

    {{-- Pakai Isset --}}
    {{-- @isset($styles)
        {{ $styles }}
    @endisset --}}

    {{ $styles }}

</head>
<body>

    {{-- @include('layouts.navbar') --}}

    <x-navbar></x-navbar>

    {{ $slot }}

    <script src="/js/app.js"></script>
</body>
</html>