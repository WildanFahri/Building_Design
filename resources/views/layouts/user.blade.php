<!DOCTYPE html>
<html lang="en">

  <head>
        <title>Building Design</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="{{asset('templates/user')}}/images/LogoBD.png" rel="icon">

        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('templates/user')}}/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('templates/user')}}/css/animate.css">

        <link rel="stylesheet" href="{{asset('templates/user')}}/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{asset('templates/user')}}/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{asset('templates/user')}}/css/magnific-popup.css">

        <link rel="stylesheet" href="{{asset('templates/user')}}/css/aos.css">

        <link rel="stylesheet" href="{{asset('templates/user')}}/css/ionicons.min.css">

        <link rel="stylesheet" href="{{asset('templates/user')}}/css/flaticon.css">
        <link rel="stylesheet" href="{{asset('templates/user')}}/css/icomoon.css">
        <link rel="stylesheet" href="{{asset('templates/user')}}/css/style.css">
        <link href="{{asset('templates/user')}}/assets/css/venobox/venobox.css" rel="stylesheet">
  </head>

  <body>
    <header id="header" class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{route('home')}}"><span>BUILDING DESIGN</span></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
          {{-- <a href="{{route('home')}}" class="nav-link" data-nav-section="home">Home</a> --}}

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="{{route('home')}}" class="nav-link" data-nav-section="home">Home</a></li>
	          <li class="nav-item"><a href="{{route('home')}}" class="nav-link" data-nav-section="about">About</a></li>
	          <li class="nav-item"><a href="{{route('home')}}" class="nav-link" data-nav-section="projects">Projects</a></li>
	          <li class="nav-item"><a href="{{route('home')}}" class="nav-link" data-nav-section="team"><span>Team</span></a></li>
	          <li class="nav-item"><a href="{{route('home')}}" class="nav-link" data-nav-section="testimony"><span>Testimony</span></a></li>
	          <li class="nav-item"><a href="{{route('home')}}" class="nav-link" data-nav-section="design"><span>Design</span></a></li>
	          <li class="nav-item"><a href="{{route('home')}}" class="nav-link" data-nav-section="contact"><span>Contact</span></a></li>
	          <li class="nav-item cta"><a href="https://api.whatsapp.com/send?phone={6281774821084}">Free Consultation</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    </header>
    @yield('content')


    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Building Design</h2>
                            <p>Building Design is a platform in the field of architecture that bridges a home owner with architects.</p>
                            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><span class="icon-long-arrow-right mr-2"></span>Architectural Design</a></li>
                            <li><span class="icon-long-arrow-right mr-2"></span>Interior Design</a></li>
                            <li><span class="icon-long-arrow-right mr-2"></span>Exterior Design</a></li>
                            <li><span class="icon-long-arrow-right mr-2"></span>Lighting Design</a></li>
                            <li><span class="icon-long-arrow-right mr-2"></span>AutoCAD Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Jl. Soekarno Hatta No.9, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 8123 2355 9878</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">building_design@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights BuildingDesign <i class="icon-heart color-danger" aria-hidden="true"></i></p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="{{asset('templates/user')}}/js/jquery.min.js"></script>
    <script src="{{asset('templates/user')}}/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{asset('templates/user')}}/js/popper.min.js"></script>
    <script src="{{asset('templates/user')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('templates/user')}}/js/jquery.easing.1.3.js"></script>
    <script src="{{asset('templates/user')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('templates/user')}}/js/jquery.stellar.min.js"></script>
    <script src="{{asset('templates/user')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('templates/user')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('templates/user')}}/js/aos.js"></script>
    <script src="{{asset('templates/user')}}/js/jquery.animateNumber.min.js"></script>
    <script src="{{asset('templates/user')}}/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('templates/user')}}/js/google-map.js"></script>
    <script src="{{asset('templates/user')}}/js/main.js"></script>
    <script src="{{asset('templates/user')}}/assets/css/venobox/venobox.min.js"></script>
    @yield('script')

</body>

</html>
