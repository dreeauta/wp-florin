<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp-florin
 */

get_header(); ?>

<div class="page-info-wrapper">
	<!-- <div class="page-info-logo">
		COOL GADGETS GURU
	</div>
-->
	<div class="page-info">
	This where you'll find cool and unique gift ideas.
	You'll never give a boring gift again with our never ending list of amazing products.
	</div>
</div>

<?php post_carousel_id('179'); ?>

<?php post_carousel_id('189'); ?>

<div class="top-ad-desktop">
<?php the_ad(141); ?>
<?php the_ad(192); ?>
<?php the_ad(192); ?>
</div>

<div class="top-ad-small">
<?php the_ad(141); ?>
</div>



<nav id="filter-navigation" class="filter-navigation">
	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Secondary Menu', 'wp-florin' ); ?></button>
	<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-2',
			'menu_id'        => 'secondary-menu',
		) );
	?>
</nav>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>

				</header>



			<?php
			endif;


			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>


		</main><!-- #main -->

		<div class="home side-ad-section-desktop">
		<?php the_ad(141); ?>
		<?php the_ad(192); ?>
		<?php the_ad(192); ?>
		</div>
	</div><!-- #primary -->




<?php
get_sidebar();
get_footer();
