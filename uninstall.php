<?php
/**
 * @package WORDPRESS-TEMPLATE
 */

if (!defined('ABSPATH')) {
    exit;
}

class WORDPRESS_TEMPLATE_UNINSTALL {
    public function __construct() {
        $this->uninstall();
    }

    public function uninstall() {
        //TODO: delete CPT
        //TODO: delete all the plugin data from the DB
    }
}
