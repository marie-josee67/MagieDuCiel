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
								<!-- <h1 class="hero-name">Magie du ciel</h1> -->
								<h1 class="hero-name"><?php the_field('nom_du_site'); ?></h1>
								<h2 class="qualities cd-headline clip" >
										<!-- <span>Continuer</span> 
										<span class="cd-words-wrapper">
											<b class="is-visible">de&nbsp;rêver</b>
											<b>d'&nbsp;imaginer</b>
											<b>de&nbsp;ressentir</b>
											<b>de&nbsp;partager</b>
											<b>de lever&nbsp;les yeux</b>
										</span> -->
										<span><?php the_field('verbe'); ?></span>
										<span class="cd-words-wrapper">
											<b class="is-visible"><?php the_field('message_1'); ?></b>
											<b><?php the_field('message_2'); ?></b>
											<b><?php the_field('message_3'); ?></b>
											<b><?php the_field('message_4'); ?></b>
											<b><?php the_field('message_5'); ?></b>
										</span>
								</h2>
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

	<!--=========|  About Section - A propos |=========-->
	<section class="about bg-dark pt-200 pb-200" id="about">
		<div class="container">
			<div class="about-wrapper z-index-2">
				<div class="row">
					<div class="col-lg-6 col-md-5">
						<div class="about-img about-img-dark">
							<img src="<?php the_field('image'); ?>" alt="About img">
						</div>
					</div>
					<div>
						<div class="about-content about-content-dark">
							<!-- <div class="section-heading section-heading-white section-heading-dark-about">
								<h2 class="section-title">A Propos</h2>
								<h3 class="section-subtitle">A propos de moi</h3>
							</div>
							<p class="about-text">Bonjour, <b>le ciel est magique</b> il nous fait rêver, imaginer, découvrir, se préparer au temps qui passe</p> -->
							<div class="section-heading section-heading-white section-heading-dark-about">
								<h2 class="section-title"><?php the_field('titre_a_propos'); ?></h2>
								<h3 class="section-subtitle"><?php the_field('sous-titre_a_propos'); ?></h3>
							</div>
							<p class="about-text"><?php the_field('texte'); ?></p>

							<div class="about-btn mt-30">
								<!-- rajout du lien de la page avec son ID -->
								<a href="<?php echo get_permalink(14); ?>" class="dark-btn"><?php the_field('bouton_a_propos'); ?><span></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=========| / About Section |=========-->

	<!--=========|  Experience Section |=========-->
	<section class="experience pt-60 pb-100" id="experience" data-background="/assets/img/bg/dark_experience_bg.jpgg" data-overlay="9">
		<div class="container">
			<div class="experience-wrapper">
				<div class="section-heading section-heading-white">
					<!-- <h2 class="section-title">Les découvertes</h2>
					<h3 class="section-subtitle">de la nature</h3> -->
					<h2 class="section-title"><?php the_field('titre_experience'); ?></h2>
					<h3 class="section-subtitle"><?php the_field('sous-titre_experience'); ?></h3>
				</div>
				<div class="experience-area">
					<div class="row justify-content-around">
						<!-- Single Experience -->
						<div class="col-lg-9 col-md-12">
							<div class="experience-item mt-80">
								<div class="time ml-auto"><?php the_field('chiffre_experience_1'); ?></div>
								<div class="experience-icon">
									<i class="<?php the_field('icone_experience_1'); ?>"></i>
								</div>
								<div class="experience-details">
									<h3 class="experience-title"><?php the_field('titre_experience_1'); ?></h3>
									<p class="experience-desc"> <?php the_field('texte_experience_1'); ?></p>
								</div>
								<!-- <div class="experience-details">
									<h3 class="experience-title">Le nombre d'étoiles</h3>
									<p class="experience-desc">Visibles depuis la Terre, mais tout dépend bien sûr de différents facteurs.</p>
								</div> -->
							</div>
						</div>
						<!-- Single Experience -->
						<div class="col-lg-9 col-md-12">
							<div class="experience-item experience-item-alt mt-80">
								<div class="experience-details text-right">
									<h3 class="experience-title"><?php the_field('titre_experience_2'); ?></h3>
									<p class="experience-desc"><?php the_field('texte_experience_2'); ?></p>
								</div>
								<!-- <div class="experience-details text-right">
									<h3 class="experience-title">Le nombre de constellations</h3>
									<p class="experience-desc">Officiellement reconnues par l'Union Astronomique Internationale.</p>
								</div> -->
								<div class="experience-icon">
									<i class="<?php the_field('icone_experience_2'); ?>"></i>
								</div>
								<div class="time"><?php the_field('chiffre_expericence_2'); ?></div>
							</div>
						</div>
						<!-- Single Experience -->
						<div class="col-lg-9 col-md-12">
							<div class="experience-item mt-80">
								<div class="time ml-auto"><?php the_field('chiffre_experience_3'); ?></div>
								<div class="experience-icon">
									<i class="<?php the_field('icone_experience_3'); ?>"></i>
								</div>
								<div class="experience-details">
									<h3 class="experience-title"><?php the_field('titre_experience_3'); ?></h3>
									<p class="experience-desc"><?php the_field('texte_experience_3'); ?></p>
									<!-- <h3 class="experience-title">Le nombre de planètes</h3>
									<p class="experience-desc">Elles forment notre système solaire.</p> -->
								</div>
							</div>
						</div>
						<!-- Single Experience -->
						<div class="col-lg-9 col-md-12">
							<div class="experience-item experience-item-alt mt-80">
								<div class="experience-details text-right">
									<h3 class="experience-title"><?php the_field('titre_experience_4'); ?></h3>
									<p class="experience-desc"><?php the_field('texte_experience_4'); ?></p>
									<!-- <h3 class="experience-title">Le nombre d'émotions</h3>
									<p class="experience-desc">Les émotions ressenties chaque jour en levant les yeux au ciel.</p>-->
								</div>
								<div class="experience-icon">
									<i class="<?php the_field('icone_experience_4'); ?>"></i>
								</div>
								<div class="time"><?php the_field('chiffre_experience_4'); ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=========| / Experience Section |=========-->

	<!--=========|  Service Section - blog |=========-->
	<section class="service service-dark pt-60 pb-20" id="service" data-background="/assets/img/bg/dark_service_bg.jpg" data-overlay="9">
		<div class="container">
			<div class="service-wrapper">
				<div class="section-heading section-heading-white">
					<!-- <h2 class="section-title">Blog</h2>
					<h3 class="section-subtitle">Mes Articles</h3> -->
					<h2 class="section-title"><?php the_field('titre_service'); ?></h2>
					<h3 class="section-subtitle"><?php the_field('sous-titre_service'); ?></h3>
				</div>
				<div class="service-area mt-80">
					<div class="row">
						<!-- Service Single -->
						<div class="col-lg-4 col-sm-6">
						<?php 
							// création d'une varaible pour stocker les données de la BDD
							$the_query = new WP_Query(array(
								'posts_per_page' => 6, // seulement 6 articles
								'post_type' =>'article',
								'orderby' => 'rand',
							));
								// On teste si des données sont retournées par la requêtes SQL
								if ($the_query->have_posts() ) {
								// s'il y a des données, on boucle dessus
								while($the_query->have_posts()) {$the_query->the_post();
						?>
							<div class="service-item-dark">
								<div class="service-icon-dark">
									<i class="fas fa-laptop-code"></i>
								</div>
								<h3 class="service-title"><?php the_title(); ?></h3>
								<?php  the_excerpt()?>
								<a href="<?php the_permalink(); ?>" class="blog-btn gr-transition"><?php the_field('texte_bouton'); ?></a>
							</div>
						</div>
						<?php 
							// fermeture du while
							} 
							wp_reset_postdata();
							// fermeture du if
							}
							// si la boucle ne retourne rien afficher se texte 
							else { 
						?>
						<!-- Il n'y a aucune actualité pour le moment -->
						<?php the_field('texte_de_secour'); ?>
						<?php 
							} 
						?>
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
					<!-- <h2 class="section-title">L'Univers</h2>
					<h3 class="section-subtitle">On est si petit </h3>
					<p class="heading-text">Un grain de sable dans l'immensité du temps et de l'espace. Nous ne sommes qu'une ombre face à l'infini !</p> -->
					<h2 class="section-title"><?php the_field('titre_message'); ?></h2>
					<h3 class="section-subtitle"><?php the_field('sous-titre_message'); ?></h3>
					<p class="heading-text"><?php the_field('texte_message'); ?></p>
				</div>
				
			</div>
		</div>
		<div class="skill-dots skill-dots-left">
			<img src="<?php the_field('image_1'); ?>" alt="">
		</div>
		<div class="skill-dots skill-dots-right">
			<img src="<?php the_field('image_2'); ?>" alt="">
		</div>
	</section>
	<!--=========| / Skill Section |=========-->

	<!--=========|  Feedback Section - commentaire |=========-->
	<section class="feedback feedback-dark pt-60 pb-100" id="feedback" 
    data-background="<?php the_field('background_image'); ?>" 
    data-overlay="<?php the_field('overlay_color'); ?>">
    <div class="container">
        <div class="feedback-wrapper">
            <div class="section-heading section-heading-white">
                <h2 class="section-title"><?php the_field('titre_commentaire'); ?></h2>
                <h3 class="section-subtitle"><?php the_field('sous-titre_commentaire'); ?></h3>
            </div>
            <div class="feedback-area">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12 feedback-slides">
                        <?php 
                        // Récupérer les commentaires des clients
                        if( have_rows('commentaire_client') ): 
                            while( have_rows('commentaire_client') ): the_row(); 
                        ?>
                        <!-- Feedback Single -->
                        <div class="feedback-item">
                            <div class="feedback-thumb">
                                <img src="<?php the_sub_field('image_client'); ?>" alt="client">
                            </div>
                            <div class="feedback-client-profile">
                                <h5 class="client-name"><?php the_sub_field('nom_client'); ?></h5>
                                <div class="client-designation"><?php the_sub_field('grade_client'); ?></div>
                            </div>
                            <p class="client-comment"><?php the_sub_field('message_client'); ?></p>
                        </div>
                        <!-- Feedback Single -->
                        <?php 
							endwhile; 
							endif; 
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

	<!--=========| / Feedback Section |=========-->
</main>
<!--=========|  Main Content |=========-->

<!-- code qui permet d'afficher le footer sur toutes les pages -->
<?php
    get_footer();
?>