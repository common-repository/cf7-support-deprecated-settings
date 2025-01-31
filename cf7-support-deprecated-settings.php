<?php
/*
Plugin Name: Contact Form 7: Support Deprecated Settings
Plugin URI: https://github.com/dmchale/cf7-support-deprecated-settings
Description: Provide continued support for `on_sent_ok` and `on_submit` within Contact Form 7's Additional Settings
Version: 0.4
Author: Dave McHale
Author URI: http://www.binarytemplar.com
License: GPL2
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Include our required class
require_once( 'classes/cf7-support-deprecated-settings.php' );

// Class init, attach to the filter
$cf7sds = new CF7_Support_Deprecated_Settings();
