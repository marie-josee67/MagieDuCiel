<?php
/*
    Template Name: A Propos
    Description: page a propos
*/

// code qui permet d'afficher le header
    get_header();
?>
	<!--  Breadcrumbs area start -->
	<div class="breadcrumbs-area breadcrumbs-area-innerpage" data-overlay="3" data-background="<?php the_post_thumbnail_url();?>">
		<div class="container-fluid">
			<div class="page-title-area">
				<h2 class="page-title pt-70"><?php the_title(); ?></h2>
			</div>
			<div class="breadcrumbs">
				<ul class="breadcrumbs-list">
					<li><a href="<?php echo home_url(); ?>">Accueil</a></li>
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
								<!-- <h3 class="section-subtitle">Site collaboratif</h3> -->
								<h3 class="section-subtitle"><?php the_field('sous-titre');?></h3>
							</div>
							<!-- <p class="about-text">Passionner du ciel, si vous êtes au courant d'une informations qui n'est pas encore resencer dit le nous!</p> -->
							<p class="about-text"><?php the_field('texte');?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--=========|  Statistique |=========-->
		<div class="stats stats-about" id="counters_one">
			<div class="container">
				<div class="stats-wrapper" data-background="/assets/img/bg/stats_bg.png">
					<div class="row">
						<div class="col-3">
							<div class="stats-item">
								<div class="stats-icon">
									<i class="<?php the_field('icone_1'); ?>"></i>
								</div>
								<!-- <h3 class="counter stats-count" data-TargetNum="152" data-Speed="4000">0</h3>
								<span class="stats-name">Satifactions du site</span> -->
								<h3 class="counter stats-count" data-TargetNum="<?php the_field('chiffre_1'); ?>" data-Speed="4000">0</h3>
								<span class="stats-name"><?php the_field('texte_1'); ?></span>
							</div>
						</div>
						<div class="col-3">
							<div class="stats-item">
								<div class="stats-icon">
									<i class="<?php the_field('icone_2'); ?>"></i>
								</div>
								<!-- <h3 class="counter stats-count" data-TargetNum="72" data-Speed="4000">0</h3>
								<span class="stats-name">Évènement récencer</span> -->
								<h3 class="counter stats-count" data-TargetNum="<?php the_field('chiffre_2'); ?>" data-Speed="4000">0</h3>
								<span class="stats-name"><?php the_field('texte_2'); ?></span>
							</div>
						</div>
						<div class="col-3">
							<div class="stats-item">
								<div class="stats-icon">
									<i class="<?php the_field('icone_3'); ?>"></i>
								</div>
								<!-- <h3 class="counter stats-count" data-TargetNum="02" data-Speed="4000">0</h3>
								<span class="stats-name">Années d'expérience</span> -->
								<h3 class="counter stats-count" data-TargetNum="<?php the_field('chiffre_3'); ?>" data-Speed="4000">0</h3>
								<span class="stats-name"><?php the_field('texte_3'); ?></span>
							</div>
						</div>
						<div class="col-3">
							<div class="stats-item">
								<div class="stats-icon">
									<i class="<?php the_field('icone_4'); ?>"></i>
								</div>
								<!-- <h3 class="counter stats-count" data-TargetNum="321" data-Speed="4000">0</h3>
								<span class="stats-name">Partage d'info</span> -->
								<h3 class="counter stats-count" data-TargetNum="<?php the_field('chiffre_4'); ?>" data-Speed="4000">0</h3>
								<span class="stats-name"><?php the_field('texte_4'); ?></span>

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
					<!-- <h2 class="section-title">Service</h2>
					<h3 class="section-subtitle">Niveaux de service</h3> -->
					<h2 class="section-title"><?php the_field('titre'); ?></h2>
					<h3 class="section-subtitle"><?php the_field('sous-titre'); ?></h3>
				</div>
				<div class="row justify-content-center">
					<!-- Service Single -->
					<div class="col-lg-4 col-md-6">
						<div class="service-item gr-transition service-item-home1">
							<div class="<?php the_field('icone_service_1'); ?>">
								<i class="icofont-layers"></i>
							</div>
							<!-- <h4 class="service-title">Décend du ciel</h4>
							<p class="service-description">Se qui va du ciel vers le sol de notre planète</p>
							<a href="#" class="service-btn">Voir plus</a> -->
							<h4 class="service-title"><?php the_field('titre_service_1'); ?></h4>
							<p class="service-description"><?php the_field('texte_service_1'); ?></p>
							<a href="<?php the_field('url_service_1'); ?>" class="service-btn">Voir plus<?php the_field('bouton_service_1'); ?></a>
						</div>
					</div>
					<!-- Service Single -->
					<div class="col-lg-4 col-md-6">
						<div class="service-item gr-transition service-item-home1">
							<div class="<?php the_field('icone_service_2'); ?>">
								<i class="icofont-interface"></i>
							</div>
							<!-- <h4 class="service-title">Ciel</h4>
							<p class="service-description">Ce qui se passe au niveau du ciel.</p>
							<a href="#" class="service-btn">Voir plus</a> -->
							<h4 class="service-title"><?php the_field('titre_service_2'); ?></h4>
							<p class="service-description"><?php the_field('texte_service_2'); ?></p>
							<a href="<?php the_field('url_service_2'); ?>" class="service-btn">Voir plus<?php the_field('bouton_service_2'); ?></a>
						</div>
					</div>
					<!-- Service Single -->
					<div class="col-lg-4 col-md-6">
						<div class="service-item gr-transition service-item-home1">
							<div class="<?php the_field('icone_service_3'); ?>">
								<i class="icofont-code"></i>
							</div>
							<!-- <h4 class="service-title">Au dessus du ciel</h4>
							<p class="service-description">Ce qui se passe hors du ciel de notre planète dans l'espace.</p>
							<a href="#" class="service-btn">Voir plus</a> -->
							<h4 class="service-title"><?php the_field('titre_service_3'); ?></h4>
								<p class="service-description"><?php the_field('texte_service_3'); ?></p>
								<a href="<?php the_field('url_service_3_'); ?>" class="service-btn">Voir plus<?php the_field('bouton_service_3'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=========| / Service Section |=========-->
	
</main>
<!--=========|  Main Content |=========-->

<!-- code qui permet d'afficher le footer sur toutes les pages -->
<?php
    get_footer();
?>