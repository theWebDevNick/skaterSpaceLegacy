@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <header>
                <h1>Hello, {{$currentUser->first_name}}!</h1>
                <p>We hope you have fun skating today!</p>
            </header>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-default shadow-elevation-3dp">
                <div class="panel-heading">
                    <h2>
                        Today's Schedule
                    </h2>
                </div>
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
@endsection
