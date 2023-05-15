<?php
/**
 * Theme config file.
 *
 * @package POVASH
 * @author  ThemeKalia
 * @version 1.0
 * changed
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}

$config = array();

$config['default']['povash_main_header'][] 	= array( 'povash_preloader', 98 );
$config['default']['povash_main_header'][] 	= array( 'povash_main_header_area', 99 );

$config['default']['povash_main_footer'][] 	= array( 'povash_preloader', 98 );
$config['default']['povash_main_footer'][] 	= array( 'povash_main_footer_area', 99 );

$config['default']['povash_sidebar'][] 	    = array( 'povash_sidebar', 99 );

$config['default']['povash_banner'][] 	    = array( 'povash_banner', 99 );


return $config;
