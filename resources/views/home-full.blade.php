<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="LaravelLive is the second annual gathering of web developers and companies who are passionate about building amazing applications with the Laravel PHP framework.">
        <meta name="keywords" content="Laravel,LaraveLive, LaraveLive India,India, Conference, PHP, PHP framework, Speakers, PHP Conference, New Delhi, March 2018, PHP conference India, Conference in March, Technical Conference">
        <meta http-equiv="Cache-control" content="public">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:url" content="http://laravellive.in">
        <meta property="og:type" content="article">
        <meta property="og:title" content="LaravelLive - India, A Laravel Conference">
        <meta property="og:description" content="LaravelLive is the second annual gathering of web developers and companies who are passionate about building amazing applications with the Laravel PHP framework.">
        <meta property="og:image" content="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/LaravelLogo.png/1200px-LaravelLogo.png" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>LaravelLive India, Laravel Conference</title>

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/vendor.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="favicon.png">
        <link rel="icon" href="favicon.png">
    </head>
    <body id="home" class="header-bg-alt">
        <div id="app" class="shadow-md">

            <!-- Topbar -->
            @include('sections.top-nav')
            <!-- END Topbar -->

            <!-- Header -->
            @include('sections.landing')
            <!-- END Header -->

            <!-- Main container -->
            <main class="main-content">
                @include('sections.about')
                @include('sections.speakers')
                <br>

                @include('sections.partners')
                @include('sections.venue')
                <div class=" fixed pin-r pin-b mr-20 mb-40">                
                    <a href="//LaravelLiveIndia.flock.com?i=8jyqe5q1seeq81j5" target="_blank" class="btn btn-success btn-round">Join our LaravelLive India community</a>
                    <a href="//LaravelLiveIndia.flock.com?i=8jyqe5q1seeq81j5" target="_blank"><img src="{{ asset('images/flock.png') }}" class="pulse-flock" height="38"></a>
                </div>
            </main>
            <!-- END Main container -->

            <!-- Footer -->
            @include('sections.footer')
            <!-- END Footer -->

        </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
      window.Tether = {};
    </script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script async="" src=""></script><script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-90556969-1', 'auto');
          ga('send', 'pageview');
    </script>

    </body>
</html>
