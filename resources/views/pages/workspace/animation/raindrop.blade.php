<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animated-Raindrop</title>

    <!-- Load RainyDay.js before app-raindrop.js -->
    <script src="{{ asset('js/rainyday.min.js') }}"></script>

    <!-- Load Vite app-raindrop.js -->
    @vite('resources/js/app-raindrop.js')
</head>

<body onload="run();">
    <div>
        <img src="" alt="" id="wrapper">
    </div>
    {{-- https://mubaidr.github.io/rainyday.js/#options --}}
    {{-- https://github.com/mubaidr/rainyday.js --}}
</body>

</html>
