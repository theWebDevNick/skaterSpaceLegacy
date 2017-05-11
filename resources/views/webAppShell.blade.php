<!--app shell for Skater.Space web app -->
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>{{ config('app.name', 'Skater.Space') }}</title>
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
    <link rel="stylesheet"  href="/css/font-awesome.min.css">
    <link rel="stylesheet"  href="/css/bootstrap.min.css">
    <link rel="stylesheet"  href="/css/app.css">
    <style>
        .loading-page{text-align:center;background-color:#070659;color:#fff;position:absolute;top:0;bottom:0;left:0;right:0;z-index:10000;padding-top:30%}.loading-page img{margin:20px;-webkit-animation-name:spin;-webkit-animation-duration:8s;-webkit-animation-iteration-count:infinite;-webkit-animation-timing-function:linear;-moz-animation-name:spin;-moz-animation-duration:8s;-moz-animation-iteration-count:infinite;-moz-animation-timing-function:linear;-ms-animation-name:spin;-ms-animation-duration:8s;-ms-animation-iteration-count:infinite;-ms-animation-timing-function:linear;animation-name:spin;animation-duration:8s;animation-iteration-count:infinite;animation-timing-function:linear}@-ms-keyframes spin{from{-ms-transform:rotate(0)}to{-ms-transform:rotate(360deg)}}@-moz-keyframes spin{from{-moz-transform:rotate(0)}to{-moz-transform:rotate(360deg)}}@-webkit-keyframes spin{from{-webkit-transform:rotate(0)}to{-webkit-transform:rotate(360deg)}}@keyframes spin{from{transform:rotate(0)}to{transform:rotate(360deg)}}
    </style>
</head>
<body  style="background-color:black;background-image:url('/img/heartSkate.jpg');background-size: cover;">
<div id="app" class="fixed-sn light-blue-skin">
    @include('partials.webAppLoadingScreen')
    <skaterspace-nav></skaterspace-nav>
    <main>
        <router-view class="container-fluid">
        </router-view>
    </main>
    <!--Footer-->
    <footer class="page-footer  center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-6">
                    <h5 class="title">Skater.Space</h5>
                    <p>The all-in-one training app for figure skaters and coaches.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-6">
                    <h5 class="title">Site Information</h5>
                    <ul>
                        <li><router-link :to="{name:'terms'}">Terms & Conditions</router-link></li>
                        <li><router-link :to="{name:'privacy'}">Privacy Policy</router-link></li>
                        <li><router-link :to="{name:'SupportIndex'}">Technical Support</router-link></li>
                        <li> <router-link :to="{name:'credits'}">Skater.Space Credits</router-link></li>
                    </ul>
                </div>
                <!--/.Second column-->
            </div>
        </div>
        <!--/.Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright: <a href="http://www.webdevnick.com"> Nicholas Coates </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->
</div>
<script src="/js/app.js"></script>
</body>
</html>