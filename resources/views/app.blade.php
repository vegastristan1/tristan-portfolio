<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-meta-tags title="Tristan Vegas | IT Graduate & Web Developer Portfolio"
        description="IT graduate skilled in web development, IT support, and infrastructure, focused on user-centered solutions and effective teamwork."
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
