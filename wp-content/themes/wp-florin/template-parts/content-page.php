<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp-florin
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header single-page">
		 <!--  the_title( '<h1 class="entry-title single-page">', '</h1>' ); ?> -->
	</header>
	<!-- .entry-header -->

	<div class="entry-content single-page">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links single-page">' . esc_html__( 'Pages:', 'wp-florin' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php

			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
