<?php
/*
    Template Name: Accueil
    Description: page d'accueil
*/

// code qui permet d'afficher le header
    get_header();
?>
<!--=========| / Main Content |=========-->
<main>
	<!--=========|  Home Section |=========-->
	<section class="home" id="home" data-background="<?php the_post_thumbnail_url();?>">
		<!-- Hero Section -->
		<div class="home-area">
			<div class="container">
				<div class="home-content">
					<div class="row hero-height align-items-center">
						<div class="col-12">
							<div class="hero-about hero-about-dark text-center">
								<h1 class="hero-name">Magie du ciel</h1>
								<h2 class="qualities cd-headline clip" >
										<span>Continuer</span> 
										<span class="cd-words-wrapper">
											<b class="is-visible">de&nbsp;rêver</b>
											<b>d'&nbsp;imaginer</b>
											<b>de&nbsp;ressentir</b>
											<b>de&nbsp;partager</b>
											<b>de lever&nbsp;les yeux</b>
										</span>
								</h2>
								<div class="hero-social">
									<ul class="social-list">
										<li><a target="_blank" href="#" class="icofont-skype"></a></li>
										<li><a target="_blank" href="#" class="icofont-twitter"></a></li>
										<li><a target="_blank" href="#" class="icofont-behance"></a></li>
										<li><a target="_blank" href="#" class="icofont-dribble"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- / Home Content -->
			</div>
		</div>
		<!-- / Hero Section -->
	</section>
	<!--=========| / Home Section |=========-->

	<!--=========|  About Section |=========-->
	<section class="about bg-dark pt-200 pb-200" id="about">
		<div class="container">
			<div class="about-wrapper z-index-2">
				<div class="row">
					<div class="col-lg-6 col-md-5">
						<div class="about-img about-img-dark">
							<img src="assets/img/Photos/auroreboreale/glacier.jpg" alt="About img">
						</div>
					</div>
					<div class="col-lg-6 col-md-7">
						<div class="about-content about-content-dark">
							<div class="section-heading section-heading-white section-heading-dark-about">
								<h2 class="section-title">A Propos</h2>
								<h3 class="section-subtitle">A propos de moi</h3>
							</div>
							<p class="about-text">Bonjour, <b>le ciel est magique</b> il nous fait rêver, imaginer, découvrir, se préparer au temps qui passe</p>
							<div class="about-btn mt-30">
								<a href="about-us.html" class="dark-btn">More<span></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=========| / About Section |=========-->

	<!--=========|  Experience Section |=========-->
	<section class="experience pt-60 pb-100" id="experience" data-background="assets/img/Photos/auroreboreale/village.jpg" data-overlay="9">
		<div class="container">
			<div class="experience-wrapper">
				<div class="section-heading section-heading-white">
					<h2 class="section-title">Les découvertes</h2>
					<h3 class="section-subtitle">de la nature</h3>
				</div>
				<div class="experience-area">
					<div class="row justify-content-around">
						<!-- Single Experience -->
						<div class="col-lg-9 col-md-12">
							<div class="experience-item mt-80">
								<div class="time ml-auto">2010</div>
								<div class="experience-icon">
									<i class="icofont-flora-flower"></i>
								</div>
								<div class="experience-details">
									<h3 class="experience-title">Le nombre d'etoiles</h3>
									<p class="experience-desc"> 5 000 étoiles sont visibles depuis la Terre. Mais tous dépend bien sur de différent facteurs: condition d'observation, de la période de l'année, de la pollution lumineuse ...</p>
								</div>
							</div>
						</div>
						<!-- Single Experience -->
						<div class="col-lg-9 col-md-12">
							<div class="experience-item experience-item-alt mt-80">
								<div class="experience-details text-right">
									<h3 class="experience-title">Le nombres de contellation</h3>
									<p class="experience-desc">88 constellations officiellement reconnues par l'Union Astronomique Internationale (UAI). Ces constellations couvrent l'ensemble du ciel visible depuis la Terre.</p>
								</div>
								<div class="experience-icon">
									<i class="icofont-bird"></i>
								</div>
								<div class="time">2025</div>
							</div>
						</div>
						<!-- Single Experience -->
						<div class="col-lg-9 col-md-12">
							<div class="experience-item mt-80">
								<div class="time ml-auto">2025</div>
								<div class="experience-icon">
									<i class="icofont-flora-flower"></i>
								</div>
								<div class="experience-details">
									<h3 class="experience-title">Le nombre de planètes</h3>
									<p class="experience-desc">8 planète formes notre système solaire.</p>
								</div>
							</div>
						</div>
						<!-- Single Experience -->
						<div class="col-lg-9 col-md-12">
							<div class="experience-item experience-item-alt mt-80">
								<div class="experience-details text-right">
									<h3 class="experience-title">le nombre d'émotions</h3>
									<p class="experience-desc">Les émotions resenti chaque jour en levant les yeux au ciel</p>
								</div>
								<div class="experience-icon">
									<i class="icofont-bird"></i>
								</div>
								<div class="time">infini</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=========| / Experience Section |=========-->

	<!--=========|  Service Section |=========-->
	<section class="service service-dark pt-60 pb-20" id="service" data-background="assets/img/bg/dark_service_bg.jpg" data-overlay="9">
		<div class="container">
			<div class="service-wrapper">
				<div class="section-heading section-heading-white">
					<h2 class="section-title">Blog</h2>
					<h3 class="section-subtitle">Mes Articles</h3>
				</div>
				<div class="service-area mt-80">
					<div class="row">
						<!-- Service Single -->
						<div class="col-lg-4 col-sm-6">
							<div class="service-item-dark">
								<div class="service-icon-dark">
									<i class="fas fa-laptop-code"></i>
								</div>
								<h3 class="service-title">Étoiles</h3>
								<p class="service-desc">Les 5 000 font partie de notre propre galaxie, la Voie lactée, mais il existe bien sûr des milliards d'autres étoiles qui sont invisibles à l'œil nu, même avec des télescopes puissants.</p>
								<a href="single-service.html" class="btn-more">Voir plus</a>
							</div>
						</div>
						<!-- Service Single -->
						<div class="col-lg-4 col-sm-6">
							<div class="service-item-dark">
								<div class="service-icon-dark">
									<i class="fas fa-cogs"></i>
								</div>
								<h3 class="service-title">Constellation</h3>
								<p class="service-desc">Elles sont utilisées pour diviser le ciel en différentes régions, facilitant ainsi l'orientation et l'étude des objets célestes. Certaines constellations sont visibles uniquement pendant certaines saisons ou depuis certains endroits de la Terre.</p>
								<a href="single-service.html" class="btn-more">Voir plus</a>
							</div>
						</div>
						<!-- Service Single -->
						<div class="col-lg-4 col-sm-6">
							<div class="service-item-dark">
								<div class="service-icon-dark">
									<i class="icofont-brand-android-robot"></i>
								</div>
								<h3 class="service-title">Les planètes</h3>
								<p class="service-desc">Autrefois, Pluton était considérée comme la neuvième planète, mais en 2006, l'Union Astronomique Internationale (UAI) a reclassé Pluton en tant que planète naine en raison de sa taille et de son orbite particulière.<br>
								En dehors de notre système solaire, on découvre également de nombreuses exoplanètes qui orbitent autour d'autres étoiles, mais dans notre système solaire, ce sont les huit planètes principales.s</p>
								<a href="single-service.html" class="btn-more">Voir plus</a>
							</div>
						</div>
						<!-- Service Single -->
						<div class="col-lg-4 col-sm-6">
							<div class="service-item-dark">
								<div class="service-icon-dark">
									<i class="fab fa-stack-overflow"></i>
								</div>
								<h3 class="service-title">La foudre</h3>
								<p class="service-desc">La foudre et les éclairs sont des phénomènes électriques spectaculaires qui se produisent lors des orages, et ils sont liés à des décharges électriques dans l'atmosphère.</p>
								<a href="single-service.html" class="btn-more">Voir plus</a>
							</div>
						</div>
						<!-- Service Single -->
						<div class="col-lg-4 col-sm-6">
							<div class="service-item-dark">
								<div class="service-icon-dark">
									<i class="icofont-chart-growth"></i>
								</div>
								<h3 class="service-title">Les nuages</h3>
								<p class="service-desc">Les nuages sont des masses de vapeur d'eau ou de cristaux de glace en suspension dans l'atmosphère. Ils se forment lorsque l'air humide se refroidit, permettant à la vapeur d'eau de se condenser en minuscules gouttes ou cristaux. Ces gouttes ou cristaux sont si petits qu'ils restent en suspension dans l'air.</p>
								<a href="single-service.html" class="btn-more">Voir plus</a>
							</div>
						</div>
						<!-- Service Single -->
						<div class="col-lg-4 col-sm-6">
							<div class="service-item-dark">
								<div class="service-icon-dark">
									<i class="fas fa-headset"></i>
								</div>
								<h3 class="service-title">Les arc-en-ciel</h3>
								<p class="service-desc">Les arc-en-ciel sont des phénomènes optiques et météorologiques fascinants, généralement observés après une pluie, lorsqu'il y a de la lumière du soleil et des gouttes d'eau en suspension dans l'air. Ils se forment lorsque la lumière est réfractée, réfléchie et dispersée à travers les gouttes d'eau.</p>
								<a href="single-service.html" class="btn-more">Voir plus</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=========| / Service Section |=========-->

	<!--=========|  Skill Section |=========-->
	<section class="skill-dark bg-dark bg-dots pt-60 pb-80" id="skill">
		<div class="container">
			<div class="skill-wrapper">
				<div class="section-heading section-heading-white">
					<h2 class="section-title">L'Univers</h2>
					<h3 class="section-subtitle">On est si petit </h3>
					<p class="heading-text">Un grain de sable dans limanciter du temps et de l'espace. Nous ne somme qu'une ombre face à l'infini!</p>
				</div>
				
			</div>
		</div>
		<div class="skill-dots skill-dots-left">
			<img src="assets/img/shapes/skill_dots_left.png" alt="">
		</div>
		<div class="skill-dots skill-dots-right">
			<img src="assets/img/shapes/skill_dots_left.png" alt="">
		</div>
	</section>
	<!--=========| / Skill Section |=========-->

	<!--=========|  Feedback Section |=========-->
	<section class="feedback feedback-dark pt-60 pb-100" id="feedback" data-background="assets/img/bg/feedback_bg.jpg" data-overlay="9">
		<div class="container">
			<div class="feedback-wrapper">
				<div class="section-heading section-heading-white">
					<h2 class="section-title">Commentaires</h2>
					<h3 class="section-subtitle">avis</h3>
				</div>
				<div class="feedback-area">
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-12 feedback-slides">
							<!-- Feedback Single -->
							<div class="feedback-item">
								<div class="feedback-thumb">
									<img src="assets/img/Photos/Planetes/pexels-kalpseh-panel-13333170-3542314.jpg" alt="client">
								</div>
								<div class="feedback-client-profile">
									<h5 class="client-name">John Hafty</h5>
									<div class="client-designation">Amateur</div>
								</div>
								<p class="client-comment">J'ai vue la lune orange cette nuit du 10 juillet 2024. Sa nuance de couleur était magnifique et que dire de sa taille si prêt de la Terre.</p>
							</div>
							<!-- Feedback Single -->
							<div class="feedback-item">
								<div class="feedback-thumb">
									<img src="assets/img/Photos/Univers/nasa--hl5dX2ObAs-unsplash.jpg" alt="client">
								</div>
								<div class="feedback-client-profile">
									<h5 class="client-name">AstroUnivers</h5>
									<div class="client-designation">novice</a></div>
									
								</div>
								<p class="client-comment">J'ai acheter un télescope pour voir l'étoile filante, je découvre l'univers de l'espace.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=========| / Feedback Section |=========-->

	<!--=========|  Fun Fact Section |=========-->
	<section class="funfact bg-dark" id="funfact">
		<div class="container-fluid">
			<div class="funfact-wrapper z-index-2" id="counters_two">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="funfact-item">
							<h3 class="fun-count counter" data-TargetNum="5000" data-Speed="6000">0</h3>
							<h5 class="fun-name">Étoiles</h5>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="funfact-item">
							<h3 class="fun-count counter" data-TargetNum="88" data-Speed="6000">0</h3>
							<h5 class="fun-name">Constellation</h5>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="funfact-item">
							<h3 class="fun-count counter" data-TargetNum="8" data-Speed="6000">0</h3>
							<h5 class="fun-name">Planètes</h5>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="funfact-item">
							<h3 class="fun-count counter" data-TargetNum="700" data-Speed="6000">0</h3>
							<h5 class="fun-name">Émotion ressentit en 1 an</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=========| / Fun Fact Section |=========-->

	<!--=========|  Blog Section |=========-->
	<section class="blog blog-dark pt-60 pb-100" id="blog" data-background="assets/img/bg/dark_blog_bg.jpg" data-overlay="8">
		<div class="container">
			<div class="blog-wrapper">
				<div class="section-heading section-heading-white">
					<h2 class="section-title">Blog</h2>
					<h3 class="section-subtitle">Articles</h3>
				</div>
				<div class="blog-area">
					<div class="row justify-content-center">
						<!-- Blog Item Single -->
						<div class="col-lg-4 col-md-6">
							<div class="blog-item-dark">
								<a href="single.html" class="blog-thumb">
									<img src="assets/img/Photos/Planetes/Photos/Systeme_solaire_2.png" alt="blog image">
								</a>
								<div class="blog-content-area">
									<div class="blog-contents">
										<div class="blog-tags">
											<a href="#">Planètes</a>
										</div>
										<a href="single.html" class="blog-title">Il y a 8 planètes dans notre système solaire!</a>
										<p class="blog-desc"> Elles sont, par ordre de proximité au Soleil : Mercure, Vénus, Terre, Mars, Jupiter, Saturne, Uranus, Neptune . 
										<br>
										Autrefois, Pluton était considérée comme la neuvième planète, mais en 2006, l'Union Astronomique Internationale (UAI) a reclassé Pluton en tant que planète naine en raison de sa taille et de son orbite particulière.
										<br>
										En dehors de notre système solaire, on découvre également de nombreuses exoplanètes qui orbitent autour d'autres étoiles, mais dans notre système solaire, ce sont les huit planètes principales.</p>
										<div class="blog-btn">
											<a href="single.html" class="btn-more btn-more-2">Voir plus</a>
										</div>
									</div>
									<div class="blog-meta d-flex">
										<div class="blog-author">
											<a href="#" class="author-avator">
												<img src="assets/img/people/author.png" alt="auhtor">
											</a>
											<a href="#" class="author-name">Mr ExpertEspace</a>
										</div>
										<a href="#" class="blog-date ml-auto">12/03/20025</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Blog Item Single -->
						<div class="col-lg-4 col-md-6">
							<div class="blog-item-dark">
								<a href="single.html" class="blog-thumb">
									<img src="assets/img/blog/dark_blog_2.jpg" alt="blog image">
								</a>
								<div class="blog-content-area">
									<div class="blog-contents">
										<div class="blog-tags">
											<a href="#">Contellation/a>
										</div>
										<a href="single.html" class="blog-title">Il y a 88 constellations officiellement reconnues par l'Union Astronomique Internationale (UAI)</a>
										<p class="blog-desc">. Ces constellations couvrent l'ensemble du ciel visible depuis la Terre. Certaines sont bien connues, comme le Grand Chariot (partie de la constellation de la Grande Ourse) ou Orion, tandis que d'autres sont moins familières.
										<br>
										Les constellations sont utilisées pour diviser le ciel en différentes régions, facilitant ainsi l'orientation et l'étude des objets célestes. Certaines constellations sont visibles uniquement pendant certaines saisons ou depuis certains endroits de la Terre.</p>
										<div class="blog-btn">
											<a href="single.html" class="btn-more btn-more-2">Read More</a>
										</div>
									</div>
									<div class="blog-meta d-flex">
										<div class="blog-author">
											<a href="#" class="author-avator">
												<img src="assets/img/people/author.png" alt="auhtor">
											</a>
											<a href="#" class="author-name">Mlle PetiteOurse</a>
										</div>
										<a href="#" class="blog-date ml-auto">01/12/2024</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Blog Item Single -->
						<div class="col-lg-4 col-md-6">
							<div class="blog-item-dark">
								<a href="single.html" class="blog-thumb">
									<img src="assets/img/blog/dark_blog_3.jpg" alt="blog image">
								</a>
								<div class="blog-content-area">
									<div class="blog-contents">
										<div class="blog-tags">
											<a href="#">Foudre</a>
										</div>
										<a href="single.html" class="blog-title">Formation de la foudre !</a>
										<p class="blog-desc">Dans les nuages d'orage, les gouttes d'eau et les cristaux de glace se déplacent et se frottent les uns contre les autres, ce qui génère une accumulation de charges électriques. Les charges négatives (électrons) s'accumulent à la base du nuage, tandis que les charges positives se concentrent à la partie supérieure du nuage. 
										<br>
										Cela crée une différence de potentiel électrique très forte. Quand cette différence devient trop grande, l'air, qui est normalement un isolant, se décharge soudainement sous forme de foudre.</p>
										<div class="blog-btn">
											<a href="single.html" class="btn-more btn-more-2">Read More</a>
										</div>
									</div>
									<div class="blog-meta d-flex">
										<div class="blog-author">
											<a href="#" class="author-avator">
												<img src="assets/img/people/author.png" alt="auhtor">
											</a>
											<a href="#" class="author-name">Mme Foudreuse</a>
										</div>
										<a href="#" class="blog-date ml-auto">24/02/2025</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=========| / Blog Section |=========-->

</main>
<!--=========|  Main Content |=========-->

<!-- code qui permet d'afficher le footer sur toutes les pages -->
<?php
    get_footer();
?>