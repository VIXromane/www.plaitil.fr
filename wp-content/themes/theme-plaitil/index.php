<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="page" role="main">
	
</div>

<section id="slider">

<!-- <div class="flexslider">
	<ul class="slides">
		<li class="">
			<img class="slide" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/visuels/SLIDE1-CONTACT.jpg" alt="visuel slider projet agence">
			<div class="content-slide text-center">
				<h5>Vous avez un projet en tête ? </h5>
				<a href="#">Contactez nous!</a>
			</div>

		</li>
		<li>
			<img class="slide" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/visuels/SLIDE2-SWAG.jpg" alt="visuel slider projet agence">
			<div class="content-slide text-center">
				<h5>SWAG 2015</h5>
				<a href="#">Voir le projet</a>
			</div>
		</li>
		<li>
			<img class="slide" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/visuels/SLIDE3-BRUNET.jpg" alt="visuel slider projet agence">
			<div class="content-slide text-center">
				<h5>Bruno Saunier</h5>
				<a href="#">Voir le projet</a>
			</div>
		</li>

	</ul>
</div> -->
</section>

<!--AGENCE-->

<section id="agence">
	<div class="title text-center">
		<h1>Agence “Plaît-il ?” </h1>
		<h2>Exploratrice en web depuis 2005</h2>
	</div>
	<div class="row presentation-1">
		<div class="medium-6 small-12 columns">
			<p>
				<i>F</i>aites confiance à une <strong>agence expérimentée</strong>, pour qui le <strong>web</strong> n’a plus de secret. Grâce à notre équipe de <strong>professionnels</strong>, nous pouvons prendre en charge l’intégralité de votre <strong>projet</strong>.</p>

				<p>L’agence “plait-il?” réunit un collectif de <strong>professionnels</strong> et vous accompagne sur toute la chaîne de <strong>communication</strong>, de votre <strong>identité visuelle</strong> à votre <strong>stratégie digitale</strong>. </p>

				<p>Chaque <strong>projet</strong>, chaque client est <strong>unique</strong>. Pour chacun, nous mettons en œuvre une <strong>méthodologie</strong> structurée et <strong>sur-mesure</strong>. Elle garantit un pilotage efficace et le respect de nos <strong>engagements</strong>.

				</p>
				<a href="#" class="button medium-4 small-12 columns">Nos projets</a>
			</div>

			<div class="medium-6 small-12 columns">
				<img class="no-padding" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/visuels/visuel-agence-plaitil.jpg" alt="agence projets visuel-agence-plaitil">
			</div>

		</div>

		<div class="row presentation-2">
			<div class="medium-6 small-12 columns ">
				<img class="" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/visuels/visuel-agence-plaitil-2.jpg" alt="image plaitil agence">
			</div>
			<div class="medium-6 small-12 columns">
				<p>
					<i>C</i>hez “Plait-il?”, nous cultivons les paradoxes : <strong>sérieux</strong> et <strong>bonne humeur</strong>, <strong>rigueur</strong> et <strong>créativité</strong>, <strong>autonomie</strong> et <strong>esprit d’équipe</strong> sont les valeurs que nous partageons, en exerçant tous les jours nos <strong>métiers</strong> si différents. 
				</p>
				<p>Vous vous reconnaissez ? </p>
				<h3>Il est une promesse que nous pouvons vous faire : 
					vous n’allez pas vous ennuyer !</h3>

					<a href="#" class="button medium-4 small-12 columns">Contactez-nous !</a>
				</div>

			</div>
		</section>

		<!--PROJETS-->

		<section id="projets">
			<div class="title text-center">
				<h1>Projets</h1>
				<h2>Quelques unes de nos réalisations</h2>
			</div>
			<div class="row">
				<p class="hide-for-small-only large-2 columns"></p>
				<h4 class="small-8 columns text-center">
					Voici quelques uns des projets dont nous sommes fiers ! Notre équipe Web Design effectue une veille permanente afin de vous faire profiter des dernières tendances et innovations pour un design unique et impactant.
				</h4>
				<p class="hide-for-small-only large-2 columns"></p>
			</div>
			<div class="row portfolio-grid">

				<article class="main-content">
					<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
				<?php endwhile; ?>

			<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
		<?php } ?>

	</article> 
</div>


</div>
</section>

<!--CONTACT-->

<section id="contact">
	<div class="title text-center">
		<h1>Nous contacter</h1>
		<h2>Ne soyez pas timides !</h2>
	</div>
	<div class="row">
		<div class="medium-6 small-12 columns">
			<img class="" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/visuels/logo-circles-contact.png" alt="logo contact">
		</div>
		<div class="medium-6 small-12 columns">
			<h4 class="small-12 columns">
				Nous pouvons vous aider à concrétiser votre projet. 
				Nous vous accompagnerons et développerons votre projet de façon à le rendre unique !
			</h4>
			<?php echo do_shortcode('[contact-form-7 id="20" title="Formulaire de contact"]') ?>
		</div>
	</div>

	<?php get_footer();
