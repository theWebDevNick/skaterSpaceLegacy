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
    <link rel="stylesheet"  href="/css/bootstrap.min.css">
    <link rel="stylesheet"  href="/css/app.css">
</head>
<body>
<div id="app"  v-bind:class="{ 'login-page': ['login'].indexOf($route.name) >-1 }" >
    <router-view></router-view>
</div>
<script src="/js/app.js"></script>

</body>
</html>