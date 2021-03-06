<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-florin
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-florin' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			 $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description;  ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->



		<nav id="site-navigation" class="main-navigation">
			<div class="site-logo"> <span>  Cool Gadgets Guru </span></div>


			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wp-florin' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->

		<?php $header_image = get_header_image();
        if ( ! empty( $header_image ) ) { ?>
                <img class="header-img" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>"
								height="<?php echo get_custom_header()->height; ?>" alt="" />


<?php }
?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
