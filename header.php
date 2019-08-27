<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta charset="UTF-8">
	<title><?php wp_title( '&raquo;', true, 'El Surti Mercadillo' ); ?></title>
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url');?>/html/assets/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url');?>/html/assets/img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url');?>/html/assets/img/favicon-16x16.png">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/html/assets/styles/css/main.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/html/assets/styles/css/responsive.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
	<?php wp_head(); ?>
</head>
<body>
	<header class="header">

		

		<div class="header__logo">
			<a href="/"><img src="<?php bloginfo('template_url');?>/html/assets/img/iso.svg" alt="Logotipo El Surti" aria-label="El Surti"></a>
		</div>
		<nav class="header__nav" data-scroll-header>
			<a href="#" class="header__item" onclick="jQuery('div.buscador').show();jQuery('#s').focus();">
				<i class="icon icon--search"></i>
			</a>
			<a href="/cart" class="header__item">
				<i class="icon icon--cart"></i>
			</a>
			<button class="header__toggler">
				<i class="header__icon--toggle icon--toggle icon "></i>
				<i class="header__icon--close icon material-icons md-24">close</i>

				<?php wp_nav_menu( array( 'depth' => 0, 'theme_location'=>'cabecera-menu','container'=> '', 'menu_class'=> '','menu_id'=>'')); ?>


				<!-- <ul>
					<li><a href="landing.php">Libros</a></li>
					<li><a href="landing.php">Prints</a></li>
					<li><a href="landing.php">Remeras</a></li>
					<li><a href="landing.php">Bolsos</a></li>
					<li><a href="landing.php">Stickers</a></li>
				</ul> -->

			</button>
			
		</nav>


		<div class="buscador" style="position: fixed; display: none;">
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
				<input type="search" placeholder="Buscar producto" value="<?php the_search_query(); ?>" name="s" id="s" style="width: 100%; margin: 10px auto; padding: 7px; font-size: 3em; font-weight: bold; box-shadow: 10px 10px 120px 0px rgba(0,0,0,0.75);">
				<input name="post_type" value="product" type="hidden">
				<button class="toggle-buscador">
					<i class="icon icon-times"></i>
				</button>
			</form>
		</div>

	</header>
	