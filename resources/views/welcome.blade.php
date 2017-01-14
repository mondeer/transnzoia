<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TransNzoia &mdash; County Education System</title>

              <!-- Animate.css -->
      	<link rel="stylesheet" href="css/animate.css">
      	<!-- Icomoon Icon Fonts-->
      	<link rel="stylesheet" href="css/icomoon.css">
      	<!-- Magnific Popup-->
      	<link rel="stylesheet" href="css/magnific-popup.css">
      	<!-- Owl Carousel -->
      	<link rel="stylesheet" href="css/owl.carousel.min.css">
      	<link rel="stylesheet" href="css/owl.theme.default.min.css">
      	<!-- Bootstrap  -->
      	<link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css" media="screen" title="no title">

      	<!-- Cards -->
      	<link rel="stylesheet" href="css/cards.css">

        <link rel="shortcut icon" href="imondcorp.ico">

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
            @if(Sentinel::check())
            <ul class="fh5co-special" data-offcanvass="yes">
              <li><a href="{{url ('/pages/students/profile')}}" class="call-to-action">Student Portal</a></li>
              <li><a href="#" class="call-to-action">Tour The County</a></li>
            </ul>
            @else
  					<ul class="fh5co-special" data-offcanvass="yes">
              <li><a href="{{url ('/students/login')}}" class="call-to-action">Student Login</a></li>
  						<li><a href="#" class="call-to-action">Staff Login</a></li>
  						<li><a href="/schools/login" class="call-to-action">Admin Login</a></li>
  					</ul>
            @endif
  				</div>
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
              <!-- <div class="col-md-6 full-height js-full-height">
                <div class="fh5co-cover-intro">
                  hi
                </div>

              </div> -->
              <div class="col-md-6 col-md-offset-3 full-height js-full-height text-center">
  							<div class="fh5co-cover-intro">
  								<h1 class="cover-text-lead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Create Amazing Things</h1>
  								<h2 class="cover-text-sublead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</h2>
  								<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="/home" class="btn btn-primary btn-outline btn-lg">See Our Work</a></p>
  							</div>
  						</div>

  						</div>
  					</div>
  				</div>
  			</div>

  		</div>

      <!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
   <script src="js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- WOW -->
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!-- Main -->
	<script src="js/main.js"></script>

    </body>
</html>
