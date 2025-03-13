<<?php
	/*
		Template Name: Blog
		Description: page de blog
	*/

	// code qui permet d'afficher le header
	get_header();
?>
	<!--  Breadcrumbs area start -->
	<div class="breadcrumbs-area breadcrumbs-area-innerpage" data-overlay="3" data-background="assets/img/bg/header-banner.jpg">
		<div class="container-fluid">
			<div class="page-title-area">
				<h2 class="page-title pt-70">Blog</h2>
			</div>
			<div class="breadcrumbs">
				<ul class="breadcrumbs-list">
					<li><a href="<?php echo home_url(); ?>">Accueil</a></li>
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
<!--=========| / Main Content |=========-->
<main>

	<!--=========|  Service Section |=========-->
	<div class="service pt-60 pb-20" id="service">
		<div class="container">
			<div class="service-wrapper">
				<div class="section-heading">
					<h2 class="section-title">Blog</h2>
					<h3 class="section-subtitle">Mes Articles</h3>
				</div>
				<div class="service-area mt-80">
					<div class="row">
						<!-- Service Single -->
						<div class="col-lg-4 col-sm-6">
							<div class="service-item-dark service-item-grid">
								<div class="service-icon-dark">
									<i class="fas fa-laptop-code"></i>
								</div>
								<h3 class="service-title">Étoiles</h3>
								<p class="service-desc">Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit donec</p>
								<a href="single-service.html" class="btn-more">Read More</a>
							</div>
						</div>
						<!-- Service Single -->
						<div class="col-lg-4 col-sm-6">
							<div class="service-item-dark service-item-grid">
								<div class="service-icon-dark">
									<i class="fas fa-cogs"></i>
								</div>
								<h3 class="service-title">Contellation</h3>
								<p class="service-desc">Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit donec</p>
								<a href="single-service.html" class="btn-more">Read More</a>
							</div>
						</div>
						<!-- Service Single -->
						<div class="col-lg-4 col-sm-6">
							<div class="service-item-dark service-item-grid">
								<div class="service-icon-dark">
									<i class="icofont-brand-android-robot"></i>
								</div>
								<h3 class="service-title">L'univers</h3>
								<p class="service-desc">Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit donec</p>
								<a href="single-service.html" class="btn-more">Read More</a>
							</div>
						</div>
						<!-- Service Single -->
						<div class="col-lg-4 col-sm-6">
							<div class="service-item-dark service-item-grid">
								<div class="service-icon-dark">
									<i class="fab fa-stack-overflow"></i>
								</div>
								<h3 class="service-title">Foudre</h3>
								<p class="service-desc">Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit donec</p>
								<a href="single-service.html" class="btn-more">Read More</a>
							</div>
						</div>
						<!-- Service Single -->
						<div class="col-lg-4 col-sm-6">
							<div class="service-item-dark service-item-grid">
								<div class="service-icon-dark">
									<i class="icofont-chart-growth"></i>
								</div>
								<h3 class="service-title">Nuages</h3>
								<p class="service-desc">Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit donec</p>
								<a href="single-service.html" class="btn-more">Read More</a>
							</div>
						</div>
						<!-- Service Single -->
						<div class="col-lg-4 col-sm-6">
							<div class="service-item-dark service-item-grid">
								<div class="service-icon-dark">
									<i class="fas fa-headset"></i>
								</div>
								<h3 class="service-title">Arc-en-ciel</h3>
								<p class="service-desc">Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit donec</p>
								<a href="single-service.html" class="btn-more">Read More</a>
							</div>
						</div>
						<!-- Service Single -->
						<div class="col-lg-4 col-sm-6">
							<div class="service-item-dark service-item-grid">
								<div class="service-icon-dark">
									<i class="fas fa-laptop-code"></i>
								</div>
								<h3 class="service-title">Great web Design</h3>
								<p class="service-desc">Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit donec</p>
								<a href="single-service.html" class="btn-more">Read More</a>
							</div>
						</div>
						<!-- Service Single -->
						<div class="col-lg-4 col-sm-6">
							<div class="service-item-dark service-item-grid">
								<div class="service-icon-dark">
									<i class="fas fa-cogs"></i>
								</div>
								<h3 class="service-title">Core Development</h3>
								<p class="service-desc">Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit donec</p>
								<a href="single-service.html" class="btn-more">Read More</a>
							</div>
						</div>
						<!-- Service Single -->
						<div class="col-lg-4 col-sm-6">
							<div class="service-item-dark service-item-grid">
								<div class="service-icon-dark">
									<i class="icofont-brand-android-robot"></i>
								</div>
								<h3 class="service-title">Apps Development</h3>
								<p class="service-desc">Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit donec</p>
								<a href="single-service.html" class="btn-more">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=========| / Service Section |=========-->

</main>
<!--=========|  Main Content |=========-->

<!-- code qui permet d'afficher le footer sur toutes les pages -->
<?php
    get_footer();
?>