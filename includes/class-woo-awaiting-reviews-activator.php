<?php

/**
 * Fired during plugin activation
 *
 * @link       www.nw2web.com.br
 * @since      1.0.0
 *
 * @package    Woo_Awaiting_Reviews
 * @subpackage Woo_Awaiting_Reviews/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Woo_Awaiting_Reviews
 * @subpackage Woo_Awaiting_Reviews/includes
 * @author     Fausto Rodrigo Toloi <fausto@nw2web.com.br>
 */
class Woo_Awaiting_Reviews_Activator {

    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.0
     */
    public static function activate() {
        flush_rewrite_rules();
    }

}
