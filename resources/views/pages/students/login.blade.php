<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TransNzoia &mdash; County Education System</title>

              <!-- Animate.css -->
      	<link rel="stylesheet" href="{{ asset ('css/animate.css')}}">
      	<!-- Icomoon Icon Fonts-->
      	<link rel="stylesheet" href="{{ asset ('css/icomoon.css')}}">
      	<!-- Magnific Popup-->
      	<link rel="stylesheet" href="{{ asset ('css/magnific-popup.css')}}">
      	<!-- Owl Carousel -->
      	<link rel="stylesheet" href="{{ asset ('css/owl.carousel.min.css')}}">
      	<link rel="stylesheet" href="{{ asset ('css/owl.theme.default.min.css')}}">
      	<!-- Bootstrap  -->
      	<link rel="stylesheet" href="{{ asset ('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset ('/css/font-awesome.min.css')}}" media="screen" title="no title">

      	<!-- Cards -->
      	<link rel="stylesheet" href="{{ asset ('css/cards.css')}}">

        <link rel="shortcut icon" href="{{ asset ('imondcorp.ico')}}">

    </head>
    <div id="fh5co-page">
  		<nav class="fh5co-nav-style-1" role="navigation" data-offcanvass-position="fh5co-offcanvass-left">
  			<div class="container">
  				<div class="col-lg-6 col-md-6 col-sm-3 col-xs-12 fh5co-logo">
  					<a href="#"><i class="fa fa-graduation-cap"></i> Trans Nzoia County Education System</a>
  				</div>
  				<!-- <div class="col-lg-6 col-md-5 col-sm-5 text-center fh5co-link-wrap">
  					<ul data-offcanvass="yes">
  						<li class="active"><a href="#">Tour</a></li>
  						<li><a href="#">Explore</a></li>
  						<li><a href="#">Blog</a></li>
  						<li><a href="#">Pricing</a></li>
  					</ul>
  				</div> -->
  				<div class="col-lg-6 col-md-6 col-sm-4 pull-right text-right fh5co-link-wrap">

              @if(!Sentinel::check())
              <ul class="fh5co-special" data-offcanvass="yes">
              <form class="" action="{{ url ('/students/login')}}" method="post">{{ csrf_field()}}
                <li><input type="text" name="email" placeholder="Email Address" value="{{ old('email') }}" required=""></li>
    						<li><input type="password" name="password" placeholder="password"value="{{ old('password') }}" required=""></li>
    						<li><button type="submit" name="btn btn-success">Login</button></li>
              </form>
            </ul>
              @else
              <ul class="fh5co-special" data-offcanvass="yes">
              <li>
                <a href="#">Hello {{ Sentinel::getUser()->first_name}}</a>
              </li>
              <li><form class="" action="{{ url ('/students/logout')}}" method="POST" id='logout-form'>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger">Logout</button>
              </form></li>




  					</ul>
  				</div>

          <div role="tabpanel" class="col-lg-12 fh5co-link-wrap">
            <ul class="fh5co-special">
              <li><a href="/site/home" class="btn btn-succes"><i class="fa fa-home"></i> Home</a></li>
              <li><a href="/FeeStatement/index"><i class="fa fa-dollar"></i> Fee Statement</a></li>
              <li><a href="/Exam/index"><i class="fa fa-pencil"></i>Exam Results</a></li>
              <li><a href="/RegUnits/index"><i class="fa fa-paperclip"></i>Units Registration</a></li>
              <li><a href="/Library/index"><i class="fa fa-book"></i>Library</a></li>
              <li><a href="/StudentID/index"><i class="fa fa-user"></i>Student ID</a></li>
              <li><a target="_BLANK" href="#"><i class="fa fa-stack"></i>Past Papers &amp; Passlists</a></li>
            </ul>
          </div>
          @endif
  			</div>
  		</nav>


  		<div class="fh5co-cover fh5co-cover-style-2 js-full-height imond" data-stellar-background-ratio="0.5" data-next="yes">
  		  	<span class="scroll-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
  				<a href="#">
  					<span class="mouse"><span></span></span>
  				</a>
  			</span>
  			<div class="fh5co-overlay"></div>
  			<div class="fh5co-cover-text">
  				<div class="container">
  					<div class="row">

  						<div class="col-md-6 col-md-offset-3 full-height js-full-height align-center">
  							<div class="fh5co-cover-intro text-center">
                  <h1 class="cover-text-lead">Why use the portal?</h1>
                  <div class="cover-text-sublead wow fadeInUp">
                    <h2 class="cover-text-sublead wow fadeInUp">This online students' portal helps students access fundamental services
                      offered in the polytechnics. You can now access your fee statement, posted exam results, register units,
                      track status of your student ID processing and so much more. Take this opportunity to enjoy improved service delivery! </h2>
                  </div>


							</div>

  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>

      <!-- jQuery -->
	<script src="{{ asset ('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset ('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset ('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
   <script src="{{ asset ('js/jquery.waypoints.min.js')}}"></script>
	<!-- Owl Carousel -->
	<script src="{{ asset ('js/owl.carousel.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset ('js/jquery.magnific-popup.min.js')}}"></script>
	<!-- Stellar -->
	<script src="{{ asset ('js/jquery.stellar.min.js')}}"></script>
	<!-- countTo -->
	<script src="{{ asset ('js/jquery.countTo.js')}}"></script>
	<!-- WOW -->
	<script src="{{ asset ('js/wow.min.js')}}"></script>
	<script>
		new WOW().init();
	</script>
	<!-- Main -->
	<script src="{{ asset ('js/main.js')}}"></script>

    </body>
</html>
