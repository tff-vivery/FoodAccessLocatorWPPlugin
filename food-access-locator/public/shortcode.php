<?php //Pantry Locator - Shortcode

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function food_access_locator_shortcode() {
    return
        '<iframe id="FoodAccessFrame" 
        src="https://food-access-test.azurewebsites.net/?RegionToken=' . urlencode(get_option("food_access_locator_options")['region_token']) 
        . '&DefaultRadius=' . urlencode(get_option("food_access_locator_options")["default_radius_filter"])
        . '&ShowGoogleTranslate=' . urlencode(get_option("food_access_locator_options")["show_google_translate"])
        . '" style="width: 100%; height: 800px;" allow="geolocation">
        </iframe>';
}
add_shortcode( 'food_access_locator', 'food_access_locator_shortcode' );