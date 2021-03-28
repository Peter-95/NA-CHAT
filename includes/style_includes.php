<?php

// Register and enqueue CSS on all admin pages

function WhatsApp_admin_styles() {

    wp_register_style( 'WhatsApp-admin-style', plugin_dir_url( __FILE__ )  . 'css/WhatsApp-admin-style.css',   array() , false, 'all');

    wp_enqueue_style( 'WhatsApp-admin-style' );
}
add_action( 'admin_enqueue_scripts', 'WhatsApp_admin_styles' );


// Register and enqueue CSS on all admin pages

function WhatsApp_front_styles() {

    wp_register_style( 'WhatsApp-front-style', plugin_dir_url( __FILE__ )  . 'css/WhatsApp-front-style.css',   array() , false, 'all');

    wp_enqueue_style( 'WhatsApp-front-style' );
}
add_action( 'wp_enqueue_scripts', 'WhatsApp_front_styles' );