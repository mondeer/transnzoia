<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

              <!-- Animate.css -->
      	<link rel="stylesheet" href="{{ asset('css/animate.css')}}">
      	<!-- Icomoon Icon Fonts-->
      	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
      	<!-- Magnific Popup-->
      	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
      	<!-- Owl Carousel -->
      	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
      	<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
      	<!-- Bootstrap  -->
      	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

      	<!-- Cards -->
      	<link rel="stylesheet" href="{{ asset ('css/cards.css')}}">

    </head>
    <div id="fh5co-page">
  		<nav class="fh5co-nav-style-1" role="navigation" data-offcanvass-position="fh5co-offcanvass-left">
  			<div class="container">
  				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 fh5co-logo">
  					<!-- <a href="#" class="js-fh5co-mobile-toggle fh5co-nav-toggle"><i>H</i></a> -->
  					<a href="#">Trans Nzoia County</a>
  				</div>
  				<!-- <div class="col-lg-6 col-md-5 col-sm-5 text-center fh5co-link-wrap">
  					<ul data-offcanvass="yes">
  						<li class="active"><a href="#">Tour</a></li>
  						<li><a href="#">Explore</a></li>
  						<li><a href="#">Blog</a></li>
  						<li><a href="#">Pricing</a></li>
  					</ul>
  				</div> -->
  				<div class="col-lg-5 col-md-6 col-sm-4 pull-right text-right fh5co-link-wrap">
  					<ul class="fh5co-special" data-offcanvass="yes">
              @if(Sentinel::check())

              <form class="form" action="{{ url ('/students/logout')}}" method="POST" id='logout-form'>
                {{ csrf_field() }}
                <a href="#" onclick="document.getElementById('logout-form')">logout</a>
              </form>
              @else
              <li><a href="{{ url ('/students/login')}}">Student Login</a></li>
              <li><a href="#">Staff Login</a></li>
              <li><a href="#" class="call-to-action">Admin Login</a></li>
              @endif
  					</ul>
  				</div>
  			</div>
  		</nav>


  		<div class="fh5co-cover fh5co-cover-style-2 js-full-height" data-stellar-background-ratio="0.5" data-next="yes"  style="background-image: url(images/full.jpg);">
  		  	<span class="scroll-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
  				<a href="#">
  					<span class="mouse"><span></span></span>
  				</a>
  			</span>
  			<div class="fh5co-overlay"></div>
  			<div class="fh5co-cover-text">
  				<div class="container">
  					<div class="row">

              <div class="col-md-6 full-height js-full-height">
  							<div class="fh5co-cover-intro">
  								<h1 class="cover-text-lead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Create Amazing Things</h1>
  								<h2 class="cover-text-sublead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</h2>
  								<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="/home" class="btn btn-primary btn-outline btn-lg">See Our Work</a></p>
  							</div>
  						</div>

  						<div class="col-md-6 full-height js-full-height">
  							<div class="fh5co-cover-intro">
                  <h1 class="cover-text-lead">Student Login</h1>
                  <form class="form" role="form" method="POST" action="{{ url ('/students/login')}}" accept-charset="UTF-8" id="login-nav">
                  {{ csrf_field() }}
										<div class="form-group">
											 <label class="sr-only">Email address</label>
                       <input type="text" class="form-control" placeholder="Email address" name="email" value="{{ old('email') }}" required>
										</div>
										<div class="form-group">
											 <label class="sr-only">Password</label>
											<input type="password" class="form-control" placeholder=" password" name="password" value="{{ old('password') }}" required>

										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 </form>
							</div>

  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>

      <!-- jQuery -->
	<script src="{{asset ('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
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
