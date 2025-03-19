<!--=========|  Footer Section |=========-->
<footer class="footer footer-shape footer-shape-home1" id="footer" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/stats_bg.png">
	<div class="footer-wrapper">
		<div class="container">
			<div class="footer-widget-area pb-100">
				<div class="row">
					<!-- Single Wodget -->
					<div class="col-lg-4 col-sm-8">
						<div class="footer-widget footer-widget-about">
							<h4 class="footer-widget-title">Réseaux sociaux</h4>
							<div class="footer-widget-content">
								<ul class="footer-widget-social">
									<li><a target="_blank" href="https://fr.pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a></li>
									<li><a target="_blank" href="https://www.facebook.com/?locale=fr_FR%2F"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a target="_blank" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
									<li><a target="_blank" href="https://x.com/?lang=fr"><i class="fa-brands fa-x-twitter"></i></a></li>
									<li><a target="_blank" href="https://fr.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div>
					</div>	
				</div>
			</div>
			<!-- / Footer Widget area end-->
			<div class="copyright">

				<!-- dynamiser pour que l'année se met à jour automatiquement -->
				<p>&copy; <?php echo date('Y');?> |
				<!-- Mise en place pour le module de traduction -->
				<?php _e(' Tous droits réserver','traduction'); ?>
			</div>
		</div>
	</div>
</footer>
<!--=========| / Footer Section |=========-->

<!--=====| Back To Top |=====-->
<div class="scroll-top">
	<button>
		<i class="icofont-simple-up"></i>
	</button>
</div>
<?php 
    wp_footer();
?>
</body>
</html>