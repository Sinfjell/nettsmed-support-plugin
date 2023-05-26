<?php

// Enqueue a CSS file:
function my_custom_dashboard_styles() {
    wp_enqueue_style('my-custom-dashboard-styles', plugin_dir_url(__FILE__) . 'assets/css/my-custom-dashboard.css');
}
add_action('admin_enqueue_scripts', 'my_custom_dashboard_styles');

// Add a new top-level menu to the dashboard:
function my_custom_dashboard_page() {
    add_menu_page(
        'Brukerveiledning', 
        'Brukerveiledning', 
        'edit_posts', // capability
        'brukerveiledning', 
        function() {
            include plugin_dir_path(__FILE__) . 'assets/html/my-custom-dashboard-content.php'; // include your separate HTML/PHP file here
        },
        'dashicons-admin-network' // icon URL or dashicon class
    );
}


add_action('admin_menu', 'my_custom_dashboard_page');

?>
