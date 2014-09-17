<?php

function msp_get_panel_header(){
?>
	<div id="msp-header">
        <div class="msp-logo">
        	<a href="<?php echo admin_url( 'admin.php?page='.MSWP_SLUG ); ?>">
        		<img src="<?php echo MSWP_AVERTA_ADMIN_URL; ?>/views/slider-panel/images/masterslider.gif">
        	</a>
        </div>
        <a class="upgrade-pro" href="http://www.masterslider.com/wordpress/pro/?msl" title="<?php _e( "Upgrade to PRO version to unlock more features. Click to see the list of features." ); ?>" target="_blank"><?php _e( "Upgrade to PRO Version", MSWP_TEXT_DOMAIN ); ?></a>
    </div>
<?php
}