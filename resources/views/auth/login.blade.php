@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>
            <img src="/img/navLogoLG.png" style="max-height: 100px">Skater.Space
        </h1>
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
