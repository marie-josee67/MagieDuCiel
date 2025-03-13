<?php
/*
    Template Name: Contact
    Description: page de contact
*/

// code qui permet d'afficher le header
    get_header();
?>
	<!--  Breadcrumbs area start fil d'arianne-->
	<div class="breadcrumbs-area breadcrumbs-area-innerpage" data-overlay="3" data-background="assets/img/bg/header-banner.jpg">
		<div class="container-fluid">
			<div class="page-title-area">
				<h2 class="page-title pt-70">Blog</h2>
			</div>
			<div class="breadcrumbs">
				<ul class="breadcrumbs-list">
					<li><a href="#">Accueil</a></li>
					<li><a href="#">Pages</a></li>
					<li class="active"><a href="#">Blog</a></li>
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
                        the_content(); // permet de faire l'affichage
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