@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default shadow-elevation-4dp">
            <div class="panel-heading">
                <h3>Your Weekly Practice</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-6">
                        <h4>You have practiced a total of <strong>{}</strong> in the past week.</h4>
                        <p><em>Keep up the good work!</em></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <button class="material-button accent-bg-1">
                            <span class="md-btn-text">
                                <i class="fa fa-plus">

                                </i>
                                Add Practice
                            </span>
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
@endsection