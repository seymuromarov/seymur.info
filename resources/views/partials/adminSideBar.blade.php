<div class="sidebar" data-active-color="rose" data-background-color="black"
     data-image="{{ asset('/img/sidebar-1.jpg') }}">
    <!--
Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
Tip 2: you can also add an image using data-image tag
Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
    <div class="logo">
        <a href="http://seymur.info" class="simple-text">
            Omarov
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="http://www.creative-tim.com/" class="simple-text">
            Ct
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('/img/faces/cool.jpg') }}"/>
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    {{Auth::user()->name}}
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">My Profile</a>
                        </li>
                        <li>
                            <a href="#">Edit Profile</a>
                        </li>
                        <li>
                            <a href="#">Settings</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li {{ (Request::is('admin') ? 'class=active' : '') }}>
                <a href="{{route('admin')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>

            {{--<li {{ (Request::is('projects') ? 'class=active' : '') }}>--}}
            {{--<a href="{{route('projects.index')}}">--}}
            {{--<i class="material-icons">content_paste</i>--}}
            {{--<p>Projects</p>--}}
            {{--</a>--}}
            {{--</li>--}}
            <li {{ (Request::is('admin/projects')||Request::is('admin/projects/create') ? 'class=active' : '') }} >

                <a data-toggle="collapse" href="#projects">
                    <i class="material-icons">content_paste</i>
                    <p>Projects
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="projects">
                    <ul class="nav">
                        <li {{ (Request::is('admin/projects/create') ? 'class=active' : '') }}>
                            <a href="{{route('projects.create')}}">Add project</a>
                        </li>
                        <li {{ (Request::is('admin/projects') ? 'class=active' : '') }}>
                            <a href="{{route('projects.index')}}">Edit Projects</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- drop-down menu -->
            <!--<li>
                <a data-toggle="collapse" href="#mapsExamples">
                    <i class="material-icons">place</i>
                    <p>Maps
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="mapsExamples">
                    <ul class="nav">
                        <li>
                            <a href="maps/google.html">Google Maps</a>
                        </li>
                    </ul>
                </div>
            </li> -->

        </ul>
    </div>
</div>