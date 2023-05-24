<?php
// Create Simpel Admin role
function create_simpel_admin_role() {
    // First remove the role if it exists
    remove_role('simpel_admin');

    // Get the administrator role
    $admin_role = get_role('administrator');
    $admin_capabilities = $admin_role->capabilities;

    // Remove specific capabilities
    unset($admin_capabilities['activate_plugins']);
    unset($admin_capabilities['install_plugins']);
    unset($admin_capabilities['update_plugins']);
    unset($admin_capabilities['delete_plugins']);
    unset($admin_capabilities['edit_plugins']);

    // Add the Simpel Admin role with the modified capabilities
    add_role(
        'simpel_admin',
        'Simpel Admin',
        $admin_capabilities
    );
}


// Hide Plugins menu for Simpel Admin role
add_action('admin_menu', 'simpel_admin_hide_menu', 9999);
function simpel_admin_hide_menu() {
    $current_user = wp_get_current_user();
    if(in_array('simpel_admin', $current_user->roles)){
        remove_menu_page('plugins.php');
        remove_menu_page('tools.php');
        remove_menu_page('jet-dashboard');
        remove_menu_page('options-general.php');
        remove_menu_page('astra');
        remove_menu_page('complianz'); 
        remove_menu_page('wp-mail-smtp'); 
        remove_menu_page('jet-engine'); 
        remove_menu_page('jet-smart-filters'); 

    }
    
}

add_action('admin_menu', 'simpel_admin_hide_menu');

?>
