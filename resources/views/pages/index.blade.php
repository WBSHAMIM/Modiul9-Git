
@extends('layout.app')

@section ('content')

<header id="home">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6">
				<span class="there">Hi There,</span>
				<h2 class="header-developer">I'm <span class="status">Developer</span></h2>
				<h2>Shamim Ahmad</h2>
				<div id="typed-strings">
					<h4>Front End Developer</h4>
					<h4>Web Developer</h4>
					<h4>Creative Web Designer</h4>
					<h4>W3 Validate Markup</h4>
					<h4>Bootstrap V5.0</h4>
					<h4>Responsive Design</h4>
					<h4>Clean Code</h4>
					<h4>SEO Optimized</h4>
					<h4>Sticky Navigation</h4>
					<h4>Easy to customization</h4>
					<h4>100% Pixel Perfect</h4>
				</div>
				<span id="typed"></span>
				<!--  modal -->
				<div class="hire-me">
					<a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Hire Me</a>
					<!-- Modal body -->
					<div class="container">
						<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
							  <div class="modal-header">
								<h5>Please fill out this form and I will contact you via email</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">&#10005;</button>
							  </div>
							  <div class="modal-body">
								<form action="/action_Hire.php">
									<input type="text" placeholder="Your Name" value="">
									<input type="email" placeholder="Email" value="" required>
									<input type="text" placeholder="Country" value="">
									<input type="text" placeholder="Budget" value="">
									<textarea placeholder="Explain Your Project"></textarea>
								</form>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Send</button>
							  </div>
							</div>
						  </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6">
				<img src="{{ asset('assets/images') }}/my-pic.jpg" class="developer" alt="wb shamim" title="wb shamim">
			</div>
		</div>
	</div>
</header>	
<!-- header end -->
<!-- progress start -->
<section class="progress-section" id="progress">
	<div class="container">
		<h2>My Finest Skills</h2>
		<p>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</P>
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="progress one">
					<span class="progress-left">
						<span class="progress-bar"></span>
					</span>
					<span class="progress-right">
						<span class="progress-bar"></span>
					</span>
					<div class="progress-value">95%</div>
				</div>
				<h3>html5</h3>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="progress two">
					<span class="progress-left">
						<span class="progress-bar"></span>
					</span>
					<span class="progress-right">
						<span class="progress-bar"></span>
					</span>
					<div class="progress-value">90%</div>
				</div>
				<h3>css3</h3>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="progress three">
					<span class="progress-left">
						<span class="progress-bar"></span>
					</span>
					<span class="progress-right">
						<span class="progress-bar"></span>
					</span>
					<div class="progress-value">85%</div>
				</div>
				<h3>web development</h3>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="progress foure">
					<span class="progress-left">
						<span class="progress-bar"></span>
					</span>
					<span class="progress-right">
						<span class="progress-bar"></span>
					</span>
					<div class="progress-value">80%</div>
				</div>
				<h3>php</h3>
			</div>
		</div>
	</div>
</section>
<!-- progress end -->
<!-- about start -->	
<section class="about" id="about">
	<h2 class="text-center">About Me</h2>
	<div class="container">
		<div class="row">
			<div class="col-xl-5 col-lg-5">
				<div>
					<img src="{{ asset('assets/images') }}/my-pic.jpg" alt="Shamim" title="Developer">
				</div>
			</div>
			<div class="col-xl-7 col-lg-7">
				<div class="about-description">
					<h4>I'm <span>Shamim Ahmad,</span> a Web Developer</h4>
					<p>I help you build brand for your business at an affordable price. Thousands of clients have procured exceptional results while working with our dedicated team. when an unknown printer took a galley of type and scrambled it to make a type specimen book. with our dedicated team. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="about-info">
							<ul>
								<li><span>Name:</span> Shamim Ahmad</li>
								<li><span>Phone:</span> +8801721466997</li>
								<li><span>Email:</span> wbshamim@gmail.com</li>
								<li class="info-last"><span>Website:</span> www.wbshamim.com </li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-info">
							<ul>
								<li class="from"><span>From:</span> Dhaka, Bangladesh</li>
								<li><span>Nationality:</span> Bangladeshi</li>
								<li><span>Work Status:</span> Web Developer</li>
								<li class="info-last"><span>Freelancer:</span> Available</li>
							</ul>
						</div>
					</div>
					<div class="cv">
						<div class="row">
							<div class="col-lg-6">
								<a href="#" class="cv-link" download>Download CV</a>
							</div>
							<div class="col-lg-6">
								<div class="about-social-link">
									<a href=""><i class="fab fa-facebook-f"></i></a>
									<a href=""><i class="fab fa-instagram"></i></a>
									<a href=""><i class="fab fa-twitter"></i></a>
									<a href=""><i class="fab fa-linkedin-in"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- about end -->
