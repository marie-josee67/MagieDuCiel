<!DOCTYPE HTML>
<html class="no-js" lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<!--=========| Preloader Start |=========-->
<div id="ftco-loader" class="show fullscreen pre-loader">
	<div class="loader-position">
		<img src="/assets/img/preloader.gif" alt="Preloader">
	</div>
</div>
<!--=========| Preloader End   |=========-->
<!--=========| Header Section |=========-->
<header>
	<!--  navigation start -->
	<div class="stickynav nav-full-bg stickynav-dark" id="stickynav">
		<div class="container">
			<div class="navigation-area">
				<div class="logo">
					<a href="#" class="navbar-brand">
						<img class="logo-dark" src="/assets/img/logo/logo_dark.png" alt="Abias logo">
					</a>
				</div>
				<div class="main-menu main-menu-dark ml-auto">
					<nav class="menu" id="mobile-menu">
						<ul class="menu-list" id="nav">
							<li class="active"><a href="<?php echo home_url(); ?>">Accueil</a>
							</li>
							<li><a href="<?php the_permalink(14); ?>">A propos</a>
							</li>
							<li><a href="<?php the_permalink(16); ?>">Blog</a>
								<ul class="sub-menu">
									<li><a href="single.php">Blog Details</a></li>
								</ul>
							</li>
							<li><a href="<?php the_permalink(12); ?>">Contact</a></li>
						</ul>
					</nav>
				</div>
				<div class="mobile-menu mobile-menu-dark"></div>
			</div>
		</div>
	</div>
	<!-- navigation end -->
</header>
<!--=========| / Header Section |=========-->