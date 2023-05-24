<?php
// Create Simpel Admin role
function create_simpel_admin_role() {
    // First remove the role if it exists
    remove_role('simpel_admin');

    // Get the administrator role
    $admin_role = get_role('administrator');
    $admin_capabilities = $admin_role->capabilities;

    // Remove a specific capability
    unset($admin_capabilities['edit_others_posts']);

    // Add the Simpel Admin role with the modified capabilities
    add_role(
        'simpel_admin',
        'Simpel Admin',
        $admin_capabilities
    );
}


// Hide Plugins menu for Simpel Admin role
add_action('admin_menu', 'simpel_admin_hide_menu');
function simpel_admin_hide_menu() {
    $current_user = wp_get_current_user();
    if(in_array('simpel_admin', $current_user->roles)){
        remove_menu_page('plugins.php');
    }
}
?>
