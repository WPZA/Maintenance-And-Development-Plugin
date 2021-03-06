<?php

/**
 *
 * @link              https://wpza.co.za
 * @since             1.0.0
 * @package           wpza-maintenance
 *
 * @wordpress-plugin
 * Plugin Name:       Maintenance & Development Mode
 * Plugin URI:        https://wpza.co.za/
 * Description:       This plugin puts the site into maintenance mode. Use this plugin while developing your web site.
 * Version:           2.0.0
 * Author:            Donovan Maidens
 * Author URI:        https://wpza.co.za
 */
// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
if (!class_exists("WPZAMaintenancePlugin")) {

    class WPZAMaintenancePlugin {

        public function __construct() {
            require_once(sprintf("%s/includes/wpza-maintenance-development-mode.php", dirname(__FILE__)));
        }

        public static function activate() {
            // Do something
        }

        public static function deactivate() {
            // Do something
        }
        
    }
    
}

if (class_exists('WPZAMaintenancePlugin')) {
    // Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('WPZAMaintenancePlugin', 'activate'));
    register_deactivation_hook(__FILE__, array('WPZAMaintenancePlugin', 'deactivate'));

    $plugin = new WPZAMaintenancePlugin();
} 