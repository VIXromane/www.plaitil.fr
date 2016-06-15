<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="project-title text-center">
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<h2 class="sous-titre"><?php echo $value = get_field("sous-titre");?></h2>
</div>

<div id="single-post" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">


		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content">
			<div class="intro-project row">
				<div class="medium-2 small-12 columns lettrine" >
					<?php echo $value = get_field("lettrine");?>
				</div>
				<div class="medium-10 small-12 columns description">
					<p><strong><?php echo $value = get_field("description_bold");?><strong></p>
					<p><?php echo $value = get_field("description");?></p>
				</div>
			</div>
			<div class="images-projet">
				
			</div>

			<?php the_content(); ?>
			<div class="back text-center">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="back-home"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Retour à l'accueil
				</a>
			</div>


		</div>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>
		
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_sidebar(); ?>
</div>
<?php get_footer();
