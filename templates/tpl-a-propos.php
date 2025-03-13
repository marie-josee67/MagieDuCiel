<?php
/*
    Template Name: A Propos
    Description: page a propos
*/

// code qui permet d'afficher le header
    get_header();
?>
	<!--  Breadcrumbs area start -->
	<div class="breadcrumbs-area breadcrumbs-area-innerpage" data-overlay="3" data-background="assets/img/bg/header-banner.jpg">
		<div class="container-fluid">
			<div class="page-title-area">
				<h2 class="page-title pt-70"><?php the_title(); ?></h2>
			</div>
			<div class="breadcrumbs">
				<ul class="breadcrumbs-list">
					<li><a href="<?php echo home_url(); ?>">Accueil</a></li>
					<li><a href="#">Pages</a></li>
					<li class="active"><a href="#"><?php the_title(); ?></a></li>
				</ul>
			</div>
		</div>
		<div id='stars'></div>
		<div id='stars2'></div>
		<div id='stars3'></div>
	</div>
	<!--  Breadcrumbs area end -->
</header>
<!--=========| / Header Section |=========-->
<!--=========| / Main Content |=========-->
<main>

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
					<div class="col-md-12">
						<div class="about-content">
							<div class="section-heading section-heading-about">
								<h2 class="section-title"><?php the_title(); ?></h2>
								<h3 class="section-subtitle">Site collaboratif</h3>
							</div>
							<p class="about-text">Passionner du ciel si vous êtes au courant d'un informations qui n'est pas encore resencer dit le nous!</p>
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
								<h3 class="counter stats-count" data-TargetNum="152" data-Speed="4000">0</h3>
								<span class="stats-name">Satifactions du site</span>
							</div>
						</div>
						<div class="col-3">
							<div class="stats-item">
								<div class="stats-icon">
									<i class="icofont-bag-alt"></i>
								</div>
								<h3 class="counter stats-count" data-TargetNum="72" data-Speed="4000">0</h3>
								<span class="stats-name">Évènement récencer</span>
							</div>
						</div>
						<div class="col-3">
							<div class="stats-item">
								<div class="stats-icon">
									<i class="icofont-man-in-glasses"></i>
								</div>
								<h3 class="counter stats-count" data-TargetNum="02" data-Speed="4000">0</h3>
								<span class="stats-name">Years Experience</span>
							</div>
						</div>
						<div class="col-3">
							<div class="stats-item">
								<div class="stats-icon">
									<i class="icofont-award"></i>
								</div>
								<h3 class="counter stats-count" data-TargetNum="321" data-Speed="4000">0</h3>
								<span class="stats-name">Partage d'info</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--=========| / Stats Section |=========-->
	</div>
	<!--=========| / About Section |=========-->

	<!--=========|  Service Section |=========-->
	<section class="service pt-160 pb-100" id="service">
		<div class="container">
			<div class="service-wrapper">
				<div class="section-heading">
					<h2 class="section-title">Service</h2>
					<h3 class="section-subtitle">Niveaux de service</h3>
				</div>
				<div class="row justify-content-center">
					<!-- Service Single -->
					<div class="col-lg-4 col-md-6">
						<div class="service-item gr-transition service-item-home1">
							<div class="service-icon">
								<i class="icofont-layers"></i>
							</div>
							<h4 class="service-title">Décend du ciel</h4>
							<p class="service-description">Lorem ipsum dolor sit eliti sed eiusm aliquam quaeratamrsonar banglay valobasi voluptatem.</p>
							<a href="#" class="service-btn">Read More</a>
						</div>
					</div>
					<!-- Service Single -->
					<div class="col-lg-4 col-md-6">
						<div class="service-item gr-transition service-item-home1">
							<div class="service-icon">
								<i class="icofont-interface"></i>
							</div>
							<h4 class="service-title">Ciel</h4>
							<p class="service-description">Lorem ipsum dolor sit eliti sed eiusm aliquam quaeratamrsonar banglay valobasi voluptatem.</p>
							<a href="#" class="service-btn">Read More</a>
						</div>
					</div>
					<!-- Service Single -->
					<div class="col-lg-4 col-md-6">
						<div class="service-item gr-transition service-item-home1">
							<div class="service-icon">
								<i class="icofont-code"></i>
							</div>
							<h4 class="service-title">Au dessus du ciel</h4>
							<p class="service-description">Lorem ipsum dolor sit eliti sed eiusm aliquam quaeratamrsonar banglay valobasi voluptatem.</p>
							<a href="#" class="service-btn">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=========| / Service Section |=========-->
	
	<!--=========|  Team Section |=========-->
	<section class="team pt-60 pb-100" id="team">
		<div class="container">
			<div class="portfolio-wrapper">
				<div class="section-heading">
					<h2 class="section-title">Team</h2>
					<h3 class="section-subtitle">This Project Done by Us</h3>
				</div>
				<div class="mb-20 overflow-hidden"></div>
				<div class="team-area">
					<div class="row justify-content-center">
						<!-- Single Team Member -->
						<div class="col-lg-4 col-md-6">
							<div class="team-item-area">
								<div class="team-pb-90"></div>
								<div class="team-img">
									<img src="assets/img/people/team_1.jpg" alt="member">
								</div>
								<div class="team-item">
									<div class="team-circle"></div>
									<div class="team-content">
										<h5 class="team-name">Alex Joss</h5>
										<h6 class="team-designation mb-20">Web Developer</h6>
										<p class="team-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
										<div class="team-social mb-30">
											<ul class="social-list">
												<li><a href="#" target="_blank" class="fab fa-facebook-f"></a></li>
												<li><a href="#" target="_blank" class="fab fa-twitter"></a></li>
												<li><a href="#" target="_blank" class="fab fa-skype"></a></li>
												<li><a href="#" target="_blank" class="fab fa-linkedin-in"></a></li>
											</ul>
										</div>
										<a href="#" class="simple-btn">View More</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Team Member -->
						<div class="col-lg-4 col-md-6">
							<div class="team-item-area">
								<div class="team-pb-90"></div>
								<div class="team-img">
									<img src="assets/img/people/team_2.jpg" alt="member">
								</div>
								<div class="team-item">
									<div class="team-circle"></div>
									<div class="team-content">
										<h5 class="team-name">Fred Rossy</h5>
										<h6 class="team-designation mb-20">UI/UX Designer</h6>
										<p class="team-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
										<div class="team-social mb-30">
											<ul class="social-list">
												<li><a href="#" target="_blank" class="fab fa-facebook-f"></a></li>
												<li><a href="#" target="_blank" class="fab fa-twitter"></a></li>
												<li><a href="#" target="_blank" class="fab fa-skype"></a></li>
												<li><a href="#" target="_blank" class="fab fa-linkedin-in"></a></li>
											</ul>
										</div>
										<a href="#" class="simple-btn">View More</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Team Member -->
						<div class="col-lg-4 col-md-6">
							<div class="team-item-area">
								<div class="team-pb-90"></div>
								<div class="team-img">
									<img src="assets/img/people/team_3.jpg" alt="member">
								</div>
								<div class="team-item">
									<div class="team-circle"></div>
									<div class="team-content">
										<h5 class="team-name">Goerge</h5>
										<h6 class="team-designation mb-20">IT Manger</h6>
										<p class="team-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
										<div class="team-social mb-30">
											<ul class="social-list">
												<li><a href="#" target="_blank" class="fab fa-facebook-f"></a></li>
												<li><a href="#" target="_blank" class="fab fa-twitter"></a></li>
												<li><a href="#" target="_blank" class="fab fa-skype"></a></li>
												<li><a href="#" target="_blank" class="fab fa-linkedin-in"></a></li>
											</ul>
										</div>
										<a href="#" class="simple-btn">View More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=========| / Team Section |=========-->

</main>
<!--=========|  Main Content |=========-->

<!-- code qui permet d'afficher le footer sur toutes les pages -->
<?php
    get_footer();
?>