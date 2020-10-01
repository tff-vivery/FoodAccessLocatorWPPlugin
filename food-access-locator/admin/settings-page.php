<?php // Pantry Locator - Settings Page

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function food_access_locator_display_settings_page() {
    if ( ! current_user_can( 'manage_options' ) ) return;

    ?>

    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <form action="options.php" method="post">

            <?php 
            
            settings_fields( 'food_access_locator_options' );

            do_settings_sections( 'food_access_locator' );

            submit_button();

            ?>

        </form>
    </div>

    <?php
}
