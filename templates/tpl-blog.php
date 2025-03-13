<?php
	/*
		Template Name: Blog
		Description: page de blog
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
<!--=========| / Main Content |=========-->
<main>
	<!--=========|  Blog Section |=========-->
	<div class="blog-page pt-100" id="blog-page">
		<div class="container">
			<div class="blog-page-wrapper">
				<!-- Blog post area -->
				<div class="row blog-posts justify-content-center">
					<!-- Blog Single-->
					<div class="col-lg-4 col-md-6">

						<?php 
							// création d'une varaible pour stocker les données de la BDD
							$the_query = new WP_Query(array(
								'posts_per_page' => -1, // tous les articles
								'orderby' => 'date',
								'order' => 'DESC',
							));
								// On teste si des données sont retournées par la requêtes SQL
								if ($the_query->have_posts() ) {
								// s'il y a des données, on boucle dessus
								while($the_query->have_posts()) {$the_query->the_post();
						?>

						<div class="blog-item mb-30">
							<a href="<?php the_permalink(); ?>" class="blog-thumb">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="blog image">
							</a>
							<div class="blog-content">
								<div class="author-time">
									<span><?php the_category(); ?></span> <!-- rajout personnel -->
									<span class="author">Par : <?php the_author(); ?></span>
									<span class="time"> Le : <?php the_time('d/m/Y'); ?></span>
								</div>
								<span class="blog-title"><?php the_title(); ?></span>
								
								<!-- mais un extrait de l'article -->
								<?php  the_excerpt()?>
							</div>
							<a href="<?php the_permalink(); ?>" class="blog-btn gr-transition">Lire plus</a>
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
					Il n'y a aucune actualité pour le moment
					<?php 
						} 
					?>

					<div class="mb-50"></div>
						<div class="pagination">
							<ul class="pagination-list">
								<li><a href="#"><i class="icofont-simple-left"></i></a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="icofont-simple-right"></i></a></li>
							</ul>
						</div>
						<div class="mb-50"></div>
					</div>
					<!-- / Blog post area end -->

					<!-- Blog Widget Area Start -->
					<div class="col-lg-4">
						<div class="blog-widgets-area">
							<!-- Single Widget -->
							<div class="blog-widget-item mb-30">
								<div class="widget-title-area">
									<h3 class="widget-title">Categories</h3>
								</div>
								<div class="widget-content" id="category-widget">
									<?php
                                        $categories = get_categories();
                                    ?>
									<ul class="category-list">
                                        <?php foreach ($categories as $categories){ ?>
                                            <li>
                                                <a href="#"><?php echo $categories->name; ?> <span class="category-count ml-auto">(<?php echo $categories->count; ?>)</span></a>
                                            </li>
                                        <?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- / Blog Widget Area End -->
				</div>
			</div>
		</div>
	</section>
	<!--=========| / Blog Section |=========-->
</main>
<!--=========|  Main Content |=========-->


<!-- code qui permet d'afficher le footer sur toutes les pages -->
<?php
    get_footer();
?>