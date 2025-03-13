<?php
    get_header();
?>
<body>
<!--=========| Preloader Start |=========-->
<div id="ftco-loader" class="show fullscreen pre-loader">
	<div class="loader-position">
		<img src="assets/img/preloader.gif" alt="Preloader">
	</div>
</div>
<!--=========| Preloader End   |=========-->

<!--=========|  404 Page |=========-->
<section class="not-found-page clearfix" data-background="<?php echo wp_get_attachment_url(26);?>">
	<div class="brand-name">
		<img src="assets/img/logo/logo_big.png" alt="logo">
	</div>
	<div class="container-fluid not-found-container">
		<div class="not-found-content pl-210">
			<div class="not-found-message">
				<h2 class="not-found-title">404</h2>
				<h3 class="message mb-25">Oups! Vous avez attérit dans l'espace au confeint de la galaxie.</h3>
				<p class="not-found-text mb-35">Pour revenir sur Terre, merci de suivre le liens.</p>
				<div class="return-home-btn">
					<a href="<?php echo home_url(); ?>" class="gr-btn gr-btn-2 gr-btn-2-r gr-transition">Retour sur Terre</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--=========| / 404 Page |=========-->
<?php
    get_footer();
?>