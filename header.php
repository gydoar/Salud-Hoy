<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<?php $url_actual = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]; ?>
    
	    <!-- Banner Desplegable Home Header 1200 x 60-->
	    <!-- Se mostrara solo si esta en el Home-->
	    <?php if ($url_actual == 'http://localhost/maldonado/saludhoy/') { ?>

		<!-- Banner Ads Header -->
		<!-- Banner de 1200 x 60 PX -->
		<section class="container ads__header">
			<a href="#"><img class="twelve columns" src="<?php bloginfo('stylesheet_directory' ); ?>/library/images/header/ads_header.png" alt="ads header"></a>
		</section>

		<?php }else{ ?>
        

    	<?php } ?>


    	<div class="twelve columns ads__header_phone center">
	      <a href="#"><img width="320px" src="<?php bloginfo('stylesheet_directory' ); ?>/library/images/header/ads_header_phone.png" alt="ads-header-small"></a>
	    </div>

		
		<!-- Header -->

		<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
			<div class="top__header">
				<div class="container">
					<!-- Menu top -->
					<ul class="menu__top__header">
						<li><a href="#">Acerca de SALUD HOY</a></li>
						<li><a href="#">Newsletter SALUD HOY</a></li>
						<li><a href="#">Contáctenos</a></li>
					</ul>

					<!-- Menu login y registro -->
					<ul class="menu__top__login">
						<li><a href="#">Login</a></li>
						<li><a class="boton__suscribase__header" href="#">Suscríbase ></a></li>
					</ul>

					<!-- Menu social -->
					<ul class="menu__social__header">
						<li><a target="new" href="#"><img width="20px" src="<?php bloginfo('stylesheet_directory' ); ?>/library/images/header/twitter.png" alt="Twitter"></a></li>
						<li><a target="new" href="#"><img width="20px" src="<?php bloginfo('stylesheet_directory' ); ?>/library/images/header/facebook.png" alt="Facebook"></a></li>
						<li><a target="new" href="#"><img width="20px" src="<?php bloginfo('stylesheet_directory' ); ?>/library/images/header/linkedin.png" alt="Linkedin"></a></li>
					</ul>
				</div>
			</div>

			<!-- Header principal -->
			<section class="header__principal">
				<div class="container">

					<!-- Logo -->
					<div class="three columns logo">
						<h1><a href="<?php echo home_url('/'); ?>"><img class="twelve columns" width="245px" src="<?php bloginfo('stylesheet_directory' ); ?>/library/images/header/logo.png" alt=""></a></h1>
					</div>

					<!-- Menu principal -->
					<nav class="six columns" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<div class="rmm style">
							<ul class="menu__header">
								<li><a href="#">Actualidad</a></li>
								<li><a href="#">Centros</a></li>
								<li><a href="#">Buscando Bienestar</a>
									<ul>
										<li><a href="#">Prueba</a></li>
									</ul>
								</li>
								<li><a href="#">Paciente</a></li>
								<li><a href="#">Cursos</a></li>
								<li><a href="#">Salud A - Z</a></li>
							</ul>
						</div>
					</nav>

					<!-- Buscador menu header -->
					<div class="three columns buscar__header">
						<input type="text" placeholder="Buscar tema de interés">
					</div>
				</div>
			</section>
		</header>
	
