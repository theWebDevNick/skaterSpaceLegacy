<div class="navigation" >
    <div class="overlay"></div>
    <nav class="navbar navbar-default shadow-elevation-4dp accent-bg">
        <div class="container">
            <ul class="nav navbar-nav">
                <li><a href="" class="side-menu-toggler side-menu-toggle"><i class="fa fa-bars fa-lg"></i></a></li>
            </ul>
            <!-- Brand and toggle get grouped for better mobile display -->
        </div><!-- /.container-fluid -->
    </nav>
    <nav class="side-menu shadow-elevation-12dp side-menu--hidden">
        <header class="side-menu-header">
            <div class="vert-center">
                
                <h2>Nicholas Coates</h2>
            </div>
        </header>
        <ul class="side-menu-body">
            <li class="{{Route::currentRouteName()=='dashboard' ? 'active':''}}">
                <a href="{{route('dashboard')}}"><i class="fa fa-snowflake-o"></i>&nbsp;&nbsp;My Dashboard</a>
            </li>
            <li class="{{Route::currentRouteName()=='lessons' ? 'active':''}}">
                <a  href="{{route('lessons')}}"><i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;My Lessons</a>
            </li>
            <li class="{{Route::currentRouteName()=='practice' ? 'active':''}}">
                <a  href="{{route('practice')}}"><i class="fa fa-history"></i>&nbsp;&nbsp;My Practice</a>
            </li>
            <li class="{{Route::currentRouteName()=='coaches' ? 'active':''}}">
                <a  href="{{route('coaches')}}"><i class="fa fa-users"></i>&nbsp;&nbsp;My Coaches</a>
            </li>
            <li class="{{Route::currentRouteName()=='swap' ? 'active':''}}">
                <a  href="{{route('swap')}}"><i class="fa fa-exchange"></i>&nbsp;&nbsp;Skate Swap</a>
            </li>
            <li class="{{Route::currentRouteName()=='account' ? 'active':''}}">
                <a  href="{{route('account')}}"><i class="fa fa-user-circle"></i>&nbsp;&nbsp;My Account</a>
            </li>
        </ul>
    </nav>
</div>