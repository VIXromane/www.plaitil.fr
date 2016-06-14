<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</section>

	<footer id="footer">

		<div id="social-foot">
			<div class="row text-center">
				<img class="" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/visuels/logo-footer.png" alt="logo footer contact">
				<h3 >Suivez nous sur les réseaux sociaux !</h3>
				<ul class="social-list">
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-github-alt" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
				</ul>	
			</div>
		</div>
		<div class="foot-foot">
			<ul>
				<li class="medium-4 small-12 columns text-center"><a href="#">Mentions légales</a></li>
				<li class="medium-4 small-12 columns text-center"><i class="fa fa-map-signs" aria-hidden="true"></i> <strong>Plait-il?</strong> - 5 rue du Bûcher , 13007 Marseille
				</li>
				<li class="medium-4 small-12 columns text-center">Copyright: <strong>Plait-il? ©</strong>  - 2016</li>
			</ul>
		</div>
	</footer>


<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
</div><!-- Close off-canvas wrapper inner -->
</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>

<!-- Ancres scroll to -->

<script>
	$(document).ready(function() {
		$('.js-scrollTo').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});
	});
</script>

<script type="text/javascript">


$('.responsivemenu a').addClass('js-scrollTo')

$('.showmenuresponsive').on('click', function(){
	$('.responsivemenu').toggle('slow')
})

</script>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>



</body>
</html>

