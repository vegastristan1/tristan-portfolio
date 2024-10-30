<!-- resources/views/components/meta-tags.blade.php -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title inertia>{{ $title ?? config('app.name', 'Laravel') }}</title>

<!-- Primary Meta Tags -->
<meta name="title" content="{{ $title }}" />
<meta name="description" content="{{ $description }}" />

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="{{ $siteUrl }}">
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ $siteUrl }}" />
<meta property="og:title" content="{{ $title }}" />
<meta property="og:image" content="{{ $ogImage }}" />
<meta property="og:description" content="{{ $description }}" />

<!-- Twitter -->
<meta property="twitter:card" content="summary" />
<meta property="twitter:url" content="{{ $siteUrl }}" />
<meta property="twitter:title" content="{{ $title }}" />
<meta property="twitter:description" content="{{ $description }}" />
<meta property="twitter:image" content="{{ $ogImage }}" />

<!-- Favicon and Apple Icons -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
<link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}" />
<link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" />
<meta name="apple-mobile-web-app-title" content="Tan Portfolio" />
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<meta name="keywords" content="{{ $keywords }}">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="7 days">
<meta name="author" content="{{ $author }}">
