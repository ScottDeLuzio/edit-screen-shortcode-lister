<?php
if ( !defined( 'ABSPATH' ) ) {
    die( "Sorry, you are not allowed to access this page directly." );
}
add_action( 'admin_enqueue_scripts', 'shortcode_lister_scripts');
function shortcode_lister_scripts(){
	wp_enqueue_script( 'shortcode-select', SHORTCODE_LISTER_PLUGIN_URL . '/includes/js/shortcode-lister.js', SHORTCODE_LISTER_VERSION, true );
}