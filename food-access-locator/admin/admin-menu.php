<?php //Food Access Locator - Admin Menu

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Top level menu
function food_access_locator_add_toplevel_menu() {
    add_menu_page(
        'Food Access Locator Settings',
        'Food Access Locator',
        'manage_options',
        'food_access_locator',
        'food_access_locator_display_settings_page',
        'dashicons-admin-generic',
        null
    );
}
add_action( 'admin_menu', 'food_access_locator_add_toplevel_menu' );