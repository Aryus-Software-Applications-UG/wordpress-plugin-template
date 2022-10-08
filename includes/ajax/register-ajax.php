<?php
/**
 * @package WORDPRESS_TEMPLATE
 */

 if (!defined('ABSPATH')) {
    exit;
}

class Register_Ajax {
    public function __construct() {
        $this->register_ajax();
    }

    public function register_ajax() {
        add_action('wp_ajax_nopriv_WORDPRESS_TEMPLATE_ajax', array($this, 'WORDPRESS_TEMPLATE_ajax'));
        add_action('wp_ajax_WORDPRESS_TEMPLATE_ajax', array($this, 'WORDPRESS_TEMPLATE_ajax'));
    }

}
