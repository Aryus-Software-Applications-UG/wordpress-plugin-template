<?php
/**
 * @package WORDPRESS_TEMPLATE
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Activate_WORDPRESS_TEMPLATE {

    public function __construct() {
        $this->activate();
    }

    public function activate() {
        flush_rewrite_rules();
    }

    
}


