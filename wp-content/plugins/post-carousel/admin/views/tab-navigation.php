<?php
/**
 * This file display meta box tab
 * @package post-carousel
 */

$current_screen        = get_current_screen();
$the_current_post_type = $current_screen->post_type;
if ( $the_current_post_type == 'sp_pc_shortcodes' ) {
	?>
    <div class="sp-pc-metabox-framework">
        <div class="sp-pc-mbf-banner">
            <div class="sp-pc-mbf-logo"><img src="<?php echo SP_PC_URL ?>admin/assets/images/post-carousel.png" alt="Post Carousel"></div>
            <div class="sp-pc-mbf-short-links">
                <a href="https://shapedplugin.com/docs/post-carousel/" target="_blank"><i class="sp-pc-font-icon icon-doc-text-inv">&#xf15c;</i> Docs</a>
                <a href="https://wordpress.org/support/plugin/post-carousel" target="_blank"><i class="sp-pc-font-icon
                icon-lifebuoy">&#xf1cd;</i> Support</a>
            </div>
        </div>
        <div class="sp-pc-mbf text-center">

            <div class="sp-pc-col-lg-3">
                <div class="sp-pc-mbf-shortcode">
                    <h2 class="sp-pc-mbf-shortcode-title"><?php _e( 'Shortcode', 'post-carousel' ); ?> </h2>
                    <p><?php _e( 'Copy and paste this shortcode into your posts or pages:', 'post-carousel' );
						global $post;
						?></p>
                    <textarea class="text-center" cols="37" rows="1" onClick="this.select();">[post-carousel <?php
                        echo 'id="' . $post->ID . '"'; ?>]</textarea>
                </div>


            </div>
            <div class="sp-pc-col-lg-3">
                <div class="sp-pc-mbf-shortcode">
                    <h2 class="sp-pc-mbf-shortcode-title"><?php _e( 'Template Include', 'post-carousel' ); ?> </h2>

                    <p><?php _e( 'Paste the PHP code into your template file:', 'post-carousel' ); ?></p>
                    <textarea class="text-center" cols="40" rows="1"
                              onClick="this.select();"><?php echo '<?php post_carousel_id(';
						echo "'" . get_the_ID() . "')"; ?>; ?></textarea>
                </div>
            </div>
            <div class="sp-pc-col-lg-3">
                <div class="sp-pc-mbf-shortcode">
                    <h2 class="sp-pc-mbf-shortcode-title"><?php _e( 'Post or Page editor', 'post-carousel' ); ?> </h2>

                    <p><?php _e( 'Insert it into an existing post or page with the icon:', 'post-carousel' ); ?></p>
                    <img class="back-image"
                         src="<?php echo SP_PC_URL . 'admin/assets/images/pc-editor-button.png' ?>"
                         alt="">
                </div>
            </div>

        </div>
        <div class="sp-pc-shortcode-divider"></div>

        <div class="sp-pc-mbf-nav nav-tab-wrapper current">
            <a class="nav-tab nav-tab-active" data-tab="sp-pc-tab-1"><i class="sp-pc-font-icon icon-wrench">&#xe800;</i>General
                Settings</a>
            <a class="nav-tab" data-tab="sp-pc-tab-2"><i class="sp-pc-font-icon icon-sliders">&#xf1de;</i>Carousel
                Settings</a>
            <a class="nav-tab" data-tab="sp-pc-tab-3"><i class="sp-pc-font-icon icon-paint-brush">&#xf1fc;</i>Stylization</a>
            <a class="nav-tab sp-pc-upgrade-to-pro" data-tab="sp-pc-tab-4"><i class="sp-pc-font-icon icon-rocket">&#xf135;</i>Upgrade
                to Pro</a>
        </div>

		<?php
		include_once 'partials/general-settings.php';
		include_once 'partials/carousel-settings.php';
		include_once 'partials/stylization.php';
		include_once 'partials/upgrade-to-pro.php';
		?>
    </div>
	<?php
}