<?php
	get_header();
?>

<!--  Breadcrumbs area start -->
<div class="breadcrumbs-area breadcrumbs-area-innerpage" data-overlay="3" data-background="assets/img/bg/header-banner.jpg">
		<div class="container-fluid">
			<div class="page-title-area">
				<h2 class="page-title pt-70"><?php the_title(); ?></h2>
			</div>
			<div class="breadcrumbs">
				<ul class="breadcrumbs-list">
					<li><a href="<?php echo home_url(); ?>">Accueil</a></li>
					<li><a href="<?php the_permalink(16); ?>">Blog</a></li>
					<li class="active"><?php the_title(); ?></li>

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
	<!--=========|  Single Project Section |=========-->
	<section class="blog-single-page pt-100 pb-100" id="blog-single-page">
		<div class="container">
			<div class="blog-single-wrapper">
				<div class="row">
                    <!-- Blog post area -->
                    <div class="col-lg-8">
                        <?php 
                            if (have_posts()) : while (have_posts()) : the_post();
                        ?> 
						<!-- Blog Single Details -->
						<div class="blog-single-post service-details-area project-details-area m-mb-30">
							<div class="project-thumb-area">
								<div class="project-meta service-meta">
									<h6 class="service-meta-title"><?php the_title(); ?></h6>
                                    <!-- rajout personnel -->
                                    <div><?php the_category(); ?></div> 
								</div>
							</div>
							<div class="content mtn-40">
                            <?php 
                                the_content(); // permet de récupérer et d'afficher le contenu de wordpress 
                            ?>
							</div>
						</div>
                        <?php 
                            endwhile;
                            endif;
                        ?>
					</div>
					<!-- / Blog post area end -->

					<!-- Blog Widget Area Start -->
					<div class="col-lg-4">
						<div class="blog-widgets-area">
							<!-- Single Widget -->
							<div class="blog-widget-item mb-30">
								<form role="search" method="get" class="search-form" action="#"> 
									<input type="search" class="search-field" placeholder="Search" value="" name="s">
									<button type="submit" class="search-submit gr-transition"><i class="icofont-search-1"></i></button>
								</form>
							</div>
							<!-- Single Widget -->
							<div class="blog-widget-item mb-30">
								<div class="widget-title-area">
									<h3 class="widget-title">Catégories</h3>
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
	<!--=========| / Single Project Section |=========-->
</main>
<!--=========|  Main Content |=========-->


<?php
    get_footer();
?>