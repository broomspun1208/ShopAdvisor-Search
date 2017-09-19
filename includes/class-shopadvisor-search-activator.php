<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    shopadvisor-search
 * @subpackage Shopadvisor-search/includes
 * @author     Your Name <email@example.com>
 */
class ShopAdvisor_Search_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
        if ( ! is_woocommerce_active() || version_compare( get_option( 'woocommerce_db_version' ), '2.5', '<' ) ) {
            add_action( 'admin_notices', 'ShopAdvisor_Search::woocommerce_inactive_notice' );
            return;
        }
	}

}
