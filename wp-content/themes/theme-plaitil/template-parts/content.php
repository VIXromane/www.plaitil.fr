<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>


<div class="medium-4 small-12 columns end">
	<article class="item-portfolio" id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>

	<a href="<?php the_permalink(); ?>">

		<?php the_post_thumbnail(); ?>
		<div class="item-hover">
			<div class="large-12 columns content-hover">
				<h5 class="text-center"><?php the_title(); ?></h5>

				<a class="item-link" href="<?php the_permalink(); ?>">Voir plus<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>		
			</div>
			
			
		</div>
	</article>
</div>







