<?php
/**
   *
   * @package   bdwebteam-recent-post-tabs-widget
   * @author    Md. Mahabub Masan Manik <m.manik01@gmail.com>
   * @license   MIT License
   * @link      http://plugin.bdwebteam.com/bdwebteam-recent-post-tabs-widget
   * @copyright 2015 Mahabub Hasan
   * 
 */

// If uninstall, not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Delete plugin settings
delete_option( 'bdwebteam-recent-post-tabs-widget' );
delete_site_option( 'bdwebteam-recent-post-tabs-widget' );