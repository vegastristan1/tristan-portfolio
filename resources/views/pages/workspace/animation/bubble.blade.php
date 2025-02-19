<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animation - Bubble</title>

    <!-- Load RainyDay.js before app-raindrop.js -->
    <script src="{{ asset('js/particles.min.js') }}"></script>

    <!-- Load Vite app-raindrop.js -->
    @vite('resources/js/app-bubble.js')

    <style>
        body {
            margin: 0;
            overflow: hidden;
        }

        html,
        body {
            height: 100%;
        }

        #particles-js {
            background: #262626
        }
    </style>
</head>

<body>
    <div id="particles-js"></div>

</body>

</html>
