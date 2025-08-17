<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- CSRF Token para peticiones AJAX --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Título dinámico con fallback al nombre de la app --}}
    <title>@yield('title', config('app.name', 'Laravel'))</title>

    {{-- Meta Descripción (bueno para SEO) --}}
    <meta name="description" content="@yield('description', 'Portafolio profesional de Eduardo.')">

    {{-- Favicons - Coloca estos archivos en tu carpeta /public --}}
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    {{-- Directiva de Vite para cargar los assets (CSS y JS) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Meta Pixel Code -->
    <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '948792990780126');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=948792990780126&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>
<body class="bg-black text-white antialiased">
    <x-svg-sprite />


    {{-- Opcional: Incluir un header parcial --}}
    {{-- @include('layouts.partials.header') --}}

        @yield('content')

    @include('layouts.partials.footer')

    @stack('scripts')
</body>
</html>