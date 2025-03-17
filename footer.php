<!--=========|  Footer Section |=========-->
<footer class="footer footer-shape footer-shape-home1" id="footer">
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
									<?php if (get_field('pinterest_url')) { ?>
										<li><a target="_blank" href="<?php the_field('pinterest_url'); ?>">
											<?php 
												$pinterest_icone = get_field('pinterest_icone');
												if ($pinterest_icone) {
													echo $pinterest_icone; // Affiche l'icône 
												} else {
													echo '<i class="fab fa-pinterest"></i>'; // Icône par défaut 
												}
											?>
										</a></li>
									<?php } ?>
									
									<?php if (get_field('facebook_url')) { ?>
										<li><a target="_blank" href="<?php the_field('facebook_url'); ?>">
											<?php 
												$facebook_icone = get_field('facebook_icone');
												if ($facebook_icone) {
													echo $facebook_icone; 
												} else {
													echo '<i class="fab fa-facebook-f"></i>'; 
												}
											?>
										</a></li>
									<?php } ?>
									
									<?php if (get_field('twitter_url')) { ?>
										<li><a target="_blank" href="<?php the_field('twitter_url'); ?>">
											<?php 
												$twitter_icone = get_field('twitter_icone');
												if ($twitter_icone) {
													echo $twitter_icone; 
													echo '<i class="fab fa-twitter"></i>'; 
												}
											?>
										</a></li>
									<?php } ?>
									
									<?php if (get_field('instagram_url')) { ?>
										<li><a target="_blank" href="<?php the_field('instagram_url'); ?>">
											<?php 
												$instagram_icone = get_field('instagram_icone');
												if ($instagram_icone) {
													echo $instagram_icone; 
												} else {
													echo '<i class="fab fa-instagram"></i>'; 
												}
											?>
										</a></li>
									<?php } ?>
									
									<?php if (get_field('linkedin_url')) { ?>
										<li><a target="_blank" href="<?php the_field('linkedin_url'); ?>">
											<?php 
												$linkedin_icone = get_field('linkedin_icone');
												if ($linkedin_icone) {
													echo $linkedin_icone; 
												} else {
													echo '<i class="fab fa-linkedin-in"></i>'; 
												}
											?>
										</a></li>
									<?php } ?>
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