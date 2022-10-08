<?php
/**
 *  @package Immotest
 */
/*
    Plugin Name: Immotest
    Description: Provides all functionality for the immotest 
    Version: 1.0.0
    Author: a-sites | Aryus Software Applications UG (haftungsbeschränkt)
    Author URI: https://www.a-sites.de
    License: GPLv2 or later
    Text Domain: immotest    
*/

if(!defined( 'ABSPATH' ) ) {
    die();
}

require_once plugin_dir_path(__FILE__) . 'uninstall.php';
require_once plugin_dir_path(__FILE__) . 'includes/ajax/register-ajax.php';

class WORDPRESS_TEMPLATE {
    public $pluginbasename;
    
    function __construct() {
        $this->pluginbasename = plugin_basename( __FILE__ );
        $this->register_shortcodes();
        $this->register_ajax();
        add_action( 'wp_enqueue_scripts', array($this, 'load_style_and_scripts') );
    }

    function activate() {
        $this->custom_post_type();
        flush_rewrite_rules();
    }

    function uninstall() {
        $uninstall = new WORDPRESS_TEMPLATE_UNINSTALL();
    }

    function load_style_and_scripts() {
        wp_enqueue_style( 'uikit', '//cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css' );
        wp_enqueue_script( 'uikit', '//cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit.min.js', array( 'jquery' ), '3.0.0.30', true );
        wp_enqueue_script( 'uikit-icons', '//cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit-icons.min.js', array( 'jquery' ), '3.0.0.30', true );
    }

    function register_ajax() {
        $ajax = new Register_Ajax();
    }

    function register_shortcodes() {
        $shortcodes = new Register_Shortcodes();
    }
}

if( class_exists( 'WORDPRESS_TEMPLATE' ) ) {
    $WORDPRESS_TEMPLATE = new WORDPRESS_TEMPLATE();

    register_activation_hook( __FILE__, array($WORDPRESS_TEMPLATE, 'activate') );
    register_uninstall_hook( __FILE__, array($WORDPRESS_TEMPLATE, 'uninstall') );
}
