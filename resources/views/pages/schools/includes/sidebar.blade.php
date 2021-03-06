<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/pages/schools/profile') }}" class="site_title"><i class="fa fa-dashboard"></i> <span>Trans Nzoia Couny!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="{{ asset('images/mond.jpg')}}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Sentinel::getUser()->first_name}} Admin</h2>
            </div>
        </div>

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>School Admin</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Manage Students<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/pages/students/create">Add a Student</a></li>
                            <li><a href="/pages/schools/viewstudents">View Students</a></li>
                            <li><a href="#">Delete a School</a></li>
                            <li><a href="#">Accredit a School</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-dollar"></i> Fee Management<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Pay Fee</a></li>
                            <li><a href="#">Print Statement</a></li>
                            <li><a href="#">Check Fee Balance</a></li>
                        </ul>
                    </li>


                    <li><a><i class="fa fa-hospital-o"></i> Manage Assets<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Add an Asset</a></li>
                            <li><a href="#">Request Asset Acquisition</a></li>
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
                <h3>Academics Admin</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-user"></i> Manage Tutors<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                          <li><a href="#">Approve Tutor Units</a></li>
                          <li><a href="#">Allocate Tutor Units/a></li>
                          <li><a href="#">Tutor Payment</a></li>
                      </ul>
                  </li>

                  <li><a><i class="fa fa-puzzle-piece"></i> Manage Results<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                          <li><a href="#">Key In Results</a></li>
                          <li><a href="#">View Results</a></li>
                          <li><a href="#">Send Results To Students</a></li>
                      </ul>
                  </li>

                  <li><a href="#">
                      <i class="fa fa-clock-o"></i>
                      Timetable Management
                      <span class="label label-success pull-right">Units</span>
                  </a>
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
