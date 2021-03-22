<?php //Pantry Locator - Shortcode

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function food_access_locator_shortcode() {
    $environmentsetting = trim(strtoupper(get_option("food_access_locator_options")['environment']));

    if ($environmentsetting == "PRODUCTION") {
        $BaseUrl = 'https://food-access.azurewebsites.net/';
    } else {
        $BaseUrl = 'https://food-access-staging.azurewebsites.net/';
    }

    return
        '<iframe id="FoodAccessFrame" src="' . $BaseUrl
        . '?RegionToken=' . urlencode(get_option("food_access_locator_options")['region_token']) 
        . '&DefaultRadius=' . urlencode(get_option("food_access_locator_options")["default_radius_filter"])
        . '&ShowGoogleTranslate=' . urlencode(get_option("food_access_locator_options")["show_google_translate"])
        . '&GoogleTranslateLanguage=#googtrans(en|' . urlencode(get_option("food_access_locator_options")['default_page_language']) . ')'
        . '" style="width: 100%; height: 800px;" allow="geolocation">' . $environmentsetting
        . '</iframe>';
}
add_shortcode( 'food_access_locator', 'food_access_locator_shortcode' );