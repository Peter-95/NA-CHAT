<?php
/*
Plugin Name: NA Chat
Description: Make Your Website Visitors Contact You Easily (Clickable WhatsApp icon For Free)
Version: 1.0.0
Contributors: @peternapoleon
Author: Peter F.Napoleon
Author URI: https://justcodes.com
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: whplugin
Domain Path:  /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}



// Define plugin paths and URLs
define( 'WHATSAPP-PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WHATSAPP-PLUGIN_DIR', plugin_dir_path( __FILE__ ) );


// Create Settings Fields
include( plugin_dir_path( __FILE__ ) . 'includes/whatsapp-settings-fields.php');

// Create Plugin Admin Menus and Setting Pages
include( plugin_dir_path( __FILE__ ) . 'includes/whatsapp-menu.php');

//  Plugin Admin css
include( plugin_dir_path( __FILE__ ) . 'includes/style_includes.php');

?>