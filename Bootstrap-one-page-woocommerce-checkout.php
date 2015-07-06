<?php
/**
Plugin Name:  Bootstrap one page woocommerce checkout
Plugin URI: http://plugin.bdwebteam.com/bootstrap-one-page-checkout/
Description: Just a bootstrap one page woocommerce checkout.
Author: mahabub hasan
Author URI: http://bdwebteam.com/
Text Domain: Bootstrap-one-page-woocommerce-checkout
Domain Path: /languages/
Version: 1.1.1
*/
if ( ! defined( 'WPINC' ) ) {
	die;
}
if (!defined('PLUGIN_ROOT')) {
	define('PLUGIN_ROOT', dirname(__FILE__) . '/');
	define('PLUGIN_NAME', basename(dirname(__FILE__)) . '/' . basename(__FILE__));
}
if (! defined ( 'WP_CONTENT_URL' ))
	define ( 'WP_CONTENT_URL', get_option ( 'siteurl' ) . '/wp-content' );
if (! defined ( 'WP_CONTENT_DIR' ))
	define ( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
if (! defined ( 'WP_PLUGIN_URL' ))
	define ( 'WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins' );
if (! defined ( 'WP_PLUGIN_DIR' ))
	define ( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
    require_once(dirname(__FILE__).'/includes/functions.php'); 
    require_once(dirname(__FILE__).'/includes/setting.php'); 