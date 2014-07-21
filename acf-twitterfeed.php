<?php

/*
Plugin Name: Advanced Custom Fields: Twitter
Plugin URI: PLUGIN_URL
Description: DESCRIPTION
Version: 1.0.0
Author: AUTHOR_NAME
Author URI: AUTHOR_URL
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-twitterfeed', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );
include_once('twitterfeed-options.php');
include_once('twitterfeed-functions.php');


// add_action('admin_init', 'plugin_admin_init');
// function plugin_admin_init(){
// register_setting( 'plugin_options', 'plugin_options', 'plugin_options_validate' );
// add_settings_section('plugin_main', 'Main Settings', 'plugin_section_text', 'plugin');
// add_settings_field('plugin_text_string', 'Plugin Text Input', 'plugin_setting_string', 'plugin', 'plugin_main');
// }


// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_twitterfeed( $version ) {

	include_once('acf-twitterfeed-v5.php');

}

add_action('acf/include_field_types', 'include_field_types_twitterfeed');




// 3. Include field type for ACF4
function register_fields_twitterfeed() {

	include_once('acf-twitterfeed-v4.php');

}

add_action('acf/register_fields', 'register_fields_twitterfeed');




?>
