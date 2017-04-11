<!--app shell for Skater.Space web app -->
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="The best coaching and skating app in the world of figure skating.">
    <meta name="description" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#28c0d5">

    <meta name="apple-mobile-web-app-title" content="Skater.Space">
    <meta name="application-name" content="Skater.Space">
    <meta name="theme-color" content="#1c4888">

    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet"  href="/css/app.css">
</head>

    @if(Route::currentRouteName()=='login' || Route::currentRouteName()=='register')
    <body class="login-page">
        @include('partials.messages')
        @yield('content')
    @else
        <body>
        @include('partials.messages')
        @include('partials.nav')
        <div class="view-container">
            <div class="content">
                @yield('content')
            </div>
            <footer class="footer">
                <div class="footer_body">
                    <div class="container">
                        <div class="col-xs-12">
                            <h3><strong>Skater.Space</strong></h3>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <p>A next-generation mobile and web app made by skaters and for skaters.</p>
                        </div>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="container">
                        <p>
                            <span class="pull-left">
                                &copy 2017 Copyright
                            </span>
                            <span class="pull-right">
                                <a href="">Terms</a>
                            </span>
                        </p>
                    </div>
                </div>
            </footer>
        </div>

        @endif
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-77255170-1', 'auto');
            ga('send', 'pageview');
            @if(\Illuminate\Support\Facades\Auth::user())
            ga('set', 'userId', '{{\Illuminate\Support\Facades\Auth::user()->id}}'); // Set the user ID using signed-in user_id.
            @endif
        </script>
        <script src="/js/app.js"></script>
    </body>
</html>