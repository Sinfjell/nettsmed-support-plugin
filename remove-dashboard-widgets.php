<?php
function remove_dashboard_widgets_wrap() {
    echo '
    <style type="text/css">
    #dashboard-widgets-wrap {
        display: none;
    }
    </style>';
}

add_action('admin_head', 'remove_dashboard_widgets_wrap');

// Remove screen options for non-admin users
function wpb_remove_screen_options() { 
if(!current_user_can('manage_options')) {
return false;
}
return true; 
}
add_filter('screen_options_show_screen', 'wpb_remove_screen_options');

// This code make sure the welcome widget is always shown
add_action('admin_init', 'show_welcome_panel');

function show_welcome_panel() {
    update_user_meta(get_current_user_id(), 'show_welcome_panel', 1);
}
?>