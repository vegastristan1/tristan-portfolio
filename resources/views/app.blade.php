<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-meta-tags title="Tristan Vegas"
        description="Information Technology graduate with extensive experience developing websites, managing IT support more broadly as well associated infrastructure Committed to human-centered web solutions and teamwork"
        siteUrl="https://tristan-portfolio-ecru.vercel.app/" ogImage="{{ asset('images/1730290810451rp3j7ax7.jpg') }}"
        keywords="Web Developer, Frontend Developer, Backend Developer, Full Stack Developer" author="Tristan Vegas" />

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
