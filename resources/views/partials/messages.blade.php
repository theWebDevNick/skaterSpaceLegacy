@if($flash=session('defaultMessage'))
    <div class="flash-message shadow-elevation-16dp">
        <div class="container">
            {{$flash}}
        </div>
    </div>
@endif