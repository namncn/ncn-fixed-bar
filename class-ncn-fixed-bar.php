<?php
/**
 * NCN Contact Form class.
 *
 * @package NCN_Fixed_Bar
 */

/**
 * Class NCN_Fixed_Bar
 */
final class NCN_Fixed_Bar {

	/**
	 * Plugin instance.
	 *
	 * @var NCN_Fixed_Bar
	 * @access private
	 */
	private static $instance = null;

	/**
	 * Get plugin instance.
	 *
	 * @return NCN_Fixed_Bar
	 * @static
	 */
	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * Constructor.
	 *
	 * @access private
	 */
	private function __construct() {
		add_action( 'plugins_loaded', array( $this, 'init' ) );
	}

	/**
	 * Code you want to run when all other plugins loaded.
	 */
	public function init() {
		load_plugin_textdomain( 'namncn', false, NCN_FIXED_BAR_PATH . 'languages' );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'wp_footer', array( $this, 'template' ) );
		require_once NCN_FIXED_BAR_PATH . 'inc/ncn-fixed-bar-setting-page.php';
	}

	/**
	 * Print contact form template.
	 */
	function template() {
		if ( ! $advisory = get_option( 'ncncf-advisory' ) ) {
			$advisory = '#';
		}
		if ( ! $phone = get_option( 'ncncf-phone' ) ) {
			$phone = '01662663666';
		}
		if ( ! $sms = get_option( 'ncncf-sms' ) ) {
			$sms = '01662663666';
		}
		if ( ! $cart = get_option( 'ncncf-cart' ) ) {
			$cart = '#';
		}
		if ( ! $showroom = get_option( 'ncncf-showroom' ) ) {
			$showroom = '#';
		}

		$template_file = NCN_FIXED_BAR_PATH . 'templates/template.php';

		if ( locate_template( 'ncn-fixed-bar/template.php' ) ) {
			$template_file = locate_template( 'ncn-fixed-bar/template.php' );
		}

		require_once $template_file;
	}

	/**
	 * Enqueue all style and scripts.
	 */
	public function enqueue_scripts() {
		wp_enqueue_style( 'ncncf-style', NCN_FIXED_BAR_URL . 'assets/css/style.min.css', array(), '1.0.1' );
	}
}
