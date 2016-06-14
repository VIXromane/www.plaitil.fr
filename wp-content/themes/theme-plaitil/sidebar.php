<?php
/**
 * The sidebar containing the main widget area
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar-projet medium-3 columns small-12 columns">
<!-- 	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'foundationpress_after_sidebar' ); ?> -->

	<article class="infos-projet medium-3 small-12 columns">

		<h3>Caractéristiques</h3>
		<li><?php echo $value = get_field("caracteristiques");?></li>
		<h3>Date</h3>
		<time><?php echo $value = get_field("time");?></time>

		
	</article>

	<div class="titre_decoratif">
			<h2><?php echo $value = get_field("titre_decoratif");?></h2>
	</div>


</aside>