<!-- work start -->
<section class="work" id="work-done">
	<div class="container">
		<h2 class="work-heading">I have <span>Done!</span></h2>
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="work-layout work-opacity">
					<a href=""><img src="{{ asset('assets/images') }}/plus.png" alt="" title=""></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="work-layout">
					<a href=""><img src="{{ asset('assets/images') }}/plus.png" alt="" title=""></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="work-layout work-layout-last">
					<a href=""><img src="{{ asset('assets/images') }}/plus.png" alt="" title=""></a>
				</div>
			</div>
		</div>
	</div>
</section>	
<!-- work end -->
<!-- testimonial start -->	
<section class="testimonial" id="testimonial">
	<div class="container">
		<h2 class="testimonial-heading">Customer’s<span> Stories</span></h2>
		<div class="clients-review">
			<i class="fas fa-quote-left"></i>
			<div class="owl-carousel owl-theme">
				<div class="slider-item">
					<p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Curabitur leo est, feugiat nec elementum id, suscipit id nulla.
					  Nulla sit amet luctus dolor. Etiam finibus consequat ante ac
					  congue. Quisque porttitor porttitor tempus.
					</p>
					<div class="customer-info">
						<div class="customer-pic">
							<img src="{{ asset('assets/images') }}/Customer-1.jpg" alt="" title="">
						</div>
						<div class="customer-name">
							<span class="client-name">Jac Jacson</span>
							<span class="client-position">SEO Expert</span>
							<span>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="slider-item">
					<p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Curabitur leo est, feugiat nec elementum id, suscipit id nulla.
					  Nulla sit amet luctus dolor. Etiam finibus consequat ante ac
					  congue. Quisque porttitor porttitor tempus.
					</p>
					<div class="customer-info">
						<div class="customer-pic">
							<img src="{{ asset('assets/images') }}/Customer-2.jpg" alt="" title="">
						</div>
						<div class="customer-name">
							<span class="client-name">Jessica malcova</span>
							<span class="client-position">CSE Engineer</span>
							<span>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="slider-item">
					<p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Curabitur leo est, feugiat nec elementum id, suscipit id nulla.
					  Nulla sit amet luctus dolor. Etiam finibus consequat ante ac
					  congue. Quisque porttitor porttitor tempus.
					</p>
					<div class="customer-info">
						<div class="customer-pic">
							<img src="{{ asset('assets/images') }}/Customer-3.jpg" alt="" title="">
						</div>
						<div class="customer-name">
							<span class="client-name">DR: JOSEPH</span>
							<span class="client-position">Medicine Specialist</span>
							<span>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="slider-item">
					<p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Curabitur leo est, feugiat nec elementum id, suscipit id nulla.
					  Nulla sit amet luctus dolor. Etiam finibus consequat ante ac
					  congue. Quisque porttitor porttitor tempus.
					</p>
					<div class="customer-info">
						<div class="customer-pic">
							<img src="{{ asset('assets/images') }}/Customer-4.jpg" alt="" title="">
						</div>
						<div class="customer-name">
							<span class="client-name">Alinson Backer</span>
							<span class="client-position">Makeup Artist</span>
							<span>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="slider-item">
					<p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Curabitur leo est, feugiat nec elementum id, suscipit id nulla.
					  Nulla sit amet luctus dolor. Etiam finibus consequat ante ac
					  congue. Quisque porttitor porttitor tempus.
					</p>
					<div class="customer-info">
						<div class="customer-pic">
							<img src="{{ asset('assets/images') }}/Customer-5.jpg" alt="" title="">
						</div>
						<div class="customer-name">
							<span class="client-name">Stephen Amell</span>
							<span class="client-position">Digital Marketer</span>
							<span>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="slider-item">
					<p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Curabitur leo est, feugiat nec elementum id, suscipit id nulla.
					  Nulla sit amet luctus dolor. Etiam finibus consequat ante ac
					  congue. Quisque porttitor porttitor tempus.
					</p>
					<div class="customer-info">
						<div class="customer-pic">
							<img src="{{ asset('assets/images') }}/Customer-6.jpg" alt="" title="">
						</div>
						<div class="customer-name">
							<span class="client-name">Angel Mira</span>
							<span class="client-position">Web Designer</span>
							<span>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="slider-item">
					<p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Curabitur leo est, feugiat nec elementum id, suscipit id nulla.
					  Nulla sit amet luctus dolor. Etiam finibus consequat ante ac
					  congue. Quisque porttitor porttitor tempus.
					</p>
					<div class="customer-info">
						<div class="customer-pic">
							<img src="{{ asset('assets/images') }}/Customer-7.jpg" alt="" title="">
						</div>
						<div class="customer-name">
							<span class="client-name">James Maxwell</span>
							<span class="client-position">My Client</span>
							<span>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="slider-item">
					<p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Curabitur leo est, feugiat nec elementum id, suscipit id nulla.
					  Nulla sit amet luctus dolor. Etiam finibus consequat ante ac
					  congue. Quisque porttitor porttitor tempus.
					</p>
					<div class="customer-info">
						<div class="customer-pic">
							<img src="{{ asset('assets/images') }}/Customer-8.jpg" alt="" title="">
						</div>
						<div class="customer-name">
							<span class="client-name">Thomasan Paulian</span>
							<span class="client-position">photographer</span>
							<span>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="slider-item">
					<p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Curabitur leo est, feugiat nec elementum id, suscipit id nulla.
					  Nulla sit amet luctus dolor. Etiam finibus consequat ante ac
					  congue. Quisque porttitor porttitor tempus.
					</p>
					<div class="customer-info">
						<div class="customer-pic">
							<img src="{{ asset('assets/images') }}/Customer-9.jpg" alt="" title="">
						</div>
						<div class="customer-name">
							<span class="client-name">ave smith</span>
							<span class="client-position">Content writer</span>
							<span>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="slider-item">
					<p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Curabitur leo est, feugiat nec elementum id, suscipit id nulla.
					  Nulla sit amet luctus dolor. Etiam finibus consequat ante ac
					  congue. Quisque porttitor porttitor tempus.
					</p>
					<div class="customer-info">
						<div class="customer-pic">
							<img src="{{ asset('assets/images') }}/Customer-10.jpg" alt="" title="">
						</div>
						<div class="customer-name">
							<span class="client-name">Lisa Martin</span>
							<span class="client-position">Architect & Engineer</span>
							<span>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="slider-item">
					<p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Curabitur leo est, feugiat nec elementum id, suscipit id nulla.
					  Nulla sit amet luctus dolor. Etiam finibus consequat ante ac
					  congue. Quisque porttitor porttitor tempus.
					</p>
					<div class="customer-info">
						<div class="customer-pic">
							<img src="{{ asset('assets/images') }}/Customer-11.jpg" alt="" title="">
						</div>
						<div class="customer-name">
							<span class="client-name">Dr. Nancy</span>
							<span class="client-position">Cardiologist</span>
							<span>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="slider-item">
					<p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Curabitur leo est, feugiat nec elementum id, suscipit id nulla.
					  Nulla sit amet luctus dolor. Etiam finibus consequat ante ac
					  congue. Quisque porttitor porttitor tempus.
					</p>
					<div class="customer-info">
						<div class="customer-pic">
							<img src="{{ asset('assets/images') }}/Customer-12.jpg" alt="" title="">
						</div>
						<div class="customer-name">
							<span class="client-name">Alesha Dixon</span>
							<span class="client-position">Musician</span>
							<span>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="slider-item">
					<p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Curabitur leo est, feugiat nec elementum id, suscipit id nulla.
					  Nulla sit amet luctus dolor. Etiam finibus consequat ante ac
					  congue. Quisque porttitor porttitor tempus.
					</p>
					<div class="customer-info">
						<div class="customer-pic">
							<img src="{{ asset('assets/images') }}/Customer-13.jpg" alt="" title="">
						</div>
						<div class="customer-name">
							<span class="client-name">Alvara Atkins</span>
							<span class="client-position">Fashion Designer</span>
							<span>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- testimonial end -->
