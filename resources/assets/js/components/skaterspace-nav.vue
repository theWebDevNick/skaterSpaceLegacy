<template>
    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed gradient custom-scrollbar">
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
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-pencil-square-o"></i> Practice<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <router-link :to="{name:'practiceIndex'}"  class="waves-effect">Record a Practice</router-link>
                                </li>
                                <li>
                                    <router-link :to="{name:'practiceHistory'}"  class="waves-effect">Practice History</router-link>
                                </li>
                                <li>
                                    <router-link :to="{name:'practiceChecklists'}"  class="waves-effect">Practice Checklists</router-link>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-university"></i> Lessons<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <router-link :to="{name:'lessonsIndex'}" class="waves-effect">My Lessons</router-link>
                                </li>
                                <li>
                                    <router-link :to="{name:'scheduleLessons'}" class="waves-effect">Schedule A Lessons</router-link>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-users"></i> Coaching<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <router-link :to="{name:'coachIndex'}"  class="waves-effect">My Coaches</router-link>
                                </li>
                                <li>
                                    <router-link :to="{name:'coachSearch'}" class="waves-effect">Find A Coach</router-link>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-book"></i> Resources<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <router-link :to="{name:'resourcesTesting'}"  class="waves-effect">Testing Requirements</router-link>
                                </li>
                                <li>
                                    <router-link :to="{name:'resourcesSkills'}" class="waves-effect">Skating Skills</router-link>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r"><i class="fa fa-calendar"></i> Events<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <router-link :to="{name:'eventsCompetition'}" class="waves-effect">Competitions</router-link>
                                </li>
                                <li>
                                    <router-link :to="{name:'eventsTesting'}" class="waves-effect">Test Sessions</router-link>
                                </li>
                                <li>
                                    <router-link :to="{name:'eventsClinic'}" class="waves-effect">Clinics</router-link>
                                </li>
                                <li>
                                    <router-link :to="{name:'eventsOther'}" class="waves-effect">Other</router-link>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r"><i class="fa fa-exchange"></i> Skate Swap<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <router-link :to="{name:'swapIndex'}" class="waves-effect">Find Items</router-link>
                                </li>
                                <li>
                                    <router-link :to="{name:'swapPost'}"  class="waves-effect">Post Items</router-link>
                                </li>
                                <li>
                                    <router-link :to="{name:'swapLocal'}"  class="waves-effect">Swaps Near Me</router-link>
                                </li>
                                <li>
                                    <router-link :to="{name:'swapBookstore'}"  class="waves-effect">Skater.Space Bookstore</router-link>
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
                    <router-link :to="{name:'messagesIndex'}" class="nav-link"> <span class="badge red z-depth-1">2</span> <i class="fa fa-envelope"></i> <span class="hidden-sm-down">Messages</span></router-link>
                </li>
                <li class="nav-item ">
                    <router-link :to="{name:'SupportIndex'}" class="nav-link"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Support</span></router-link>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="hidden-sm-down">Profile</span></a>
                    <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item" href="#">Logout</a>
                        <router-link class="dropdown-item" :to="{name:'accountIndex'}">My account</router-link>
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
