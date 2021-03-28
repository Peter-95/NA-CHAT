<?php


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// cerate manu page 
function whplugin_settings_page()
{

    add_menu_page(
        'NA CHAT SETTING PAGE ',
        'NA CHAT', 
        'manage_options', 
        'NA CHAT-plugin', 
        'whplugin_settings_page_content', 
        'dashicons-whatsapp', 
        100 );
}
add_action( 'admin_menu', 'whplugin_settings_page' );

