<!-- top navigation -->
<div class="top_nav imonda">
    <div class="nav_menu imonda">
        <nav class="fh5co-nav-style-1 imonda " role="navigation" data-offcanvass-position="fh5co-offcanvass-left">
            <!-- <div class="container"> -->
              <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>

              </div>

              <div class="col-lg-5 text-center fh5co-link-wrap">

                <ul data-offcanvass="yes">
                  <li><a href="{{url ('/pages/schools/viewstudents')}}" class="call-to-action">View Students</a></li>
                  <li><a href="/pages/students/create" class="call-to-action">Admit New Student</a></li>
                  <li><a href="/pages/schools/newscreate" class="call-to-action">Post News</a></li>
                </ul>
              </div>

              <div class="col-lg-6 imon">

                <ul class="nav navbar-nav navbar-right">

                  <li>
                      <!-- <div class="pull-right"> -->
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" >

                          <p class="imo">
                            <img src="{{url('images/mond.jpg')}}" alt="">
                            {{Sentinel::getUser()->first_name }}<span class=" fa fa-angle-down"></span>
                          </p>

                        </a>
                        <ul class="dropdown-menu dropdown-usermenu">
                            <li><a href="javascript:;"> Profile</a></li>
                            <li>
                                <a href="javascript:;">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li><a href="javascript:;">Help</a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                        </ul>
                      <!-- </div> -->
                    </li>

                    <li role="presentation" class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-green"></span>
                        </a>
                        <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                            <li>

                            </li>
                            <li>
                                <a>
                                    <span class="image"><img src="{{ url ('images/mond.jpg')}}" alt="Profile Image" /></span>
                                    <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                                    <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="image"><img src="{{ url ('images/mond.jpg')}}" alt="Profile Image" /></span>
                                    <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                                    <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="image"><img src="{{ url ('images/mond.jpg')}}" alt="Profile Image" /></span>
                                    <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                                    <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                                </a>
                            </li>
                            <li>
                                <div class="text-center">
                                    <a>
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>

              </div>
            </nav>

        </div>

</div>
<!-- /top navigation -->
