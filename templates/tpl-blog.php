<<?php
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
								'posts_per_page' => -1,
								'orderby' => 'menu_order'));
								// On teste si des données sont retournées par la requêtes SQL
								if ($the_query->have_posts() ) {
								// s'il y a des données, on boucle dessus
								while($the_query->have_posts()) {$the_query->the_post();
						?>

						<div class="blog-item mb-30">
							<a href="single.html" class="blog-thumb">
								<img src="assets/img/blog/blog_1.jpg" alt="blog image">
							</a>
							<div class="blog-content">
								<div class="author-time">
									<span class="author">by <a href="#">Kamla Babu</a></span>
									<a href="#" class="time">April 01, 2021</a>
								</div>
								<a href="single.html" class="blog-title">How to grow up your Business ?</a>
								<p class="blog-desc">Nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul.</p>
							</div>
							<a href="single.html" class="blog-btn gr-transition">See Details</a>
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
</main>
<!--=========|  Main Content |=========-->

<!-- code qui permet d'afficher le footer sur toutes les pages -->
<?php
    get_footer();
?>