<?php
/*
 * Plugin Name:       Epotis Cookie Policy
 * Description:       A cookie acceptance block.
 * Version:           1.0.0
 * Requires at least: 5.9
 * Requires PHP:      7.2
 * Author:            Epotis team
 * Text Domain:       e-potis
 */

if(!function_exists('add_action')) {
    echo 'Seems like you stumbled here by accident.';
    exit;
}

//  Setup
define('EPT_COOKIES_DIR', plugin_dir_path(__FILE__));

//  Includes
$rootFiles = glob(EPT_COOKIES_DIR . 'includes/*.php');
$subDirectoryFiles = glob(EPT_COOKIES_DIR . 'includes/**/*.php');
$subSubDirectoryFiles = glob(EPT_COOKIES_DIR . 'includes/**/**/*.php');
$allFiles = array_merge($rootFiles, $subDirectoryFiles, $subSubDirectoryFiles);

foreach($allFiles as $filename){
    include_once($filename);
}
 
//  Hooks
add_action('init','ept_cookie_register_blocks');
add_action('init', 'ept_cookie_load_php_translations');
add_action('wp_enqueue_scripts', 'ept_cookie_load_block_translations');

