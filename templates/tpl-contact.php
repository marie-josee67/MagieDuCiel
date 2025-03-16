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
								Magie du Ciel <br>
								site internet
							</address> 
						</div>
						<div class="map-contact">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115835.00563776841!2d90.29484194250588!3d24.86917959513587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!3m2!1sen!2sbd!4v1617947216604!5m2!1sen!2sbd" width="600" height="530" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
								<span class="form-subtitle mb-20 d-block">Newsletter</span>
								<h4 class="form-title mb-70">S'abonner</h4>
								<form method="POST" action="#" id="subscribe-form" class="subscribe-form subscribe-form-contact">
									<label for="sub-email"></label>
									<input type="email" name="email" id="sub-email" placeholder="Votre E-mail" required>
									<button class="gr-btn gr-btn-blue" type="submit" form="subscribe-form" value="Submit">S'inscrire <i class="icofont-caret-right"></i></button>
								</form>
								<p class="subscribe-text subscribe-text-contact">Soyez au courant des dernières infos ! </p>
							</div>
							<div class="social-links social-links-dodgeblue mt-80">
								<h5 class="coming-social-titile mb-30">Réseaux sociaux</h5>
								<ul class="social-list">
									<li><a target="_blank" class="icofont-pinterest" href="#"></a></li>
									<li><a target="_blank" class="icofont-facebook" href="#"></a></li>
									<li><a target="_blank" class="icofont-twitter" href="#"></a></li>
									<li><a target="_blank" class="icofont-dribble" href="#"></a></li>
									<li><a target="_blank" class="icofont-behance" href="#"></a></li>
									<li><a target="_blank" class="icofont-linkedin" href="#"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Subscribe End -->
					<div class="col-md-6">
						<!-- Contact Box-->
						<div class="contact-box contact-box-page mb-80">
							<span class="form-subtitle mb-20 d-block">Formulaire de contact</span>
							<h4 class="form-title mb-70">Get in touch</h4>
							 <!-- formulaire -->
							  <?php echo do_shortcode('[contact-form-7 id="26bf25a" title="Formulaire de contact Magie Du Ciel"]'); ?>
							  <form action="assets/message.php" method="POST" class="abias-form contact-form contact-form-page">
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
 									<button type="submit" class="gr-btn gr-btn-blue msg-submit">Direction le Ciel<i class="icofont-caret-right"></i></button>
 								</div>
 							</form>
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