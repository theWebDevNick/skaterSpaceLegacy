<!--app shell for Skater.Space web app -->
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Skater.Space</title>
        <meta name="description" content="The best coaching and skating app in the world of figure skating.">
        <meta name="description" content="">
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
    <body class="login-page">
        <div id="app" >
            <div class="navigation" v-if="['login'].indexOf($route.name) <= -1">
                <nav class="custom-nav">
                    <div class="container">
                        <ul class="pull-left">
                            <li>
                                <router-link to="/" tag="a" exact>
                                    <i class="fa fa-lg fa-arrow-left"></i>
                                </router-link>
                            </li>
                        </ul>
                        <ul class="pull-right">
                            <li>
                                <router-link to="/messages  " tag="a" exact>
                                    <i class="fa fa-lg fa-envelope"></i>
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/settings  " tag="a" exact>
                                    <i class="fa fa-lg fa-gear"></i>
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/logout  " tag="a" exact>
                                    <i class="fa fa-lg fa-sign-out"></i>
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </nav>
                <nav class="custom-nav">
                    <div class="container">
                        <ul class="primary-nav">
                            <li class="col-xs-3">
                                <router-link to="/home  " tag="a" exact>
                                    HOME
                                </router-link>
                            </li>
                            <li class="col-xs-3">
                                <router-link to="/lessons  "tag="a" exact>
                                    COACH
                                </router-link>
                            </li>
                            <li class="col-xs-3">
                                <router-link to="/practice  " tag="a" exact>
                                    LOG
                                </router-link>
                            </li>
                            <li class="col-xs-3">
                                <router-link to="/resources  " tag="a" exact>
                                    LEARN
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <router-view class="container">

            </router-view>
        </div>
    <script src="/js/app.js"></script>
    </body>
</html>