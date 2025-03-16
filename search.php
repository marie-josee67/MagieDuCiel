<?php
	get_header();
?>

<!--  Breadcrumbs area start fil d'arianne-->
<div class="breadcrumbs-area breadcrumbs-area-innerpage" data-overlay="3" data-background="">
		<div class="container-fluid">
			<div class="page-title-area">
				<h2 class="page-title pt-70">Résultats de recherche</h2>
			</div>
			<div class="breadcrumbs">
				<ul class="breadcrumbs-list">
					<li><a href="<?php echo home_url(); ?>">Accueil</a></li>
					<li class="active">Résultats de recherche pour <?php echo $_GET['s']; ?></li>
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
			<!--=========|  Contact form Section |=========-->
			<div class="container mt-100">
				<div class="row">
                    <?php
                        if (have_posts()) : while (have_posts()) : the_post();
                    ?>
                    <div class="col-md-3">
                        <img src="<?php the_post_thumbnail_url(); ?>">
                        <h2> <?php the_title();?> </h2>
                        <div> <?php the_excerpt(); ?> </div>
                    </div>
                    <?php
                        endwhile;
                        endif;
                    ?>
				</div>
			</div>
			<!--=========| / Contact form Section |=========-->
		</div>
	</section>
	<!--=========| / Blog Section |=========-->
</main>
<!--=========|  Main Content |=========-->

<?php
    get_footer();
?>