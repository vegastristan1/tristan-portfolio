<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="Tristan Vegas" />
    <meta name="description"
        content="Information Technology graduate with extensive experience developing websites, managing IT support more broadly as well associated infrastructure Committed to human-centered web solutions and teamwork." />
    <meta property="description"
        content="Information Technology graduate with extensive experience developing websites, managing IT support more broadly as well associated infrastructure Committed to human-centered web solutions and teamwork." />

    <!-- Open Graph / Facebook -->
    <meta property="og:site_name" content="https://tristan-portfolio-ecru.vercel.app/">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://tristan-portfolio-ecru.vercel.app/" />
    <meta property="og:title" content="Tristan Vegas" />
    <meta property="og:description"
        content="Information Technology graduate with extensive experience developing websites, managing IT support more broadly as well associated infrastructure Committed to human-centered web solutions and teamwork." />
    {{-- <meta property="og:image" content="{{ asset('images/1730290810451rp3j7ax7.jpg') }}" /> --}}
    <meta property="og:image" content="{{ asset('hero-image-1.png') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://tristan-portfolio-ecru.vercel.app/" />
    <meta property="twitter:title" content="Tristan Vegas" />
    <meta property="twitter:description"
        content="Information Technology graduate with extensive experience developing websites, managing IT support more broadly as well associated infrastructure Committed to human-centered web solutions and teamwork." />
    {{-- <meta property="twitter:image" content="{{ asset('images/1730290810451rp3j7ax7.jpg') }}" /> --}}
    <meta property="twitter:image" content="{{ asset('images/hero-image-1.png') }}" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
    {{-- <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}"> --}}
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}"> --}}
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" />
    <meta name="apple-mobile-web-app-title" content="Tan Portfolio" />
    {{-- <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5"> --}}
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta name="keywords" content="Web Developer, Frontend Developer, Backend Developer, Full Stack Developer">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="Tristan Vegas">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>
