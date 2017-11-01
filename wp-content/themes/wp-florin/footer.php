<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-florin
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">

			<div class="site-logo"> <span>  Cool Gadgets Guru </span></div>


			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-3',
					'menu_id'        => 'footer-menu',
				) );
			?>

			<div id="footer-sidebar1">
				<span> Follow Us </span>
				<?php
					if(is_active_sidebar('footer-1')){
					dynamic_sidebar('footer-1');
					}
					?>
				</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
