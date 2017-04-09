@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>
            <img src="/img/navLogoLG.png" style="max-height: 100px">Skater.Space
        </h1>
        <form class="col-xs-12  material-form reg-form shadow-elevation-6dp" name="register" i
="register" method="post" action="{{ route('register') }}" >
            {{csrf_field()}}
            <div class="row">
                <div class="col-xs-12">
                    <header>
                        <h2>
                            Welcome to Skater.Space!
                        </h2>
                        <p>
                            To get started, we'd like to get some information from you. Don't worry&mdash;we do not share this information with anyone. <a href="#myModal" data-toggle="modal" data-target="#modalWhy">Why do we need this information?</a>
                        </p>
                    </header>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="material-form-input-group {{ $errors->has('first_name') ? ' invalid' : '' }}">
                        <input type="text" class="material-form-input" id="first_name" name="first_name" value="{{ old('first_name') }}" required autofocus>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="first_name">First Name</label>
                        @if($errors->has('first_name'))
                            <span class="error material-error show-error">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="material-form-input-group {{ $errors->has('last_name') ? ' invalid' : '' }}">
                        <input type="text" class="material-form-input" id="last_name" name="last_name" value="{{ old('last_name') }}" required autofocus>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="first_name">Last Name</label>
                        @if($errors->has('last_name'))
                            <span class="error material-error show-error">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6">
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
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="material-form-input-group {{ $errors->has('email-confirm') ? ' invalid' : '' }}">
                        <input type="email" class="material-form-input" id="email-confirm" name="email-confirm" value="{{ old('email-confirm') }}" required autofocus>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="email-confirm">Confirm Email</label>
                        @if($errors->has('email-confirm'))
                            <span class="error material-error show-error">
                                 <strong>{{ $errors->first('email-confirm') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="material-form-input-group {{ $errors->has('postal') ? ' invalid' : '' }}">
                        <input type="text" class="material-form-input" id="postal" name="postal" value="{{ old('postal') }}" required autofocus>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="postal">Zip/Postal Code</label>
                        @if($errors->has('postal'))
                            <span class="error material-error show-error">
                                 <strong>{{ $errors->first('postal') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="material-form-input-group {{ $errors->has('dob') ? ' invalid' : '' }}">
                        <input type="date" class="material-form-input" id="dob" name="dob" value="{{ old('dob') }}" required placeholder="false">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="dob">Date of Birth</label>
                        @if($errors->has('dob'))
                            <span class="error material-error show-error">
                                 <strong>{{ $errors->first('dob') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="modalWhy">
        <div class="modal-dialog" role="document">
            <div class="modal-content shadow-elevation-16dp">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">What does Skater.Space use your information for?</h4>
                </div>
                <div class="modal-body">
                    <p>
                        Your privacy is important to you and to us. For your information, we have outlined how we use the information on this registration form.
                    </p>
                    <ul>
                        <li>
                            <strong>Your First and Last Name</strong>:
                            This is so we know who you are and so your coach or other skaters know who you are. This allows them (with your permission) to find and interact with you in a timely manner.
                        </li>
                        <li>
                            <strong>Your Email Address</strong>:
                            We use this to verify your account, send you messages about your account, and allow you to manage your account if your forget your password. <strong>No one</strong> gets to see your email address, as all messaging is handled within the skater.space app. Your email is important and private to you, so we do not sell or share your email address with anyone.
                        </li>
                        <li>
                            <strong>Your Birth Date</strong>:
                            We do not allow anyone under the age of 13 years to register, so we use this during registration to verify that you are old enough to use skater.space. If you are under 13, <strong> your parent must create an account and then add you as a sub-account</strong>.
                        </li>
                        <li>
                            <strong>Your zip/postal code</strong>:
                            We use this information to help you find figure skating clubs and coaches near you. In the future, we may also use this information to find test sessions and competitions near you, but that is currently not featured in this release of skater.space.
                            Also, skater.space is currently limited to residents of the United States and Canada. The zip/postal code is used to verify that your are a resident of the US or Canada.
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="material-button accent-bg">
                        <span class="md-btn-text">Close</span>
                        <div class="ripples buttonRipples">
                            <span class="ripplesCircle"></span>
                        </div>
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
