<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title inertia>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Scripts -->
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>

<body>
    @inertia
    {{-- <h1>Hello, Tristan!</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, natus animi! Officiis maxime hic, mollitia
        optio sint rerum deserunt laboriosam cum? Dolores, harum placeat. Magni dolor esse ab quo numquam!</p> --}}
</body>

</html>