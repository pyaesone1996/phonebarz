<?php

/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if (!defined('ABSPATH')) {
	exit;
}

// do_action('woocommerce_before_checkout_form', $checkout);

// If checkout registration is disabled and not logged in, the user cannot checkout.
if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && !is_user_logged_in()) {
	echo esc_html(apply_filters('woocommerce_checkout_must_be_logged_in_message', __('You must be logged in to checkout.', 'woocommerce')));
	return;
}

?>

<section class="section-b-space">
	<div class="container">
		<div class="checkout-page">
			<div class="checkout-form">
				<form>
					<div class="row">
						<div class="col-lg-6 col-sm-12 col-xs-12">
							<div class="checkout-title">
								<h3>Billing Details</h3>
							</div>
							<div class="row check-out">
								<div class="form-group col-md-6 col-sm-6 col-xs-12">
									<div class="field-label">First Name</div>
									<input type="text" name="field-name" value="" placeholder="">
								</div>
								<div class="form-group col-md-6 col-sm-6 col-xs-12">
									<div class="field-label">Last Name</div>
									<input type="text" name="field-name" value="" placeholder="">
								</div>
								<div class="form-group col-md-6 col-sm-6 col-xs-12">
									<div class="field-label">Phone</div>
									<input type="text" name="field-name" value="" placeholder="">
								</div>
								<div class="form-group col-md-6 col-sm-6 col-xs-12">
									<div class="field-label">Email Address</div>
									<input type="text" name="field-name" value="" placeholder="">
								</div>
								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<div class="field-label">Country</div>
									<select>
										<option>India</option>
										<option>South Africa</option>
										<option>United State</option>
										<option>Australia</option>
									</select>
								</div>
								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<div class="field-label">Address</div>
									<input type="text" name="field-name" value="" placeholder="Street address">
								</div>
								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<div class="field-label">Town/City</div>
									<input type="text" name="field-name" value="" placeholder="">
								</div>
								<div class="form-group col-md-12 col-sm-6 col-xs-12">
									<div class="field-label">State / County</div>
									<input type="text" name="field-name" value="" placeholder="">
								</div>
								<div class="form-group col-md-12 col-sm-6 col-xs-12">
									<div class="field-label">Postal Code</div>
									<input type="text" name="field-name" value="" placeholder="">
								</div>
								<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input type="checkbox" name="shipping-option" id="account-option"> &ensp;
									<label for="account-option">Create An Account?</label>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12 col-xs-12">
							<div class="checkout-details">
								<div class="order-box">
									<div class="title-box">
										<div>Product <span>Total</span></div>
									</div>
									<ul class="qty">
										<li>Pink Slim Shirt × 1 <span>$25.10</span></li>
										<li>SLim Fit Jeans × 1 <span>$555.00</span></li>
									</ul>
									<ul class="sub-total">
										<li>Subtotal <span class="count">$380.10</span></li>
										<li>Shipping
											<div class="shipping">
												<div class="shopping-option">
													<input type="checkbox" name="free-shipping" id="free-shipping">
													<label for="free-shipping">Free Shipping</label>
												</div>
												<div class="shopping-option">
													<input type="checkbox" name="local-pickup" id="local-pickup">
													<label for="local-pickup">Local Pickup</label>
												</div>
											</div>
										</li>
									</ul>
									<ul class="total">
										<li>Total <span class="count">$620.00</span></li>
									</ul>
								</div>
								<div class="payment-box">
									<div class="upper-box">
										<div class="payment-options">
											<ul>
												<li>
													<div class="radio-option">
														<input type="radio" name="payment-group" id="payment-1" checked="checked">
														<label for="payment-1">Check Payments<span class="small-text">Please send a check to Store
																Name, Store Street, Store Town, Store State /
																County, Store Postcode.</span></label>
													</div>
												</li>
												<li>
													<div class="radio-option">
														<input type="radio" name="payment-group" id="payment-2">
														<label for="payment-2">Cash On Delivery<span class="small-text">Please send a check to Store
																Name, Store Street, Store Town, Store State /
																County, Store Postcode.</span></label>
													</div>
												</li>
												<li>
													<div class="radio-option paypal">
														<input type="radio" name="payment-group" id="payment-3">
														<label for="payment-3">PayPal<span class="image"><img src="../assets/images/paypal.png" alt=""></span></label>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="text-end"><a href="#" class="btn-solid btn">Place Order</a></div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
	
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1>
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-2>
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

<?php endif; ?>
	
<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
	
	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_reiew" class="woocommerce-checkout-reiew-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>
<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
