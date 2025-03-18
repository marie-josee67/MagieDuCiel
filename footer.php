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

									<!-- <?php var_dump (get_field('reseaux_sociaux')); ?> -->

									<!-- boucle de répéteur pour les réseaux sociaux -->
									<?php 

										// vérification des datas dans le répéteur
										if (have_rows('reseaux_sociaux')):

										// on boucle tant qu'il y a des éléments
										while (have_rows('reseaux_sociaux')) : the_row();
									?>
										<li>
											<a target="_blank" class="" href="<?php the_sub_field('adresse_du_reseau_social') ?>"><?php the_sub_field('icone')?>
											</a>
										</li>
									<?php 

										// ferme la boucle et la condition
										endwhile; else: endif; 

										// ferme la connexion de la BDD
										wp_reset_query(); 
									?>
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