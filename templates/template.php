<?php
/**
 * Contact form template.
 *
 * @package NCN_Contact_Form
 */
?>

<div class="ncn_fixed_bar">
	<ul>
		<li>
			<a href="<?php echo esc_url( $advisory ); ?>">
				<img class="ncn_fixed_bar-icon" src="<?php echo esc_url( NCN_FIXED_BAR_URL . 'assets/images/support.png' ); ?>">
				<strong class="ncn_fixed_bar-title"><?php echo esc_html__( 'Tư vấn', 'namncn' ); ?></strong>
			</a>
		</li>
		<li>
			<a href="tel:<?php echo esc_attr( $phone ); ?>">
				<img class="ncn_fixed_bar-icon" src="<?php echo esc_url( NCN_FIXED_BAR_URL . 'assets/images/support.png' ); ?>">
				<strong class="ncn_fixed_bar-title"><?php echo esc_attr( $phone ); ?></strong>
			</a>
		</li>
		<li>
			<a href="sms:<?php echo esc_attr( $phone ); ?>">
				<img class="ncn_fixed_bar-icon" src="<?php echo esc_url( NCN_FIXED_BAR_URL . 'assets/images/comment.png' ); ?>">
				<strong class="ncn_fixed_bar-title"><?php echo esc_html__( 'Gửi tin nhắn', 'namncn' ); ?></strong>
			</a>
		</li>
		<li>
			<a href="<?php echo esc_url( $cart ); ?>">
				<img class="ncn_fixed_bar-icon" src="<?php echo esc_url( NCN_FIXED_BAR_URL . 'assets/images/cart.png' ); ?>">
				<strong class="ncn_fixed_bar-title"><?php echo esc_html__( 'Giỏ hàng', 'namncn' ); ?></strong>
			</a>
		</li>
		<li>
			<a href="<?php echo esc_url( $showroom ); ?>">
				<img class="ncn_fixed_bar-icon" src="<?php echo esc_url( NCN_FIXED_BAR_URL . 'assets/images/location.png' ); ?>">
				<strong class="ncn_fixed_bar-title"><?php echo esc_html__( 'Showroom', 'namncn' ); ?></strong>
			</a>
		</li>
	</ul>
</div><!-- .ncn_fixed_bar -->
