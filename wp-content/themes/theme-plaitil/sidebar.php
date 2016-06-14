<?php
/**
 * The sidebar containing the main widget area
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar-projet">
<!-- 	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'foundationpress_after_sidebar' ); ?> -->

	<article class="infos-projet">

		<h3>Caractéristiques</h3>
		<?php echo $value = get_field("caracteristiques");?>
		
	</article>


</aside>

