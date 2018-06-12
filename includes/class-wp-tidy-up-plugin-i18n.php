<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://webmobapps.com
 * @since      1.0.0
 *
 * @package    Wp_Tidy_Up_Plugin
 * @subpackage Wp_Tidy_Up_Plugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Tidy_Up_Plugin
 * @subpackage Wp_Tidy_Up_Plugin/includes
 * @author     Paul Anthony McGowan <anthonymcgowan1@gmail.com>
 */
class Wp_Tidy_Up_Plugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-tidy-up-plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
