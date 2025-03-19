<?php
    get_header();
?>
<body>


<!--=========|  404 Page |=========-->
<section class="not-found-page clearfix" data-background="<?php echo wp_get_attachment_url(26);?>">
	<div class="container-fluid not-found-container">
		<div class="not-found-content pl-210">
			<div class="not-found-message">
				<h2 class="not-found-title">404</h2>
				<h3 class="message mb-25">Oups ! Vous avez atterri dans l'espace au confins de la galaxie.</h3>
				<p class="not-found-text mb-35">Pour revenir sur Terre, merci de suivre le lien.</p>
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