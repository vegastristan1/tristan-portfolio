<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animated Web Developer Tools</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"> --}}
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .body-2 {
            margin: 0;
            padding: 0;
            font-family: Baloo;
        }

        .banner-text {
            display: flex;
            justify-content: space-between;
            width: 100%;
            position: absolute;
        }

        .banner-text ul {
            height: 50px;
            float: right;
        }

        .banner-text ul li {
            display: inline-block;
            padding: 40px 15px;
            text-transform: uppercase;
            color: #fff;
            font-size: 20px;
        }

        .banner-text h2 {
            text-align: center;
            color: #fff;
            font-size: 50px;
            margin-top: 20%;
        }

        .animation-area {
            /* background: linear-gradient(to left, #8942a8, #ba382f); */
            background: rgb(78, 72, 72);
            width: 100%;
            height: 100vh;
        }

        .box-2 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .box-2 li {
            position: absolute;
            display: block;
            list-style: none;
            width: 25px;
            height: 25px;
            background: rgba(255, 255, 255, 0.2);
            animation: animate2 20s linear infinite;
            bottom: -150px;


            opacity: 1;
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: center;
        }

        .box-2 li:nth-child(1) {
            left: 86%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
            font-size: 3rem;
        }

        .box-2 li:nth-child(2) {
            left: 12%;
            width: 30px;
            height: 30px;
            animation-delay: 10.5s;
            animation-duration: 10s;
            font-size: 1.3rem;
        }

        .box-2 li:nth-child(3) {
            left: 42%;
            width: 100px;
            height: 100px;
            animation-duration: 5.5s;
            font-size: 4rem;
        }

        .box-2 li:nth-child(4) {
            left: 15%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 15s;
            font-size: 7rem
        }

        .box-2 li:nth-child(5) {
            left: 65%;
            width: 40px;
            height: 40px;
            animation-delay: 0s;
            font-size: 1.5rem;
        }

        .box-2 li:nth-child(6) {
            left: 70%;
            width: 110px;
            height: 110px;
            animation-delay: 12.5s;
            animation-duration: 15s;
            font-size: 4rem;
        }

        .box-2 li:nth-child(7) {
            left: 25%;
            width: 60px;
            height: 60px;
            animation-delay: 3.5s;
            animation-duration: 15s;
            font-size: 2.2rem;
        }

        .box-2 li:nth-child(8) {
            left: 40%;
            width: 50px;
            height: 50px;
            animation-delay: 3.5s;
            animation-duration: 14s;
            font-size: 2.2rem;
        }

        .box-2 li:nth-child(9) {
            left: -3%;
            width: 150px;
            height: 150px;
            animation-delay: 15.5s;
            animation-duration: 8s;
            font-size: 7rem;
        }

        .box-2 li:nth-child(10) {
            left: 56%;
            width: 110px;
            height: 110px;
            animation-delay: 3.5s;
            animation-duration: 15s;
            font-size: 4rem;
        }

        @keyframes animate2 {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
            }

            100% {
                transform: translateY(-800px) rotate(360deg);
                opacity: 0;
            }
        }
    </style>
</head>

<body class="body-2">
    {{-- <div class="banner-text">
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Portfolio</li>
            <li>Services</li>
            <li>Contact</li>
        </ul>
        <h2>Welcome to Web Developer Tools Animation</h2>
    </div> --}}

    <div class="animation-area">
        <div>
            <ul class="box-2">
                <li><i class="fa-brands fa-square-js"></i></li>
                <li><i class="fa-brands fa-html5"></i></li>
                <li><i class="fa-brands fa-css3"></i></li>
                <li><i class="fa-brands fa-vuejs"></i></li>
                <li><i class="fa-brands fa-bootstrap"></i></li>
                <li><i class="fa-brands fa-node"></i></li>
                <li><i class="fa-brands fa-php"></i></li>
                <li><i class="fa-brands fa-laravel"></i></li>
                <li><i class="fa-solid fa-database"></i></li>
                <li><i class="fa-brands fa-github"></i></li>
            </ul>
        </div>

    </div>
</body>

</html>
