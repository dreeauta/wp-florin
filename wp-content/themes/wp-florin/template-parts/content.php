<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp-florin
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
		?>

		<?php if ( has_post_thumbnail() ) {
		 the_post_thumbnail();
	 		}; ?>

		<?php
		if ( 'post' === get_post_type() ) : ?>


		<div class="entry-meta">
			<?php wp_florin_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">



		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wp-florin' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)

		 );




			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-florin' ),
				'after'  => '</div>',
			) );
		?>

	</div>

<div class="entry-content-images">
		<?php $attachments = new Attachments( 'attachments' ); /* pass the instance name */ ?>
			<?php if( $attachments->exist() ) : ?>
				<ul>
					<?php while( $attachments->get() ) : ?>
						<li>
							 <?php echo $attachments->image( 'thumbnail' ); ?><br />
						</li>
					<?php endwhile; ?>
			</ul>
			<?php endif; ?>

	</div>


	<!-- .entry-content -->



	<footer class="entry-footer">
		<?php wp_florin_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
