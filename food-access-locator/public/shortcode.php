<?php //Pantry Locator - Shortcode

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function food_access_locator_shortcode() {
    $environmentsetting = trim(strtoupper(get_option("food_access_locator_options")['environment']));

    if ($environmentsetting == "PRODUCTION") {
        $BaseUrl = 'https://client.foodaccessportal.org/';
    } 
    elseif ($environmentsetting == "MULTINETWORK") {
        $BaseUrl = 'https://food-access-multinetwork.azurewebsites.net/';
    }
    else {
        $BaseUrl = 'https://client-staging.foodaccessportal.org/';
    }


    return
        '<!-- Plugin Version: 2.0.0 -->'
        . '<iframe id="FoodAccessFrame" src="' . $BaseUrl
        . '?RegionToken=' . urlencode(get_option("food_access_locator_options")['region_token']) 
        . '" style="overflow:hidden; overflow-x:hidden; overflow-y:hidden; height:800px; width:100%; position:relative; top:0px; left:0px; right:0px; bottom:0px; border:0;" allow="geolocation">' . $environmentsetting
        . '</iframe>';
}
add_shortcode( 'food_access_locator', 'food_access_locator_shortcode' );