<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp-florin
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<nav id="filter-navigation" class="filter-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Secondary Menu', 'wp-florin' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'secondary-menu',
					) );
				?>
			</nav>

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