<!-- features start -->
<section class="feature" id="features">
	<div class="container">
		<h2 class="feature-heading">Awesome<span> Features</span></h2>
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
				<div class="feature-in">
					<div class="feature-icon">
						<i class="fab fa-html5"></i>
						<span>HTML5 & CSS3</span>
					</div>
					<div class="feature-details">
						<span>HTML5 & CSS3</span>
						<p>I help you build brand for your business at an affordable price. Thousands of client</P>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
				<div class="feature-in">
					<div class="feature-icon">
						<i class="fas fa-search"></i>
						<span>SEO Optimized</span>
					</div>
					<div class="feature-details">
						<span>SEO Optimized</span>
						<p>I help you build brand for your business at an affordable price. Thousands of client</P>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
				<div class="feature-in">
					<div class="feature-icon">
						<i class="fas fa-mobile-alt"></i>
						<span>Perfect Responsive</span>
					</div>
					<div class="feature-details">
						<span>Perfect Responsive</span>
						<p>I help you build brand for your business at an affordable price. Thousands of client</P>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
				<div class="feature-in">
					<div class="feature-icon">
						<i class="fab fa-bootstrap"></i>
						<span>Bootstrap v5</span>
					</div>
					<div class="feature-details">
						<span>Bootstrap v5</span>
						<p>I help you build brand for your business at an affordable price. Thousands of client</P>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
				<div class="feature-in">
					<div class="feature-icon">
						<i class="fas fa-code"></i>
						<span>Clean Coded</span>
					</div>
					<div class="feature-details">
						<span>Clean Coded</span>
						<p>I help you build brand for your business at an affordable price. Thousands of client</P>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
				<div class="feature-in">
					<div class="feature-icon">
						<i class="fas fa-edit"></i>
						<span>Easy to Customize</span>
					</div>
					<div class="feature-details">
						<span>Easy to Customize</span>
						<p>I help you build brand for your business at an affordable price. Thousands of client</P>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
				<div class="feature-in">
					<div class="feature-icon">
						<i class="far fa-file-code"></i>
						<span>Validate Code</span>
					</div>
					<div class="feature-details">
						<span>Validate Code</span>
						<p>I help you build brand for your business at an affordable price. Thousands of client</P>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
				<div class="feature-in">
					<div class="feature-icon">
						<i class="far fa-object-group"></i>
						<span>Modern Design</span>
					</div>
					<div class="feature-details">
						<span>Modern Design</span>
						<p>I help you build brand for your business at an affordable price. Thousands of client</P>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	
