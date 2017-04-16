<?php
/**
 * Setting page.
 *
 * @package NCN_Fixed_Bar
 */

/**
 * [ncncf_admin_menu description]
 * @return [type] [description]
 */
function ncncf_admin_menu() {
	add_options_page( 'NCN: Fixed Bar Setting Page', 'NCN Fixed Bar', 'manage_options', 'ncn-fixed-bar', 'ncncf_options_page' );
}
add_action( 'admin_menu', 'ncncf_admin_menu' );

/**
 * [ncncf_admin_init description]
 * @return [type] [description]
 */
function ncncf_admin_init() {
	register_setting( 'ncncf-settings-group', 'ncncf-advisory', 'sanitize_text_field' );
	add_settings_section( 'section-advisory', '', 'section_advisory_callback', 'ncncf-advisory' );
	add_settings_field( 'field-advisory', esc_html__( 'Tư vấn', 'namncn' ), 'field_advisory_callback', 'ncncf-advisory', 'section-advisory' );

	register_setting( 'ncncf-settings-group', 'ncncf-phone', 'sanitize_text_field' );
	add_settings_section( 'section-phone', '', 'section_phone_callback', 'ncncf-phone' );
	add_settings_field( 'field-phone', esc_html__( 'Số điện thoại', 'namncn' ), 'field_phone_callback', 'ncncf-phone', 'section-phone' );

	register_setting( 'ncncf-settings-group', 'ncncf-sms', 'sanitize_text_field' );
	add_settings_section( 'section-sms', '', 'section_sms_callback', 'ncncf-sms' );
	add_settings_field( 'field-sms', esc_html__( 'Gửi tin nhắn', 'namncn' ), 'field_sms_callback', 'ncncf-sms', 'section-sms' );

	register_setting( 'ncncf-settings-group', 'ncncf-cart', 'sanitize_text_field' );
	add_settings_section( 'section-cart', '', 'section_cart_callback', 'ncncf-cart' );
	add_settings_field( 'field-cart', esc_html__( 'Giỏ hàng', 'namncn' ), 'field_cart_callback', 'ncncf-cart', 'section-cart' );

	register_setting( 'ncncf-settings-group', 'ncncf-showroom', 'sanitize_text_field' );
	add_settings_section( 'section-showroom', '', 'section_showroom_callback', 'ncncf-showroom' );
	add_settings_field( 'field-showroom', esc_html__( 'Showroom', 'namncn' ), 'field_showroom_callback', 'ncncf-showroom', 'section-showroom' );
}
add_action( 'admin_init', 'ncncf_admin_init' );

/**
 * [section_advisory_callback description]
 * @return [type] [description]
 */
function section_advisory_callback() {
	echo '';
}

/**
 * [section_phone_callback description]
 * @return [type] [description]
 */
function section_phone_callback() {
	echo '';
}

/**
 * [section_sms_callback description]
 * @return [type] [description]
 */
function section_sms_callback() {
	echo '';
}

/**
 * [section_cart_callback description]
 * @return [type] [description]
 */
function section_cart_callback() {
	echo '';
}

/**
 * [section_showroom_callback description]
 * @return [type] [description]
 */
function section_showroom_callback() {
	echo '';
}

/**
 * [field_advisory_callback description]
 * @return [type] [description]
 */
function field_advisory_callback() {
	$advisory = get_option( 'ncncf-advisory' );
	if ( empty( $advisory ) ) {
		$advisory = '#';
	}

	echo "<input type='text' name='ncncf-advisory' value='" . esc_attr( $advisory ) . "' />";
}

/**
 * [field_phone_callback description]
 * @return [type] [description]
 */
function field_phone_callback() {
	$phone = get_option( 'ncncf-phone' );
	if ( empty( $phone ) ) {
		$phone = '01662663666';
	}

	echo "<input type='text' name='ncncf-phone' value='" . esc_attr( $phone ) . "' />";
}

/**
 * [field_sms_callback description]
 * @return [type] [description]
 */
function field_sms_callback() {
	$sms = get_option( 'ncncf-sms' );
	if ( empty( $sms ) ) {
		$sms = '01662663666';
	}

	echo "<input type='text' name='ncncf-sms' value='" . esc_attr( $sms ) . "' />";
}

/**
 * [field_cart_callback description]
 * @return [type] [description]
 */
function field_cart_callback() {
	$cart = get_option( 'ncncf-cart' );
	if ( empty( $cart ) ) {
		$cart = '#';
	}

	echo "<input type='text' name='ncncf-cart' value='" . esc_attr( $cart ) . "' />";
}

/**
 * [field_showroom_callback description]
 * @return [type] [description]
 */
function field_showroom_callback() {
	$showroom = get_option( 'ncncf-showroom' );
	if ( empty( $showroom ) ) {
		$showroom = '#';
	}

	echo "<input type='text' name='ncncf-showroom' value='" . esc_attr( $showroom ) . "' />";
}

/**
 * [ncncf_options_page description]
 * @return [type] [description]
 */
function ncncf_options_page() {
	?>
	<div class="wrap">
		<h2><?php echo esc_html_e( 'NCN: Fixed Bar Setting Page', 'namncn' ); ?></h2>
		<form action="options.php" method="POST">
			<?php settings_fields( 'ncncf-settings-group' ); ?>
			<?php do_settings_sections( 'ncncf-advisory' ); ?>
			<?php do_settings_sections( 'ncncf-phone' ); ?>
			<?php do_settings_sections( 'ncncf-sms' ); ?>
			<?php do_settings_sections( 'ncncf-cart' ); ?>
			<?php do_settings_sections( 'ncncf-showroom' ); ?>
			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}

