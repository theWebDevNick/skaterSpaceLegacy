@extends('layouts.app')
@section('content')
    <div class="row md-first-row shadow-elevation-4dp" xmlns="http://www.w3.org/1999/html">
        <div class="col-xs-12 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2">
            <img src="{{!empty($coach->profile_pic_url) ? $coach->profile_pic_url:"/img/default.jpg"}}" alt="{{$coach->first_name.' '.$coach->last_name}}" title="Figure Skating Coach {{$coach->first_name.' '.$coach->last_name}}" class="img-circle img-responsive">
        </div>
        <div class="col-xs-12 col-sm-6 col-sm-offset-1 col-md-5 col-md-offset-1">
            <header>
                <h1><span class="mobile-hide"></span><strong>{{$coach->first_name.' '.$coach->last_name}}</strong></h1>
                <p><strong>{{$coach->club->name}}</strong></p>

           @foreach($coach->coachingDisciplines as $d)
                <div class="label label-primary">{{$d->name}}</div>
            @endforeach
            </header>
        </div>
    </div>
    <div class="row">

        <div class="panel panel-default shadow-elevation-2dp">
            <div class="panel-heading">
                <h2>
                    Credentials
                </h2>

            </div>
            <div class="panel-body">
               <ul class="md-list">
                   @foreach($coach->coachingCredentials as $cred)
                       <li>
                           <h3>{{$cred->name}}</h3>
                           <p>Issued by <a href="{{route('getOrganizationById',$cred->grantingOrg->id)}}">{{$cred->grantingOrg->name}}</a></p>
                       </li>
                   @endforeach
               </ul>
            </div>
        </div>
        <div class="panel panel-default shadow-elevation-2dp">
            <div class="panel-heading">
                <h2>
                        Biography
                </h2>
            </div>
            <div class="panel-body">
                {!! $coach->bio !!}
            </div>
        </div>

    </div>
@endsection