<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('page_title') -
        {{ config('app.name', 'Accountly') }}
    </title>

    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="manifest" href="/img/site.webmanifest">
    <meta name="msapplication-config" content="/img/browserconfig.xml" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="/imgs//fonts.gstatic.com">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body class="bg-gray-100">
<div class="min-h-screen flex flex-col">
    <div class="flex-grow">
        <nav x-data="{ open: true}" class="bg-slate-700">
            <x-layouts.nav.desktop />
            <x-layouts.nav.mobile />
        </nav>

        {{ $slot }}
    </div>

    <x-layouts.footer />

    <x-ui.flash />
</div>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@livewireScripts
</body>

</html>
