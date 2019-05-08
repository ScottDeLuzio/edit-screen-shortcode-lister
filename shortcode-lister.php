<?php
/*
Plugin Name: Shortcode Lister
Plugin URI: http://surpriseazwebservices.com/wordpress-plugins/shortcode-lister-wordpress-plugin/
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=BTGBPYSDDUGVN
Description: A plugin to display a list of all the shortcodes available for use on the post and page edit screens.
Version: 2.0.2
Author: Scott DeLuzio
Author URI: https://scottdeluzio.com
License: GPL2
Text Domain: shortcode-lister
*/

/*  Copyright 2013-2017  Scott DeLuzio  (email : scott (at) surpriseazwebservices.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
/* Prevent direct access to the plugin */
if ( !defined( 'ABSPATH' ) ) {
    die( "Sorry, you are not allowed to access this page directly." );
}
/* Load text domain
--------------------------------------------- */
add_action('plugins_loaded', 'shortcode_lister_load_textdomain');
function shortcode_lister_load_textdomain() {
	load_plugin_textdomain( 'shortcode-lister', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );
}

/*
 * Includes for Shortcode Lister Plugin
 */
if ( ! defined( 'SHORTCODE_LISTER' ) ) {
    define( 'SHORTCODE_LISTER', __FILE__ );
}
if( ! defined( 'SHORTCODE_LISTER_PLUGIN_DIR' ) ) {
 	define( 'SHORTCODE_LISTER_PLUGIN_DIR', dirname( __FILE__ ) );
}
if( ! defined( 'SHORTCODE_LISTER_PLUGIN_URL' ) ) {
	define( 'SHORTCODE_LISTER_PLUGIN_URL', plugins_url( '', __FILE__ ) );
}
if( ! defined( 'SHORTCODE_LISTER_PLUGIN_BASENAME' ) ) {
	define( 'SHORTCODE_LISTER_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
}
if( ! defined( 'SHORTCODE_LISTER_VERSION' ) ) {
	define( 'SHORTCODE_LISTER_VERSION', '2.0.2' );
}

if(is_admin()) {
	include( SHORTCODE_LISTER_PLUGIN_DIR . '/includes/scripts-styles.php' );
	include( SHORTCODE_LISTER_PLUGIN_DIR . '/includes/get-shortcodes.php' );
	include( SHORTCODE_LISTER_PLUGIN_DIR . '/includes/shortcode-lister-settings.php' );
}