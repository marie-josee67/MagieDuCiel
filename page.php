<?php
/*
    Template Name: Contact
    Description: page de contact
*/

// code qui permet d'afficher le header
    get_header();
?>
	<!--  Breadcrumbs area start fil d'arianne-->
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
                        // the_permalink(); // permet de récupérer l'URL de la page en cours
                        // the_author ();
                        // the_time('d/m/y'); // date de création du contenu
                        the_content(); // permet de récupérer et d'afficher le contenu de wordpress
						// echo antispambot('monadressmail@wahou.fr'); //adresse email convertient en caractère html pour qu'un robot ne peut pas l'exploiter.
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

<!-- code qui permet d'afficher le footer sur toutes les pages -->
<?php
    get_footer();
?>