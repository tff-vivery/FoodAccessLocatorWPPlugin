<?php
/**
 * @package Food_Access_Locator
 * @version 1.0.0
 */
/*
Plugin name: Food Access Locator
Plugin URI:
Description: This plugin allows users to access the Food Access Locator map functionality for searching for Food Access Locations
Author: WEBIT Services
Version: 1.0.0
Author URI: https://www.webitservices.com/
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Admin area
if ( is_admin() ) {
    require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
    require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
    require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
    require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';
}

require_once plugin_dir_path( __FILE__ ) . 'public/shortcode.php';

function food_access_locator_options_default () {
    return array(
        'region_token' => ''
    );
}


// Logic for Plugin Updater
require_once plugin_dir_path( __FILE__ ) . 'plugin-update-checker/plugin-update-checker.php';

$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/SoWaky/FoodAccessLocatorWPPlugin/blob/main/release/pluginupdater.json',
	__FILE__, //Full path to the main plugin file or functions.php.
	'food_access_locator'
);