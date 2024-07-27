<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JTV') }}</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />

    <script defer src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>
</head>
<body>
    <div id="app">

        <!-- header section starts  -->
        <header class="header">
            <a href="/" ><img src="{{ asset('images/c2.png') }}" class="logo"></a>
            {{-- HOTLINE NUMBER --}}

            <nav class="navbar nav-links">
                <a href="/">Home</a>
                <a href="/news">News</a>
                <a href="/about">About</a>
                <a href="/team">Team</a>
                <a href="/contact">Contact</a>
            </nav>

            <div class="burger" id="showDivButton">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>

        </header>
        <!-- header section ends -->

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const burger = document.getElementById('showDivButton');
                const nav = document.querySelector('.nav-links');

                burger.addEventListener('click', () => {
                    console.log('Burger clicked');
                    nav.classList.toggle('nav-active');
                    console.log(nav.classList);
                });
            });

        </script>

        <main class="py-4">
            @yield('content')
        </main>

        <!-- footer section starts  -->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3><a href="/" ><img src="{{ asset('images/c2.png') }}" width="200px"></a></h3>
                    {{-- <a><img src="{{ asset('images/c2.png') }}"></a> --}}
                    <p>WELCOME TO JAGORONI TV.</p>
                    <div class="share">
                        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                        <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                        <a href="https://www.youtube.com/" class="fab fa-youtube"></a>
                    </div>
                </div>

                <div class="box">
                    <h3>quick links</h3>
                    <a href="/" class="link">HOME</a>
                    <a href="/about" class="link">ABOUT</a>
                    <a href="/contact" class="link">CONTACT</a>
                </div>

                <div class="box feedback">
                    <h3>FEEDBACK</h3>
                    <p>PLEASE LET US KNOW ABOUT YOUR EXPERIENCE</p>
                    <form action="">
                       <input type="email" name="" placeholder="Please Share Your Experience" id="" class="email">
                       <input type="submit" value="SEND" class="btn">
                    </form>
                </div></div>

            <div class="credit">COPYRIGHT © 2024 || JTV || <span>ALL RIGHTS RESERVED.</span></div>
        </section>
        <!-- footer section ends -->
    </div>


</body>
</html>
