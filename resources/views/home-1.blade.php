<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>Laravel Live</title>
        
        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/vendor.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
        <link rel="icon" href="assets/img/favicon.png">
        <style type="text/css">
            .laravel-brand-text{
                color: #f55247;
                }
                .laravel-brand-bg{
                background-color: #f55247;
                color: #ffffff;
                }
            .bg-center-bottom{
                background-position: center bottom;
            }
        </style>
    </head>
    <body id="home" class="header-bg-alt">
        <div id="app">
            <!-- Topbar -->
            <nav class="topbar topbar-sticky topbar-expand-md">
                <div class="container">
                    <div class="topbar-left">
                        <button class="topbar-toggler">&#9776;</button>
                        <!-- <a class="topbar-brand logo text-blue" href="#">
                            Laravel In
                        </a> -->
                    </div>
                    <div class="topbar-right">
                        <ul class="topbar-nav nav" style="font-family:'Titillium Web';">
                            <li class="nav-item"><a class="nav-link" href="#about" data-scrollto="about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#speakers" data-scrollto="speakers">Speakers</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" data-scrollto="home">Venue</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" data-scrollto="home">Schedule</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" data-scrollto="home">Sponsor</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" data-scrollto="home">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- END Topbar -->
            <!-- Header -->
            <header class="header header-inverse pb-0 pt-0 h-fullscreen" style="background-image: url(assets/img/15.jpg);">
                <div class="header-overlay header-bg-alt"></div>
                <div class="container">
                    <div class="row h-full">
                        <div class="col-12 text-center align-self-center px-20">
                            <h1 class="fs-50 fw-600 lh-15 text-info" style="font-family:'Titillium Web';">Laravel<span class="laravel-brand-text">Live</span></h1>
                            <small>A PHP Laravel Conference</small>
                            <p class="fs-20 text-dark" style="font-family:'Dosis';">
                                It's <span class="fw-600">Special</span> because, it brings the whole <span class="fw-600">community together</span>.</p>
                            <signup></signup>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END Header -->
            <!-- Main container -->
            <main class="main-content"></main>
            <!-- END Main container -->
        </div>
        <!-- Scripts -->

        <script src="{{ asset('js/app.js') }}"></script>
        <script>
  window.Tether = {};
</script>
        <script src="{{ asset('js/vendor.js') }}"></script>
    </body>
</html>