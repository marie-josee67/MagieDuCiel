<?php
/*
    Template Name: Contact
    Description: page de contact
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
<!--=========|  Main Content |=========-->
<main>
	<!--=========|  Blog Section |=========-->
	<section class="contact-page" id="contact-page">
		<div class="contact-page-wrapper z-index-2">
			<!--=========|  Map Section |=========-->
			<div class="contact-page-map">
				<div class="map" id="map">
					<div class="map-wrapper">
						<div class="map-location">
							<address>
								<?php the_field('adresse_carte'); ?>
							</address> 
						</div>
						<div class="map-contact">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d42472.43433206535!2d7.373760844319386!3d48.29271219902271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1742233168848!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
			<!--=========| / Map Section |=========-->

			<!--=========|  Contact form Section |=========-->
			<div class="container mt-100">
				<div class="row">
					<div class="col-md-6">
						<div class="subscribe-newsletter m-mb-30">
							<div class="subscribe coming-sub">
								<!-- <span class="form-subtitle mb-20 d-block">Newsletter</span>
								<h4 class="form-title mb-70">S'abonner</h4> -->
								<span class="form-subtitle mb-20 d-block"><?php the_field('titre_contact'); ?></span>
								<h4 class="form-title mb-70"><?php the_field('sous-titre_contact'); ?></h4>
								<form method="POST" action="#" id="subscribe-form" class="subscribe-form subscribe-form-contact">
									<label for="sub-email"></label>
									<input type="email" name="email" id="sub-email" placeholder="Votre E-mail" required>
									<button class="gr-btn gr-btn-blue" type="submit" form="subscribe-form" value="Submit"><?php the_field('texte_bouton_inscription'); ?><i class="icofont-caret-right"></i></button>
								</form>
								<!-- <p class="subscribe-text subscribe-text-contact">Soyez au courant des dernières infos ! </p> -->
								<p class="subscribe-text subscribe-text-contact"><?php the_field('texte_contact'); ?></p>
							</div>
							<div class="social-links social-links-dodgeblue mt-80">
								<!-- <h5 class="coming-social-titile mb-30">Réseaux sociaux</h5> -->
								<h5 class="coming-social-titile mb-30"><?php the_field('titre_reseaux_sociaux'); ?></h5>
								<ul class="social-list">
									<?php if (get_field('pinterest_url')) { ?>
										<li><a target="_blank" class="" href="<?php the_field('pinterest_url'); ?>"><?php the_field('pinterest_icone'); ?></a></li>
									<?php } ?>
									<?php if (get_field('facebook_url')) { ?>
										<li><a target="_blank" class="" href="<?php the_field('facebook_url'); ?>"><?php the_field('facebook_icone'); ?></a></li>
									<?php } ?>
									<?php if (get_field('twitter_url')) { ?>
										<li><a target="_blank" class="" href="<?php the_field('twitter_url'); ?>"><?php the_field('twitter_icone'); ?></a></li>
									<?php } ?>
									<?php if (get_field('instagram_url')) { ?>
										<li><a target="_blank" class="" href="<?php the_field('instagram_url'); ?>"><?php the_field('instagram_icone'); ?></a></li>
									<?php } ?>
									<?php if (get_field('linkedin_url')) { ?>
										<li><a target="_blank" class="" href="<?php the_field('linkedin_url'); ?>"><?php the_field('linkedin_icone'); ?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
					<!-- Subscribe End -->
					<div class="col-md-6">
						<!-- Contact Box-->
						<div class="contact-box contact-box-page mb-80">
							<!-- <h4 class="form-title mb-70">Formulaire de contact</h4> -->
							<h4 class="form-title mb-70"><?php the_field('titre_formulaire_de_contact'); ?></h4>
							<div class="row">
								<div class="col-12">
									<div class="alert alert-success contact__msg" style="display: none" role="alert">
										<!-- Bonjour, <b id="get-name"></b> Pour prendre contact avec la Magie du Ciel. -->
										<?php the_field('texte_formulaire_de_contact'); ?>
									</div>
								</div>
							</div>
							 <!-- formulaire -->
							  <div id="contact-form">
							  <?php echo do_shortcode('[contact-form-7 id="26bf25a" title="Formulaire de contact Magie Du Ciel"]'); ?>
 							</div>
						</div>
						<!-- / Contact -->
					</div>
				</div>
			</div>
			<!--=========| / Contact form Section |=========-->
		</div>
	</section>
	<!--=========| / Blog Section |=========-->
</main>
<!--=========|  Main Content |=========-->

<!-- code qui permet d'afficher le footer sur toutes les pages -->
<?php
    get_footer();
?>