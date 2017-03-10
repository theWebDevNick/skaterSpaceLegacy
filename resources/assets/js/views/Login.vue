<template>
    <div class="container">
        <h1><img src="/img/navLogoLG.png" style="max-height: 100px">Skater.Space</h1>
        <passport-clients></passport-clients>
        <form class="col-xs-12 col-md-4 col-md-offset-4 material-form shadow-elevation-6dp" name="login" method="post" id="login" action="/login">
            <div class="material-form-input-group">
                <input type="email" class="material-form-input" id="email" name="username" required="">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label for="email">Email</label>
                <span class="error material-error">Please enter a valid email address.</span>
            </div>
            <div class="material-form-input-group">
                <input type="password" id="password" name="password" class="material-form-input" required="">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label for="password">Password</label>
            </div>
            <button type="button" class="material-button accent-bg">
                <span class="md-btn-text">Login to Skater.Space</span>
                <div class="ripples buttonRipples">
                    <span class="ripplesCircle"></span>
                </div>
            </button>
            <div class="col-xs-12 form-error" id="login-error">

            </div>
          <p class="text-center"><strong>- OR -</strong></p>
            <button type="button" class="material-button fb-bg">
                <i class="fa fa-facebook-official fa-lg pull-left vertical-align" style="margin-top: 2px"></i>
                <span>Login with Facebook</span>
                <div class="ripples buttonRipples">
                    <span class="ripplesCircle"></span>
                </div>
            </button>
            <p class="text-center">New to Skater.Space? <a href="/register">Join Now!</a></p>
        </form>
    </div>
</template>
<script>
    export default {
        mounted()
        {
            console.log('Mounted login');
        }
    }
</script>