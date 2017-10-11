<?php
require_once(DUPLICATOR_PLUGIN_PATH . '/classes/ui/class.ui.dialog.php');

DUP_Util::hasCapability('manage_options');

global $wpdb;

//COMMON HEADER DISPLAY
require_once(DUPLICATOR_PLUGIN_PATH . '/assets/js/javascript.php');
require_once(DUPLICATOR_PLUGIN_PATH . '/views/inc.header.php');
$current_tab = isset($_REQUEST['tab']) ? esc_html($_REQUEST['tab']) : 'diagnostics';
?>

<style>
	div.lite-sub-tabs {padding: 10px 0 10px 0; font-size: 14px}
</style>
<div class="wrap">
	
    <?php duplicator_header(__("Tools", 'duplicator')) ?>

    <h2 class="nav-tab-wrapper">  
        <a href="?page=duplicator-tools&tab=diagnostics" class="nav-tab <?php echo ($current_tab == 'diagnostics') ? 'nav-tab-active' : '' ?>"> <?php _e('Diagnostics', 'duplicator'); ?></a>
	<a href="?page=duplicator-tools&tab=cleanup" class="nav-tab <?php echo ($current_tab == 'cleanup') ? 'nav-tab-active' : '' ?>"> <?php _e('Cleanup', 'duplicator'); ?></a>
    </h2> 	

    <?php
    switch ($current_tab) {
        case 'diagnostics': include('diagnostics/main.php');
            break;
        case 'cleanup': include('cleanup.php');
            break;
    }
    ?>
</div>
