@extends('layouts.app')
@section('content')
    <div class="container">


    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-default shadow-elevation-2dp">
                <div class="panel-heading">
                    <h2>Your Coaches</h2>
                </div>
                <div class="panel-body">
                    @if(true)
                    <p>You do not have any coaches. You can search coaches to find yours.</p>

                    @else

                    @endif
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <button type="button" class="material-button bg-primary">

                                <span>Schedule Lessons</span>
                                <div class="ripples buttonRipples">
                                    <span class="ripplesCircle"></span>
                                </div>
                            </button>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <button type="button" class="material-button bg-primary">

                                <span>Become a Coach</span>
                                <div class="ripples buttonRipples">
                                    <span class="ripplesCircle"></span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-default shadow-elevation-2dp">
                <div class="panel-heading">
                    <h2>Find Coaches</h2>
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-md-offset-6">
                            <button type="button" class="material-button bg-primary">

                                <span>Search Coaches</span>
                                <div class="ripples buttonRipples">
                                    <span class="ripplesCircle"></span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection