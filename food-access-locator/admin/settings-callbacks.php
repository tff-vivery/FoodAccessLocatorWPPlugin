<?php // Pantry Locator - Settings Callbacks

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function food_access_locator_callback_validate_options($input) {
    return $input;
}

function food_access_locator_callback_section_security() {
    echo '<p>Your organization must be registered with Thierer Family Foundation in order to use this plugin.  After registration, you will receive information to fill in these settings</p>';
}

function food_access_locator_callback_section_map() {
    echo '<p>These settings enable you to customize the Map Area</p>';
}


function food_access_locator_callback_text_field( $args ) {
    $options = get_option( 'food_access_locator_options', food_access_locator_options_default() );

    $id = isset( $args['id'] ) ? $args['id'] : '';
    $label = isset( $args['label'] ) ? $args['label'] : '';
    $width = isset( $args['width'] ) ? $args['width'] : '200px';

    $value = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';

    echo '<input id="food_access_locator_options_' . $id . '" name="food_access_locator_options[' . $id . ']" 
    type="text" style="width: ' . $width . ';" value="' . $value . '"><br/>';
    echo '<label for="food_access_locator_options_' . $id . '">' . $label . '</label>';
}
