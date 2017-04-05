@extends('layouts.app')
@section('content')
    <div class="row md-first-row shadow-elevation-2dp" xmlns="http://www.w3.org/1999/html">
        <div class="col-xs-12 col-md-4 col-md-offset-1">
            <img src="{{!empty($coach->profile_pic_url) ? $coach->profile_pic_url:"/img/default.jpg"}}" alt="{{$coach->first_name.' '.$coach->last_name}}" title="Figure Skating Coach {{$coach->first_name.' '.$coach->last_name}}" class="img-circle img-responsive">
        </div>
        <div class="col-xs-12 col-md-6 col-md-offset-1 ">
            <header>
                <h1><span class="mobile-hide"></span> <strong>{{$coach->first_name.' '.$coach->last_name}}</strong></h1>
                <p><strong>{{$coach->club->name}}</strong></p>
            </header>
           @foreach($coach->coachingDisciplines as $d)
                <div class="label label-primary">{{$d->name}}</div>
            @endforeach

        </div>
    </div>
@endsection