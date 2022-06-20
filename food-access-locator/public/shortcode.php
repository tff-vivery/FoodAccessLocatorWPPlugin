<?php //Pantry Locator - Shortcode

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function food_access_locator_shortcode() {
    $environmentsetting = trim(get_option("food_access_locator_options")['environment']);

    if ($environmentsetting == "Production") {
        $CDNUrl = 'https://food-access-widget-cdn.azureedge.net/accessfood-widget/';
    } 
    elseif ($environmentsetting == "Staging") {
        $CDNUrl = 'https://food-access-widget-cdn.azureedge.net/accessfood-widget-staging/';
    }
    elseif ($environmentsetting == "Demo") {
        $CDNUrl = 'https://food-access-widget-cdn.azureedge.net/accessfood-widget-demo/';
    }
    elseif ($environmentsetting == "OptimusProduction") {
        $CDNUrl ='https://food-access-widget-cdn.azureedge.net/accessfood-widget-optimus/';
    }
    elseif ($environmentsetting == "OptimusStaging") {
        $CDNUrl = 'https://food-access-widget-cdn.azureedge.net/accessfood-widget-optimus-staging/';
    }
   

    return
        '<!-- Plugin Version: 3.0.3 -->'
        . '<div class="accessfood-widget" data-map="'
        . urlencode(get_option("food_access_locator_options")['region_token'])
        . '" data-environment="'
        . $environmentsetting
        . '" style="max-width: 100% !important"></div>'
        . '<link href="'
        . $CDNUrl
        . 'index.css" rel="stylesheet"></link>'
        . '<script src="'
        . $CDNUrl 
        . 'index.js"></script>';
}
add_shortcode( 'food_access_locator', 'food_access_locator_shortcode' );