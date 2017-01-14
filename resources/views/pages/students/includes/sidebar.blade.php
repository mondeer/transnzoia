<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/') }}" class="site_title"><i class="fa fa-dashboard"></i> <span>Trans Nzoia Couny!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="{{ asset('images/mond.jpg')}}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Sentinel::getUser()->last_name}}</h2>
            </div>
        </div>

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>County Admin</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Manage Schools<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/schools/create">Add a School</a></li>
                            <li><a href="/schools/view">View Schools</a></li>
                            <li><a href="#">Delete a School</a></li>
                            <li><a href="#">Accredit a School</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-users"></i> User Management<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Add Admin</a></li>
                            <li><a href="#">Delete Admin</a></li>
                            <li><a href="#">Add Student</a></li>
                            <li><a href="#">Add Tutor</a></li>
                            <li><a href="#">Delete Tutor</a></li>
                        </ul>
                    </li>


                    <li><a><i class="fa fa-hospital-o"></i> Manage Assets<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Add an Asset</a></li>
                            <li><a href="#">Approve Asset Acquisition</a></li>
                            <li><a href="#">Auction Assets</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-dollar"></i>
                            Monetary Management
                            <span class="label label-success pull-right">Flag</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Institution Admin</h3>
                <ul class="nav side-menu">
                    <li>
                        <a><i class="fa fa-graduation-cap"></i> Students Management <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="#">Financials</a>
                                <li>
                                    <a>Admissions<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="sub_menu">
                                            <a href="/students/create">Add a student</a>
                                        </li>
                                        <li>
                                            <a href="/students/view">View students</a>
                                        </li>
                                        <li>
                                            <a href="#">Upload Timetable</a>
                                        </li>
                                    </ul>
                                </li>
                            <li>
                                <a href="#">Admissions</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a><i class="fa fa-hospital-o"></i> Inventory Management <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="#"></a>
                                <li>
                                    <a>Asset Acquisition<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="sub_menu">
                                            <a href="#">Apply to acquire an asset</a>
                                        </li>
                                        <li>
                                            <a href="#">Process a new asset</a>
                                        </li>
                                        <li>
                                            <a href="#"></a>
                                        </li>
                                    </ul>
                                </li>
                            <li>
                                <a href="#">Admissions</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-large">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
              <form class="" action="{{ url ('/students/logout')}}" method="POST" id='logout-form'>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></button>
              </form>

            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
