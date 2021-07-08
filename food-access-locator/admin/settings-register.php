<?php // Pantry Locator - Register Settings

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function food_access_locator_register_settings() {
    register_setting(
        'food_access_locator_options', // Option group
        'food_access_locator_options', // Option name
        'food_access_locator_callback_validate_options'
    );

    add_settings_section( 
        'food_access_locator_section_security',  // ID
        'Security Settings', // Title
        'food_access_locator_callback_section_security', // Callback
        'food_access_locator' // Page
    );

    add_settings_field( 
        'region_token', // ID
        'Region Token', // Title
        'food_access_locator_callback_text_field',   // Callback
        'food_access_locator',   // Page
        'food_access_locator_section_security',  // Section
        [ 'id' => 'region_token'
            , 'label' => ''
            , 'width' => '500px' ]
    );
    

    add_settings_section(
        'food_access_locator_section_map',  // ID
        'Map Customization', // Title
        'food_access_locator_callback_section_map', // Callback
        'food_access_locator' // Page
    );

    add_settings_field( 
        'environment', // ID
        'Food Access Environment', // Title
        'food_access_locator_callback_environment',   // Callback
        'food_access_locator',   // Page
        'food_access_locator_section_map',  // Section
        [ 'id' => 'environment'
            , 'label_for' => 'environment'
            , 'custom_data' => 'custom'
             ]
    );

}

add_action( 'admin_init', 'food_access_locator_register_settings' );