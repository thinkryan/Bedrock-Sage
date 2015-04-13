<?php
/**
 * Single product quantity inputs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<div class="row spacer15"></div>
<div class="row">
<div class="col-md-6">
	<h6><?php _e('Quantity', 'woocommerce'); ?></h6>
	<div class="input-group">
		<a class="input-group-addon flat dec">-</a>
		<input type="number"  <?php if ( is_numeric( $min_value ) ) : ?>min="<?php echo esc_attr( $min_value ); ?>"<?php endif; ?> <?php if ( is_numeric( $max_value ) ) : ?>max="<?php echo esc_attr( $max_value ); ?>"<?php endif; ?> name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $input_value ); ?>" title="<?php _ex( 'Qty', 'Product quantity input tooltip', 'woocommerce' ) ?>" class="input-text qty text form-control" />
		<a class="input-group-addon flat inc">+</a>
	</div>
</div>
</div>
