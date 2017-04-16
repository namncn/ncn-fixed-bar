<?php
/**
 * Plugin Name: NCN Fixed Bar
 * Plugin URI: http://namncn.com/plugins/ncn-fixed-bar/
 * Description: Create fixed bar.
 * Author: Nam NCN
 * Author URI: http://namncn.com/
 * Version: 1.0.0
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: namncn
 * Domain Path: /languages
 *
 * @package NCN_Fixed_Bar
 */

/*
Copyright (C) 2017 Nam NCN (namncn) namtruongncn@gmail.com

NCN Contact Form is free software under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

NCN Fixed Bar is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Any Posts Widget. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( defined( 'NCN_FIXED_BAR_VERSION' ) ) {
	return;
}

define( 'NCN_FIXED_BAR_VERSION', '1.0.0' );
define( 'NCN_FIXED_BAR_FILE', __FILE__ );
define( 'NCN_FIXED_BAR_PATH', plugin_dir_path( NCN_FIXED_BAR_FILE ) );
define( 'NCN_FIXED_BAR_URL', plugin_dir_url( NCN_FIXED_BAR_FILE ) );

require_once NCN_FIXED_BAR_PATH . 'class-ncn-fixed-bar.php';

if ( ! function_exists( 'ncn_fixed_bar' ) ) {
	/**
	 * Get plugin instance.
	 *
	 * @return NCN_Fixed_Bar
	 */
	function ncn_fixed_bar() {
		return NCN_Fixed_Bar::get_instance();
	}
}

$GLOBALS['ncn_fixed_bar'] = ncn_fixed_bar();
