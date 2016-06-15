<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!--FONTS-->
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,900italic,900,700italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,700italic,900italic' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
			<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
		<?php endif; ?>

		<?php do_action( 'foundationpress_layout_start' ); ?>

		<header id="masthead" role="banner">


<!-- 			<nav id="site-navigation" role="navigation" class="small-2 offset-6 columns">

				
				<div class="header-custom-menu">
					<button class="showmenuresponsive"><i class="fa fa-bars"></i></button>
				</div>

			</nav> -->


			<div class="menu-collapsed">
				<div class="bar"></div>
				<nav>
					<ul>
						<li><a href="http://localhost:8888/www.plaitil.fr/#agence">Agence Plaît-il</a></li>
						<li><a href="http://localhost:8888/www.plaitil.fr/#projets">Projets</a></li>
						<li><a href="http://localhost:8888/www.plaitil.fr/#contact">Contact</a></li>
					</ul>
				</nav>  
			</div>
						<div class="logo top-bar-right">
				<a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img id="logo-head"src="<?php echo get_stylesheet_directory_uri();?>/assets/images/visuels/logo-plaitil.png" alt="logo principal main timelapse">
				</a>
			</div>
		</header>

<!-- 		<div class="responsivemenu text-center">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</div> -->


		<section class="container">
			<?php do_action( 'foundationpress_after_header' );
