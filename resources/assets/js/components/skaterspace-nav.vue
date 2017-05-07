<template>
    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed sn-bg-1 custom-scrollbar">
            <li>
                <div class="logo-wrapper sn-ad-avatar-wrapper">
                    <img src="/img/navLogoLG.png" class="img-fluid rounded-circle">
                    <div class="rgba-stylish-strong">
                        <p class="user white-text">Nick<br>nickccoates@gmail.com</p>
                    </div>
                </div>
            </li>

            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-bus"></i> Practice<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="#" class="waves-effect">It's all about passion</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-camera"></i> Lessons<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Travel pictures</a>
                                </li>
                                <li><a href="#" class="waves-effect">The best shots</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-forward"></i> Coaching<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Short videos</a>
                                </li>
                                <li><a href="#" class="waves-effect">Editing tutorials</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-paw"></i> Resources<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">How to protect?</a>
                                </li>
                                <li><a href="#" class="waves-effect">'Plant a tree' action</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-user"></i> About<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Blog's author</a>
                                </li>
                                <li><a href="#" class="waves-effect">Our crew</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope"></i> Contact us<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">FAQ</a>
                                </li>
                                <li><a href="#" class="waves-effect">Write a message</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->
            <div class="sidenav-bg mask-strong"></div>
        </ul>
        <!--/. Sidebar navigation -->

        <!--Navbar-->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav">

            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>

            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>Skater.Space</p>
            </div>


            <ul class="nav navbar-nav nav-flex-icons ml-auto">

                <li class="nav-item ">
                    <a class="nav-link"> <span class="badge red z-depth-1">2</span> <i class="fa fa-shopping-envelope"></i> <span class="hidden-sm-down">Messages</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Contact</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Support</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="hidden-sm-down">Profile</span></a>
                    <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item" href="#">Logout</a>
                        <a class="dropdown-item" href="#">My account</a>
                    </div>
                </li>
            </ul>

        </nav>
        <!--/.Navbar-->
    </header>

</template>
<script>
    module.exports = {
     data:function(){
            return {test: 'hello'}
         }
    }
</script>
