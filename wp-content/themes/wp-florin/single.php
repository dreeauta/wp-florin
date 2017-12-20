<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp-florin
 */

get_header(); ?>



<div class="top-ad-desktop">
<?php the_ad(141); ?>
<?php the_ad(192); ?>
<?php the_ad(192); ?>
</div>

<div class="top-ad-small">
<?php the_ad(141); ?>
</div>




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

			<div class="side-ad-section-desktop">
				<?php the_ad(192); ?>
				<?php the_ad(192); ?>
				<?php the_ad(192); ?>

			</div>



		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );


			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		<div class="ad-section-small">
			<?php the_ad(192); ?>


		</div>



					<?php $orig_post = $post;
			global $post;
			$categories = get_the_category($post->ID);
			if ($categories) {
			$category_ids = array();
			foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
			$args=array(
			'category__in' => $category_ids,
			'post__not_in' => array($post->ID),
			'posts_per_page'=> 2, // Number of related posts that will be shown.
			'caller_get_posts'=>1
			);
			$my_query = new wp_query( $args );
			if( $my_query->have_posts() ) {
			echo '<div id="related_posts"><h3>Related Items</h3><ul>';
			while( $my_query->have_posts() ) {
			$my_query->the_post();?>
			<li><div class="relatedthumb"><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a></div>
			<div class="relatedcontent">
			<h3><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>


			</div>
			</li>
			<?
			}
			echo '</ul></div>';
			}
			}
			$post = $orig_post;
			wp_reset_query();

			?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
