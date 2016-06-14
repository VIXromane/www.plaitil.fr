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



<!--AGENCE-->

<section id="agence">
	<div class="title text-center">
		<h1>Agence “Plaît-il ?” </h1>
		<h2>Exploratrice en web depuis 2005</h2>
	</div>
	<div class="row">
		<div class="medium-6 small-12 columns">
			<p>
				Faites confiance à une agence expérimentée, pour qui le web n’a plus de secret. Grâce à notre équipe de professionnels, nous pouvons prendre en charge l’intégralité de votre projet.</p>

			<p>L’agence “plait-il?” réunit un collectif de professionnels et vous accompagne sur toute la chaîne de communication, de votre identité visuelle à votre stratégie digitale. </p>

			<p>Chaque projet, chaque client est unique. Pour chacun, nous mettons en œuvre une méthodologie structurée et sur-mesure. Elle garantit un pilotage efficace et le respect de nos engagements.

			</p>
			<a href="#" class="button">Nos projets</a>
		</div>

		<div class="medium-6 small-12 columns">
			<img class="shopping-bag" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/visuels/visuel-agence-plaitil.jpg" alt="panier">
		</div>

	</div>

	<div class="row">
		<div class="medium-6 small-12 columns">
			<img class="shopping-bag" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/visuels/visuel-agence-plaitil-2.jpg" alt="panier">
		</div>
		<div class="medium-6 small-12 columns">
			<p>
				Chez “Plait-il?”, nous cultivons les paradoxes : sérieux et bonne humeur, rigueur et créativité, autonomie et esprit d’équipe sont les valeurs que nous.partageons, en exerçant tous les jours nos métiers si différents. 
			</p>
			<p>Vous vous reconnaissez ? </p>
			<h3>Il est une promesse que nous pouvons vous faire : 
			vous n’allez pas vous ennuyer !</h3>

			<a href="#" class="button">Contactez-nous !</a>
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
		<h4 class="small-12 columns text-center">
			Voici quelques uns des projets dont nous sommes fiers ! Notre équipe Web Design effectue une veille permanente afin de vous faire profiter des dernières tendances et innovations pour un design unique et impactant.
		</h4>
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

<?php get_footer();
