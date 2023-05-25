<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );


function shortcode_user_avatar() {
	if(is_user_logged_in()) { // check if user is logged in
		global $current_user; // get current user's information
		get_currentuserinfo();
		return get_avatar( $current_user -> ID, 64 ); // display the logged in user's avatar
	}
	else {
	  // if not logged in, show default avatar. change URL to show your own default avatar
		return get_avatar( 'http://1.gravatar.com/avatar/ad524503a11cd5ca435acc9bb6523536?s=64', 64 );
	}
}
add_shortcode('display-user-avatar','shortcode_user_avatar');

// END ENQUEUE PARENT ACTION