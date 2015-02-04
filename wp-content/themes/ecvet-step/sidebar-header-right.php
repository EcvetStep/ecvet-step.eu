<?php
/**
 * The Header Right widget areas.
 *
 * @package Catch Themes
 * @subpackage Catch Kathmandu
 * @since Catch Kathmandu 1.0
 */
?>
<?php 
/** 
 * ecvetstep_before_header_right hook
 */
do_action( 'ecvetstep_before_header_right' ); ?> 
<?php 
global $ecvetstep_options_settings;
$options = $ecvetstep_options_settings;

if ( $options[ 'disable_header_right_sidebar' ] == "0" ) {	?>
    <div id="header-right" class="header-sidebar widget-area">
    	<?php if ( is_active_sidebar( 'sidebar-header-right' ) ) :
        	dynamic_sidebar( 'sidebar-header-right' ); 
		else : 
			if ( function_exists( 'ecvetstep_primary_menu' ) ) { ?>
                <aside class="widget widget_nav_menu">
                    <?php ecvetstep_primary_menu(); ?>
                </aside>
			<?php
            } ?> 
      	<?php endif; ?>
    </div><!-- #header-right .widget-area -->
<?php 
}
/** 
 * ecvetstep_after_header_right hook
 */
do_action( 'ecvetstep_after_header_right' ); ?> 