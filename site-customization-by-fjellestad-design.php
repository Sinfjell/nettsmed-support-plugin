<?php
/**
* Plugin Name: Site Customization by Fjellestad Design
* Plugin URI: https: //kernl. us
* Description: My super great plugin. It is great.
* Version: 1.0.7
* Author: Sindre Fjellestad
* Author URI: https://fjellestad.design
*/

require 'kernl-update-checker/kernl-update-checker.php';
$MyUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://kernl.us/api/v1/updates/646b94421a29b03ad5288e84/',
    __FILE__,
    'site-customizer-by-fjellestad-design'
);

// Include your PHP files
require plugin_dir_path(__FILE__) . 'fjellestad-support-backend-widget.php';
require plugin_dir_path(__FILE__) . 'remove-dashboard-widgets.php';

?>