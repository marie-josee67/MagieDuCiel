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
					<a href="index.php" class="navbar-brand">
						<img class="logo-dark" src="/assets/img/Photos/logo/logo_3.jpg" alt="Abias logo">
					</a>
				</div>
				<!-- mise en place du menu -->
				<?php  
					wp_nav_menu( array (
						'theme_location' => 'Header',
						'menu_class' => 'menu-list',
						'menu_id' => 'nav',
						'container' => 'div',
						'container_id' => '',
						'container_class' => 'main-menu main-menu-dark ml-auto',
						'depth' => '2'
					));
				?>
				<!-- mise en place du menu mobile -->
				<!-- <?php  
					wp_nav_menu( array (
						'theme_location' => 'Header',
						'menu_class' => 'menu-list',
						'menu_id' => 'nav',
						'container' => 'nav',
						'container_id' => 'mobile-menu',
						'container_class' => 'menu',
						'depth' => '2'
					));
				?> -->
				<!-- <div class="main-menu main-menu-dark ml-auto">
					<nav class="menu" id="mobile-menu">
						<ul class="menu-list" id="nav">
							<li class="active"><a href="">Accueil</a>
							</li>
							<li><a href="">A propos</a>
							</li>
							<li><a href="">Blog</a>
								<ul class="sub-menu">
									<li><a href="single.php">Blog Details</a></li>
								</ul>
							</li>
							<li><a href="">Contact</a></li>
						</ul>
					</nav>
				</div> -->
				<div class="mobile-menu mobile-menu-dark"></div>
			</div>
		</div>
	</div>
	<!-- navigation end -->
</header>
<!--=========| / Header Section |=========-->