<!-- features end -->
<!-- newsletter start -->	
<section class="newsletter">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
			<h2 class="newsletter-heading">Subscribe to my <span>Newsletter</span></h2>
				<p>I help you build brand for your business at an affordable price. Thousands of clients have procured exceptional results while working with our dedicated</p>
				<form action="/action_page.php" method="get">
					<input class="newsletter-email" type="email" placeholder="Enter your email" name="newsletter-person">
					<button class="newsletter-submit"><i class="far fa-paper-plane"></i></button>
				</form>				
			</div>
		</div>
	</div>
</section>	
<!-- newsletter end -->
<!-- pricing start -->	
<section class="pricing" id="pricing">
	<div class="container">
	<h2 class="pricing-heading">Pricing<span> Plans</span></h2>
		<div class="row pricing-center">
			<div class="col-xl-3 col-lg-3">
				<div class="pricing-table">
					<div class="pricing-table-top">
						<span class="plan">Silver Plan</span>
						<span class="dollor">$40</span>
					</div>
					<div class="pricing-table-middle">
						<span>HTML5 & CSS3</span>
						<span>1 Page</span>
						<span>2 Sub Pages</span>
						<span>3 Month Support</span>
						<span>No Revision</span>
						<span>Help & Guidance</span>
					</div>
					<div class="pricing-table-bottom">
						<button class="btn-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">get started</button>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3">
				<div class="pricing-table">
					<div class="pricing-table-top">
						<span class="plan">Gold Plan</span>
						<span class="dollor">$60</span>
					</div>
					<div class="pricing-table-middle">
						<span>HTML5 & CSS3</span>
						<span>3 Pages</span>
						<span>5 Sub Pages</span>
						<span>6 Month Support</span>
						<span>1 Time Revision</span>
						<span>Help & Guidance</span>
					</div>
					<div class="pricing-table-bottom">
						<button class="btn-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">get started</button>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3">
				<div class="pricing-table pricing-table-last">
					<div class="pricing-table-top">
						<span class="plan">Platinum Plan</span>
						<span class="dollor">$80</span>
					</div>
					<div class="pricing-table-middle">
						<span>HTML5 & CSS3</span>
						<span>7 Pages</span>
						<span>9 Sub Pages</span>
						<span>12 Month Support</span>
						<span>2 Time Revsition</span>
						<span>Help & Guidance</span>
					</div>
					<div class="pricing-table-bottom">
						<button class="btn-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">get started</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	

@endsection