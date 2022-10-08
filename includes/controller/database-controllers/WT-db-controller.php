<?php
/**
 * @package WORDPRESS_TEMPLATE
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

class WT_DB_Controller {
    private $wpdb;
	private $fee_table_name;

    public function __construct() {
        $this->wpdb = $GLOBALS['wpdb'];
        $this->crate_db_tables();
    }

    public function crate_db_tables() {
        // call functions to create tables here
    }

}
