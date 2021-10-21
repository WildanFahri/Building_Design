@extends('layouts.user')

@section('content')

<section class="hero-wrap js-fullheight" style="background-image: url('{{asset('templates/user')}}/images/bg_1.jpg');" data-section="home">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
        <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find Your Dream Home Inspiration!</h1>
          <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Trusted and Experienced</p>
        </div>
      </div>
    </div>
  </section>

	<section class="ftco-section ftco-services ftco-no-pt">
      <div class="container">
        <div class="row services-section">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-layers"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Perfectly Design</h3>
                <p>We do not complete dozens of designs at once, so the product will be more controlled to obtain quality results. With an experienced team we work on your designs carefully.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-compass-symbol"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Carefully Planned</h3>
                <p>For those of you who are planning a building, with the right design, without compromising the beauty and function of the building. Now you no longer have to worry about the design you want. Trust us, then we think of everything.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-layers"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Smartly Execute</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter about" data-section="about">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-4 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{asset('templates/user')}}/images/about.jpg);">
    					<div class="request-quote py-5">
	    					<form action="#" class="request-form ftco-animate">
		    					<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon-arr"></div>
	                      </div>
			              </div>
			    				</div>
			    			</form>
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-8 pl-lg-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome</span>
		            <h2 class="mb-4">Since we started work in 2000</h2>
		            <p>Building Design is a platform in the field of architecture that bridges a home owner with architects.</p>
                    <p>And also one of the online building design portals that provides various design inspirations for a house and other buildings.</p>
		            <p>For those of you who are planning to decorate or renovate your home, here are also many profiles and achievements of architects, which of course makes it easier for you to choose the best one.</p>
		          </div>
		        </div>
		    		<div class="row">
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center p-4 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="21">0</strong>
		                <span>Years of experience</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="1000">0</strong>
		                <span>Project Done</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="4">0</strong>
		                <span>Our Architect</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="1100">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-project bg-light" data-section="projects">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Accomplishments</span>
            <h2 class="mb-4">Our Projects</h2>
            <p>Projects that we have completed</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 testimonial">
            <div class="carousel-project owl-carousel">
            	@foreach ($data as $design)
            	<div class="item">
            		<div class="project">
		    					<div class="img">
				    				<<img class="block-20" src="{{asset('storage/'.$design->image)}}" class="img-fluid" alt="Colorlib Template">
				    				<a href="{{asset('storage/'.$design->image)}}" class="icon image-popup d-flex justify-content-center align-items-center">
				    					<span class="icon-expand"></span>
				    				</a>
			    				</div>
			    				<div class="text px-4">
			    					<h3>{{ $design->name }}</h3>
			    					<span>Exterior Design</span>
			    				</div>
		    				</div>
            	</div>
                @endforeach
            </div>
          </div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section" data-section="team">
    	<div class="container-fluid p-0">
    		<div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Architect</span>
            <h2 class="mb-4">Behind those Beautiful Works</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row no-gutters text-center" >
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('templates/user')}}/images/team-1.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<span class="position mb-2">Architect</span>
									<h3 class="mb-4">Lloyd Wilson</h3>
									<div class="faded">
										<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="https://twitter.com/"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('templates/user')}}/images/team-2.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<span class="position mb-2">Architect</span>
									<h3 class="mb-4">Rachel Parker</h3>
									<div class="faded">
										<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
										<ul class="ftco-social text-center">
							<li class="ftco-animate"><a href="https://twitter.com/"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('templates/user')}}/images/team-3.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<span class="position mb-2">Architect</span>
									<h3 class="mb-4">Ian Smith</h3>
									<div class="faded">
										<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
										<ul class="ftco-social text-center">
							<li class="ftco-animate"><a href="https://twitter.com/"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('templates/user')}}/images/team-4.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<span class="position mb-2">Architect</span>
									<h3 class="mb-4">Alicia Henderson</h3>
									<div class="faded">
										<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
										<ul class="ftco-social text-center">
							<li class="ftco-animate"><a href="https://twitter.com/"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>
    	</div>
    </section>

    <section class="testimony-section" data-section="testimony">
      <div class="container">
        <div class="row ftco-animate justify-content-center">
        	<div class="col-md-12 d-flex align-items-center">
        		<div class="carousel-testimony owl-carousel">
	        		<div class="item">
	        			<div class="testimony-wrap d-flex align-items-stretch">
		              <div class="user-img d-flex align-self-stretch" style="background-image: url({{asset('templates/user')}}/images/testimony-1.jpg)">
		              </div>
		              <div class="text d-flex align-items-center">
		              	<div>
			              	<div class="icon-quote">
			              		<span class="icon-quote-left"></span>
			              	</div>
			                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			                <p class="name">HAVENIA V. BANJARNAHOR</p>
			                <span class="position">CEO, Founder</span>
		                </div>
		              </div>
		            </div>
	        		</div>
	        		<div class="item">
	        			<div class="testimony-wrap d-flex align-items-stretch">
		              <div class="user-img d-flex align-self-stretch" style="background-image: url({{asset('templates/user')}}/images/testimony-2.jpg)">
		              </div>
		              <div class="text d-flex align-items-center">
		              	<div>
			              	<div class="icon-quote">
			              		<span class="icon-quote-left"></span>
			              	</div>
			                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			                <p class="name">AHMAD WILDAN FAHRI</p>
			                <span class="position">CEO, Founder</span>
		                </div>
		              </div>
		            </div>
	        		</div>
                    <div class="item">
	        			<div class="testimony-wrap d-flex align-items-stretch">
		              <div class="user-img d-flex align-self-stretch" style="background-image: url({{asset('templates/user')}}/images/testimony-3.jpg)">
		              </div>
		              <div class="text d-flex align-items-center">
		              	<div>
			              	<div class="icon-quote">
			              		<span class="icon-quote-left"></span>
			              	</div>
			                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			                <p class="name">AMELIA WIDYA ANDINI</p>
			                <span class="position">CEO, Founder</span>
		                </div>
		              </div>
		            </div>
	        		</div>
	        	</div>
        	</div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light" data-section="design">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Design</span>
                    <h2 class="mb-4">See Our Designs</h2>
                    <p>Inspirational photos and design ideas</p>
                </div>
            </div>
            <div class="row d-flex">
            @foreach ($data as $design)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <img class="block-20" src="{{asset('storage/'.$design->image)}}" alt="">
                        <div class="text mt-3 float-right d-block">
                            <h3 class="heading">{{ $design->name }}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <p class="mb-0"><a href="{{ route('more') }}" class="btn btn-secondary">More Design</span></a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" data-section="contact">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contact Us</h2>
          </div>
        </div>
        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
              </div>
            </form>

          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p>Jl. Soekarno Hatta No.9, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://0812323559878">+62 8123 2355 9878</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:info@yoursite.com">building_design@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">building_design.com</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

@endsection
