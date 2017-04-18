@extends('layouts.app')

@section('content')



    <div class="container">
        <h1>
            <img src="/img/navLogoLG.png" style="max-height: 100px">Skater.Space
        </h1>

        <div class="card-block">

            <!--Header-->
            <div class="text-center">
                <h3><i class="fa fa-lock"></i> Login:</h3>
                <hr class="mt-2 mb-2">
            </div>

            <!--Body-->
            <div class="md-form">
                <i class="fa fa-envelope prefix"></i>
                <input type="text" id="form2" class="form-control">
                <label for="form2">Your email</label>
            </div>

            <div class="md-form">
                <i class="fa fa-lock prefix"></i>
                <input type="password" id="form4" class="form-control">
                <label for="form4">Your password</label>
            </div>

            <div class="text-center">
                <button class="btn btn-deep-purple">Login</button>
            </div>

        </div>

        <!--Footer-->
        <div class="modal-footer">
            <div class="options">
                <p>Not a member? <a href="#">Sign Up</a></p>
                <p>Forgot <a href="#">Password?</a></p>
            </div>
        </div>














        <form class="col-xs-12 col-md-4 col-md-offset-4 material-form shadow-elevation-6dp" name="login" id="login" method="post" action="{{ route('login') }}" >
            {{csrf_field()}}
            <div class="material-form-input-group {{ $errors->has('email') ? ' invalid' : '' }}">
                <input type="email" class="material-form-input" id="email" name="email" value="{{ old('email') }}" required autofocus>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label for="email">Email</label>
                @if($errors->has('email'))
                <span class="error material-error show-error">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="material-form-input-group {{ $errors->has('password') ? ' invalid' : '' }}">
                <input type="password" id="password" name="password" class="material-form-input" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label for="password">Password</label>
                @if($errors->has('password'))
                <span class="error material-error show-error">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <button type="submit" class="material-button accent-bg">
                <span class="md-btn-text">Login to Skater.Space</span>
                <div class="ripples buttonRipples">
                    <span class="ripplesCircle"></span>
                </div>
            </button>

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

@endsection
