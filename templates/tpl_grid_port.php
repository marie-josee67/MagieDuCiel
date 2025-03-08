<?php
    /*
        Template Name: Grid port
        Description: page de grid portfolio
    */
    get_header();
?>

<!--=========| Preloader Start |=========-->
<div id="ftco-loader" class="show fullscreen pre-loader">
	<div class="loader-position">
		<img src="assets/img/preloader.gif" alt="Preloader">
	</div>
</div>
<!--=========| Preloader End   |=========-->

<!--=========|  Header Start  |=========-->
<section class="grid-port">
	<div class="bg-moving">
		<svg viewBox="0 0 100 100" preserveAspectRatio="xMidYMid slice">
		<defs>
		<radialGradient id="Gradient1" cx="50%" cy="50%" fx="0.441602%" fy="50%" r=".5"><animate attributeName="fx" dur="34s" values="0%;3%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(255, 0, 255, 1)"></stop><stop offset="100%" stop-color="rgba(255, 0, 255, 0)"></stop></radialGradient>
		<radialGradient id="Gradient2" cx="50%" cy="50%" fx="2.68147%" fy="50%" r=".5"><animate attributeName="fx" dur="23.5s" values="0%;3%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(255, 255, 0, 1)"></stop><stop offset="100%" stop-color="rgba(255, 255, 0, 0)"></stop></radialGradient>
		<radialGradient id="Gradient3" cx="50%" cy="50%" fx="0.836536%" fy="50%" r=".5"><animate attributeName="fx" dur="21.5s" values="0%;3%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(0, 255, 255, 1)"></stop><stop offset="100%" stop-color="rgba(0, 255, 255, 0)"></stop></radialGradient>
		<radialGradient id="Gradient4" cx="50%" cy="50%" fx="4.56417%" fy="50%" r=".5"><animate attributeName="fx" dur="23s" values="0%;5%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(0, 255, 0, 1)"></stop><stop offset="100%" stop-color="rgba(0, 255, 0, 0)"></stop></radialGradient>
		<radialGradient id="Gradient5" cx="50%" cy="50%" fx="2.65405%" fy="50%" r=".5"><animate attributeName="fx" dur="24.5s" values="0%;5%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(0,0,255, 1)"></stop><stop offset="100%" stop-color="rgba(0,0,255, 0)"></stop></radialGradient>
		<radialGradient id="Gradient6" cx="50%" cy="50%" fx="0.981338%" fy="50%" r=".5"><animate attributeName="fx" dur="25.5s" values="0%;5%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(255,0,0, 1)"></stop><stop offset="100%" stop-color="rgba(255,0,0, 0)"></stop></radialGradient>
		</defs>
		<rect x="13.744%" y="1.18473%" width="100%" height="100%" fill="url(#Gradient1)" transform="rotate(334.41 50 50)"><animate attributeName="x" dur="20s" values="25%;0%;25%" repeatCount="indefinite"></animate><animate attributeName="y" dur="21s" values="0%;25%;0%" repeatCount="indefinite"></animate><animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="10s" repeatCount="indefinite"></animateTransform></rect>
		<rect x="-2.17916%" y="35.4267%" width="100%" height="100%" fill="url(#Gradient2)" transform="rotate(255.072 50 50)"><animate attributeName="x" dur="23s" values="-25%;0%;-25%" repeatCount="indefinite"></animate><animate attributeName="y" dur="24s" values="0%;50%;0%" repeatCount="indefinite"></animate><animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="12s" repeatCount="indefinite"></animateTransform>
		</rect>
		<rect x="9.00483%" y="14.5733%" width="100%" height="100%" fill="url(#Gradient3)" transform="rotate(139.903 50 50)"><animate attributeName="x" dur="25s" values="0%;25%;0%" repeatCount="indefinite"></animate><animate attributeName="y" dur="12s" values="0%;25%;0%" repeatCount="indefinite"></animate><animateTransform attributeName="transform" type="rotate" from="360 50 50" to="0 50 50" dur="13s" repeatCount="indefinite"></animateTransform>
		</rect>
		</svg>
	</div>
	<div class="grid-port-wrapper">
		<div class="grid-man pt-50">
			<div class="grid-man-intro">
				<h3 class="grid-man-greetings">Hi, I am</h3>
				<h2 class="grid-man-name">John Cena</h2>
				<h4 class="grid-man-qualities cd-headline clip">
					<span>Proffesional&nbsp;</span> 
					<span class="cd-words-wrapper">
						<b class="is-visible">It&nbsp;Expert</b>
						<b>Web&nbsp;Developer</b>
						<b>Wordpress&nbsp;Expert</b>
					</span>
				</h4>
			</div>
			<div class="grid-man-img mt-30">
				<img src="assets/img/people/grid-man.png" alt="John Cena">
			</div>
			<div class="grid-man-img-mobile mt-30">
				<div data-background="assets/img/people/grid-man-mobile.png" class="image"></div>
			</div>
		</div>
		<div class="grid-details">
			<div class="row">
				<div class="col-xl-6">
					<div class="grid-item mb-30 grid-item-about" id="grid-about">
						<h2 class="grid-title mb-15">About Me</h2>
						<h3 class="grid-subtitle">Something About Me</h3>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="grid-item mb-30 grid-item-portfolio" id="grid-portfolio">
						<h2 class="grid-title mb-15">My Portfolio</h2>
						<h3 class="grid-subtitle">Some of My works</h3>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="grid-item m-mb-30 grid-item-service" id="grid-service">
						<h2 class="grid-title mb-15">My Service</h2>
						<h3 class="grid-subtitle">Services I Provide</h3>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="grid-item m-mb-30 grid-item-contact" id="grid-contact">
						<h2 class="grid-title mb-15">Contact Me</h2>
						<h3 class="grid-subtitle">My Contact Information</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="grid-item-details" id="details-about">
		<!--=========|  About Section |=========-->
		<div class="about about-shape pt-100 about-parallax" id="about" data-relative-input="true">
			<span data-depth="1" class="layer triangle triangle-pictonblue triangle-1"><i class="flaticon-bleach"></i></span>
			<span data-depth="0.5" class="layer triangle triangle-royalblue triangle-2"><i class="flaticon-bleach"></i></span>
			<span data-depth="1" class="layer triangle triangle-heliotrope triangle-3"><i class="flaticon-bleach"></i></span>
			<span data-depth="0.8" class="layer triangle triangle-pictonblue triangle-4"><i class="flaticon-bleach"></i></span>
			<span data-depth="2" class="layer triangle triangle-dodgerblue triangle-5"><i class="flaticon-bleach"></i></span>

			<span data-depth="0.5" class="layer circle circle-pictonblue circle-1"></span>
			<span data-depth="2" class="layer circle circle-red circle-2"></span>
			<span data-depth="1" class="layer circle circle-pictonblue circle-3"></span>
			<span data-depth="0.8" class="layer circle circle-red circle-4"></span>
			<span data-depth="0.6" class="layer circle circle-pictonblue circle-5"></span>
			<span data-depth="0.5" class="layer circle circle-royalblue circle-6"></span>
			<span data-depth="0.9" class="layer circle circle-electricviolet circle-7"></span>

			<span data-depth="2" class="layer curveline curveline-alt curveline-1"></span>
			<span data-depth="0.5" class="layer curveline curveline-2"></span>
			<span data-depth="0.2" class="layer curveline curveline-3"></span>
			<span data-depth="2" class="layer curveline curveline-4"></span>

			<div class="container">
				<div class="about-wrapper">
					<div class="row">
						<div class="col-md-6">
							<div class="about-img">
								<img src="assets/img/people/about_img_prev.png" alt="About img">
							</div>
						</div>
						<div class="col-md-6">
							<div class="about-content">
								<div class="section-heading section-heading-about">
									<h2 class="section-title">About Me</h2>
									<h3 class="section-subtitle">Something About Me</h3>
								</div>
								<p class="about-text">Hello, This is <b>John Cena</b> a Proffesional Web Developer. I have been working more than 5 years as a Web Developer. I love to code for me and clients. I always deliver the projects before the deadline.I am expert in Front End Development, I do quality code in tricky way.</p>
								<div class="social-links">
									<ul>
										<li><a target="_blank" href="#" class="icofont-facebook"></a></li>
										<li><a target="_blank" href="#" class="icofont-vimeo"></a></li>
										<li><a target="_blank" href="#" class="icofont-behance"></a></li>
										<li><a target="_blank" href="#" class="icofont-deviantart"></a></li>
										<li><a target="_blank" href="#" class="icofont-dribble"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--=========|  Stats Section |=========-->
			<div class="stats stats-about" id="counters_one">
				<div class="container">
					<div class="stats-wrapper" data-background="assets/img/bg/stats_bg.png">
						<div class="row">
							<div class="col-3">
								<div class="stats-item">
									<div class="stats-icon">
										<i class="icofont-heart-eyes"></i>
									</div>
									<h3 class="counter stats-count" data-TargetNum="552" data-Speed="4000">0</h3>
									<span class="stats-name">Satisfied Clients</span>
								</div>
							</div>
							<div class="col-3">
								<div class="stats-item">
									<div class="stats-icon">
										<i class="icofont-bag-alt"></i>
									</div>
									<h3 class="counter stats-count" data-TargetNum="952" data-Speed="4000">0</h3>
									<span class="stats-name">Completed Projects</span>
								</div>
							</div>
							<div class="col-3">
								<div class="stats-item">
									<div class="stats-icon">
										<i class="icofont-man-in-glasses"></i>
									</div>
									<h3 class="counter stats-count" data-TargetNum="05" data-Speed="4000">0</h3>
									<span class="stats-name">Years Experience</span>
								</div>
							</div>
							<div class="col-3">
								<div class="stats-item">
									<div class="stats-icon">
										<i class="icofont-award"></i>
									</div>
									<h3 class="counter stats-count" data-TargetNum="221" data-Speed="4000">0</h3>
									<span class="stats-name">Awards Won</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--=========| / Stats Section |=========-->
		</div>
		<!--=========| / About Section |=========-->
		<!--=========|  Skill Section |=========-->
		<div class="skill-about skill-area-bg-dentist pt-200 pb-80" id="skill">
			<div class="container">
				<div class="skill-wrapper">
					<div class="section-heading section-heading-white">
						<h2 class="section-title">Skills</h2>
						<h3 class="section-subtitle">Take a look my skill area</h3>
						<p class="heading-text">This Parcentage are Base on My Personal Experience, And thease are accurate <br> and  I think you people’s are satisfied a lot of</p>
					</div>
					<div class="skill-area">
						<div class="skill-bars">
							<div class="row justify-content-center">
								<div class="col-lg-8 col-md-12">
									<!-- Single Skill -->
									<div class="skill-item skill-item-icon">
										<div class="skill-icon">
											<i class="icofont-interface"></i>
										</div>
										<h3>Front End Development</h3>
										<div class="progress">
											<div class="progress-bar" style="width:90%;"></div>
											<div class="progress-value">95%</div>
										</div>
									</div>
									<!-- Single Skill -->
									<div class="skill-item skill-item-icon">
										<div class="skill-icon">
											<i class="icofont-responsive"></i>
										</div>
										<h3>Responsive Design</h3>
										<div class="progress">
											<div class="progress-bar" style="width:100%;"></div>
											<div class="progress-value">100%</div>
										</div>
									</div>
									<!-- Single Skill -->
									<div class="skill-item skill-item-icon">
										<div class="skill-icon">
											<i class="icofont-code"></i>
										</div>
										<h3>Backend Developement</h3>
										<div class="progress">
											<div class="progress-bar" style="width:80%;"></div>
											<div class="progress-value">80%</div>
										</div>
									</div>
									<!-- Single Skill -->
									<div class="skill-item skill-item-icon">
										<div class="skill-icon">
											<i class="icofont-brand-wordpress"></i>
										</div>
										<h3>Wordpress</h3>
										<div class="progress">
											<div class="progress-bar" style="width:95%;"></div>
											<div class="progress-value">95%</div>
										</div>
									</div>
									<!-- Single Skill -->
									<div class="skill-item skill-item-icon">
										<div class="skill-icon">
											<i class="icofont-wall-clock"></i>
										</div>
										<h3>Time Management</h3>
										<div class="progress">
											<div class="progress-bar" style="width:100%;"></div>
											<div class="progress-value">100%</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--=========| / Skill Section |=========-->
		<!--=========|  Blog Section |=========-->
		<div class="blog pt-60 pb-100" id="blog">
			<div class="container">
				<div class="section-heading">
					<h2 class="section-title">Latest Blog</h2>
					<h3 class="section-subtitle">Sometimes I Write Somethink</h3>
				</div>
				<div class="blog-wrapper">
					<div class="row justify-content-center">
						<!-- Blog Single-->
						<div class="col-lg-4 col-md-6">
							<div class="blog-item">
								<a href="single.html" class="blog-thumb">
									<img src="assets/img/blog/blog_1.jpg" alt="blog image">
								</a>
								<div class="blog-content">
									<div class="author-time">
										<span class="author">by <a href="#">Kamla Babu</a></span>
										<a href="#" class="time">April 01, 2021</a>
									</div>
									<a href="single.html" class="blog-title">How to grow up your Business ?</a>
									<p class="blog-desc">Nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul.</p>
								</div>
								<a href="single.html" class="blog-btn gr-transition">See Details</a>
							</div>
						</div>
						<!-- Blog Single-->
						<div class="col-lg-4 col-md-6">
							<div class="blog-item">
								<a href="single.html" class="blog-thumb">
									<img src="assets/img/blog/blog_2.jpg" alt="blog image">
								</a>
								<div class="blog-content">
									<div class="author-time">
										<span class="author">by <a href="#">Kamla Babu</a></span>
										<a href="#" class="time">April 01, 2021</a>
									</div>
									<a href="single.html" class="blog-title">Why should you have a startup ?</a>
									<p class="blog-desc">Nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul.</p>
								</div>
								<a href="single.html" class="blog-btn gr-transition">See Details</a>
							</div>
						</div>
						<!-- Blog Single-->
						<div class="col-lg-4 col-md-6">
							<div class="blog-item">
								<a href="single.html" class="blog-thumb">
									<img src="assets/img/blog/blog_3.jpg" alt="blog image">
								</a>
								<div class="blog-content">
									<div class="author-time">
										<span class="author">by <a href="#">Kamla Babu</a></span>
										<a href="#" class="time">April 01, 2021</a>
									</div>
									<a href="single.html" class="blog-title">The importance of a quality UI Design</a>
									<p class="blog-desc">Nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul.</p>
								</div>
								<a href="single.html" class="blog-btn gr-transition">See Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--=========| / Blog Section |=========-->
		<!-- Close buttons -->
		<div class="return-home-btn mb-80">
			<button class="gr-btn gr-btn-2 gr-btn-2-r gr-transition return-home">Go Back to Home</button>
		</div>
		<button class="icofont-close-line close-details"></button>
	</div>

	<!--=========|  Portfolio Section |=========-->
	<div class="grid-item-details" id="details-portfolio">
		<div class="portfolio pt-60 pb-100" id="portfolio">
			<div class="container">
				<div class="portfolio-wrapper">
					<div class="section-heading">
						<h2 class="section-title">Portfolio</h2>
						<h3 class="section-subtitle">Some of my works</h3>
					</div>
					<div class="portfolio-area">
						<div class="portfolio-manu mb-40" data-filter="data-filter-group">
							<button class="filter-active port-btn port-btn-black" data-filter="*">All</button>
							<button class="port-btn port-btn-black" data-filter=".web">Web Design</button>
							<button class="port-btn port-btn-black" data-filter=".marketing">Marketing</button>
							<button class="port-btn port-btn-black" data-filter=".branding">Branding</button>
							<button class="port-btn port-btn-black" data-filter=".wp">Wordpress</button>
						</div>
						<div class="row all-projects" id="all-projects">
							<!-- Portfolio Single -->
							<div class="col-lg-4 col-md-6 project web">
								<div class="portfolio-item-dark">
									<div class="portfolio-thumb">
										<img src="assets/img/portfolio/port.jpg" alt="port 1">
									</div>
									<div class="portfolio-overlay"></div>
									<div class="portfolio-content">
										<h3 class="port-title"><a href="single-project.html">Package Design</a></h3>
										<div class="port-tags">
											<a href="#">Branding</a>,
											<a href="#">Design</a>,
											<a href="#">Marketing</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Portfolio Single -->
							<div class="col-lg-4 col-md-6 project branding">
								<div class="portfolio-item-dark">
									<div class="portfolio-thumb">
										<img src="assets/img/portfolio/port_2.jpg" alt="port 1">
									</div>
									<div class="portfolio-overlay"></div>
									<div class="portfolio-content">
										<h3 class="port-title"><a href="single-project.html">Shoping Bag Design</a></h3>
										<div class="port-tags">
											<a href="#">Branding</a>,
											<a href="#">Design</a>,
											<a href="#">Marketing</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Portfolio Single -->
							<div class="col-lg-4 col-md-6 project web wp">
								<div class="portfolio-item-dark">
									<div class="portfolio-thumb">
										<img src="assets/img/portfolio/port_3.jpg" alt="port 1">
									</div>
									<div class="portfolio-overlay"></div>
									<div class="portfolio-content">
										<h3 class="port-title"><a href="single-project.html">Article Writing</a></h3>
										<div class="port-tags">
											<a href="#">Branding</a>,
											<a href="#">Design</a>,
											<a href="#">Marketing</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Portfolio Single -->
							<div class="col-lg-4 col-md-6 project wp marketing">
								<div class="portfolio-item-dark">
									<div class="portfolio-thumb">
										<img src="assets/img/portfolio/port_4.jpg" alt="port 1">
									</div>
									<div class="portfolio-overlay"></div>
									<div class="portfolio-content">
										<h3 class="port-title"><a href="single-project.html">Coffee Mag Design</a></h3>
										<div class="port-tags">
											<a href="#">Branding</a>,
											<a href="#">Design</a>,
											<a href="#">Marketing</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Portfolio Single -->
							<div class="col-lg-4 col-md-6 project branding marketing">
								<div class="portfolio-item-dark">
									<div class="portfolio-thumb">
										<img src="assets/img/portfolio/port_5.jpg" alt="port 1">
									</div>
									<div class="portfolio-overlay"></div>
									<div class="portfolio-content">
										<h3 class="port-title"><a href="single-project.html">Leaflet Design</a></h3>
										<div class="port-tags">
											<a href="#">Branding</a>,
											<a href="#">Design</a>,
											<a href="#">Marketing</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Portfolio Single -->
							<div class="col-lg-4 col-md-6 project branding marketing">
								<div class="portfolio-item-dark">
									<div class="portfolio-thumb">
										<img src="assets/img/portfolio/port_6.jpg" alt="port 1">
									</div>
									<div class="portfolio-overlay"></div>
									<div class="portfolio-content">
										<h3 class="port-title"><a href="single-project.html">Marketing Branding</a></h3>
										<div class="port-tags">
											<a href="#">Branding</a>,
											<a href="#">Design</a>,
											<a href="#">Marketing</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Close buttons -->
			<div class="return-home-btn mt-80">
				<button class="gr-btn gr-btn-2 gr-btn-2-r gr-transition return-home">Go Back to Home</button>
			</div>
			<button class="icofont-close-line close-details"></button>
		</div>
	</div>
	<!--=========| / Portfolio Section |=========-->

	<!--=========|  Service Section |=========-->
	<div class="grid-item-details" id="details-service">
		<div class="service pt-60 pb-20" id="service">
			<div class="container">
				<div class="service-wrapper">
					<div class="section-heading">
						<h2 class="section-title">Services</h2>
						<h3 class="section-subtitle">My Services</h3>
					</div>
					<div class="service-area mt-80">
						<div class="row">
							<!-- Service Single -->
							<div class="col-lg-4 col-sm-6">
								<div class="service-item-dark service-item-grid">
									<div class="service-icon-dark">
										<i class="fas fa-laptop-code"></i>
									</div>
									<h3 class="service-title">Great web Design</h3>
									<p class="service-desc">Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit donec</p>
									<a href="single-service.html" class="btn-more">Read More</a>
								</div>
							</div>
							<!-- Service Single -->
							<div class="col-lg-4 col-sm-6">
								<div class="service-item-dark service-item-grid">
									<div class="service-icon-dark">
										<i class="fas fa-cogs"></i>
									</div>
									<h3 class="service-title">Core Development</h3>
									<p class="service-desc">Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit donec</p>
									<a href="single-service.html" class="btn-more">Read More</a>
								</div>
							</div>
							<!-- Service Single -->
							<div class="col-lg-4 col-sm-6">
								<div class="service-item-dark service-item-grid">
									<div class="service-icon-dark">
										<i class="icofont-brand-android-robot"></i>
									</div>
									<h3 class="service-title">Apps Development</h3>
									<p class="service-desc">Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit donec</p>
									<a href="single-service.html" class="btn-more">Read More</a>
								</div>
							</div>
							<!-- Service Single -->
							<div class="col-lg-4 col-sm-6">
								<div class="service-item-dark service-item-grid">
									<div class="service-icon-dark">
										<i class="fab fa-stack-overflow"></i>
									</div>
									<h3 class="service-title">Creative Design</h3>
									<p class="service-desc">Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit donec</p>
									<a href="single-service.html" class="btn-more">Read More</a>
								</div>
							</div>
							<!-- Service Single -->
							<div class="col-lg-4 col-sm-6">
								<div class="service-item-dark service-item-grid">
									<div class="service-icon-dark">
										<i class="icofont-chart-growth"></i>
									</div>
									<h3 class="service-title">Digital Maketing</h3>
									<p class="service-desc">Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit donec</p>
									<a href="single-service.html" class="btn-more">Read More</a>
								</div>
							</div>
							<!-- Service Single -->
							<div class="col-lg-4 col-sm-6">
								<div class="service-item-dark service-item-grid">
									<div class="service-icon-dark">
										<i class="fas fa-headset"></i>
									</div>
									<h3 class="service-title">Customer Support</h3>
									<p class="service-desc">Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit donec</p>
									<a href="single-service.html" class="btn-more">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Close buttons -->
			<div class="return-home-btn mb-80">
				<button class="gr-btn gr-btn-2 gr-btn-2-r gr-transition return-home">Go Back to Home</button>
			</div>
			<button class="icofont-close-line close-details"></button>
		</div>
	</div>
	<!--=========| / Service Section |=========-->

	<!--=========| Contact Section |=========-->
	<div class="grid-item-details" id="details-contact">
		<div class="contact pt-60 pb-100" id="contact">
			<div class="contact-wrapper mb-70">
				<div class="section-heading">
					<h2 class="section-title">Have Any Project</h2>
					<h3 class="section-subtitle">Contact</h3>
				</div>
				<div class="container contact-container contact-container-grid-port">
					<div class="row">
						<div class="col-lg-6">
							<div class="contact-map pt-30 pl-30">
								<h3 class="contact-title mb-15">Get Direction</h3>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d283832.7105047333!2d90.23224803786384!3d24.759860469604924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37564f1007ad9b59%3A0x79a59cb060e32d6c!2sMymensingh!5e0!3m2!1sen!2sbd!4v1619931628700!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>
						<div class="col-lg-6">
							<!-- Contact Box-->
							<div class="contact-box pt-30 pr-30 pb-10 mb-100">
								<h3 class="contact-title">Get in touch</h3>
								<form action="assets/message.php" method="POST" class="abias-form contact-form contact-form-grid">
									<!-- form message -->
									<div class="row">
										<div class="col-12">
											<div class="alert alert-success contact__msg" style="display: none" role="alert">
												Thank You, <b id="get-name"></b> Your message was sent successfully.
											</div>
										</div>
									</div>
									<!--  message -->
									<div class="row">
										<div class="col-md-6">
											<div class="field-area">
												<input name="name" type="text" id="name" class="" required>
												<label for="name">Your Name</label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="field-area">
												<input name="email" type="email" id="email" class="email" required>
												<label for="email">Your Email</label>
											</div>
										</div>
										<div class="col-12">
											<div class="field-area">
												<input name="subject" type="text" id="subject" class="" required>
												<label for="subject">Subject</label>
											</div>
										</div>
										<div class="col-12">
											<div class="field-area message-area">
												<textarea name="message" id="message" class="abias-field message-field" required></textarea>
												<label for="message">Message</label>
											</div>
										</div>
									</div>
									<div class="contact-btn mt-25">
										<button type="submit" class="gr-btn gr-btn-2 gr-transition msg-submit">Send Message <i class="icofont-caret-right"></i></button>
									</div>
								</form>
							</div>
							<!-- / Contact Box-->
							<div class="contact-subscribe pr-30 pb-10">
								<h3 class="subscribe-title mb-30">Stay updated</h3>
								<form method="POST" action="#" id="subscribe-form" class="subscribe-form subscribe-form-grid">
									<label for="sub-email"></label>
									<input type="email" name="email" id="sub-email" placeholder="Your E-mail" required>
									<button class="gr-btn gr-btn-2 gr-transition" type="submit" form="subscribe-form" value="Submit">Subscribe <i class="icofont-caret-right"></i></button>
								</form>
								<p class="subscribe-text">*We hate spamming, So don't worry about this. Feel free to subscribe our newsletter. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Close buttons -->
			<div class="return-home-btn mt-80">
				<button class="gr-btn gr-btn-2 gr-btn-2-r gr-transition return-home">Go Back to Home</button>
			</div>
			<button class="icofont-close-line close-details"></button>
		</div>
	</div>
	<!--=========| / Contact Section |=========-->

</section>

<!--=========| / Header End   |=========-->
<?php
    get_footer();
?>