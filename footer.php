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
									<li><a target="_blank" class="icofont-facebook" href="#"></a></li>
									<li><a target="_blank" class="icofont-vimeo" href="#"></a></li>
									<li><a target="_blank" class="icofont-twitter" href="#"></a></li>
									<li><a target="_blank" class="icofont-pinterest" href="#"></a></li>
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