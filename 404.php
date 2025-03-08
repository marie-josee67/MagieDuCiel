<?php
    /*
        Template Name: 404
        Description: page d'erreur 404
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

<!--=========|  404 Page |=========-->
<section class="not-found-page clearfix" data-background="assets/img/bg/style_bg.jpg">
	<div class="brand-name">
		<img src="assets/img/logo/logo_big.png" alt="logo">
	</div>
	<div class="container-fluid not-found-container">
		<div class="not-found-content pl-210">
			<div class="not-found-message" data-background="assets/img/bg/404_content_bg.png">
				<h2 class="not-found-title">404</h2>
				<h3 class="message mb-25">Sorry! The Page Not Found ;(</h3>
				<p class="not-found-text mb-35">The Link You Folowed Probably Broken, or the page has been removed.</p>
				<div class="return-home-btn">
					<a href="index.html" class="gr-btn gr-btn-2 gr-btn-2-r gr-transition">Return to Home</a>
				</div>
				<div class="not-found-contact-info">
					<div class="contact-info-item d-flex contact-info-item-one mb-15">
						<div class="contact-icon">
							<img src="assets/img/icon/message.png" alt="email icon">
						</div>
						<div class="contact-text">
							<h4><a href="mailto:infto@abias.com">infto@abias.com</a></h4>
							<span>Online Support</span>
						</div>
					</div>
					<div class="contact-info-item d-flex contact-info-item-two mb-15">
						<div class="contact-icon">
							<img src="assets/img/icon/phone.png" alt="email icon">
						</div>
						<div class="contact-text">
							<h4><a href="tel:+8801798001344">+8801798001344</a></h4>
							<span>Mon-Fri 9am-6pm</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
    get_footer();
?>