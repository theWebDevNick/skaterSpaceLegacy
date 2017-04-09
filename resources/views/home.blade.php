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
@endsection
