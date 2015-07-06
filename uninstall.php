<?php
/**
   *
   * @package    Bootstrap-one-page-woocommerce-checkout
   * @author    Md. Mahabub Masan Manik <m.manik01@gmail.com>
   * @license   MIT License
   * @link      http://plugin.bdwebteam.com/bootstrap-one-page-checkout
   * @copyright 2015 Mahabub Hasan
   * 
 */

// If uninstall, not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Delete plugin settings
delete_option( 'Bootstrap-one-page-woocommerce-checkout' );
delete_site_option( 'Bootstrap-one-page-woocommerce-checkout' );