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
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     2.3.0
 */
if (!defined('ABSPATH')) {
    exit;
}
?>
<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_breadcrumb - 20
 */
do_action('woocommerce_before_main_content');
?>
<div class="information-blocks">
    <div class="row">
        <div class="col-sm-9 information-entry">

            <?php
            wc_print_notices();
            do_action('woocommerce_before_checkout_form', $checkout);
            // If checkout registration is disabled and not logged in, the user cannot checkout
            if (!$checkout->enable_signup && !$checkout->enable_guest_checkout && !is_user_logged_in()) {
                echo apply_filters('woocommerce_checkout_must_be_logged_in_message', __('You must be logged in to checkout.', 'woocommerce'));
                return;
            }
            ?>
            <div class="accordeon size-1">
                <?php do_action('woocommerce_checkout_before_customer_details'); ?>
                <form name="checkout" method="post" class="checkout woocommerce-checkout"
                      action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">

                    <?php if (sizeof($checkout->checkout_fields) > 0) : ?>
                        <div class="accordeon-title">
                        <span class="number">
                            <i class="fa fa-barcode"></i>
                        </span>
                            <?php if (wc_ship_to_billing_address_only() && WC()->cart->needs_shipping()) : ?>

                                <?php _e('Billing &amp; Shipping', 'woocommerce'); ?>

                            <?php else : ?>

                                <?php _e('Billing Details', 'woocommerce'); ?>

                            <?php endif; ?>
                        </div>
                        <div class="accordeon-entry" style="display: block;">
                            <?php do_action('woocommerce_checkout_billing'); ?>
                            <?php do_action('woocommerce_checkout_shipping'); ?>
                            <?php do_action('woocommerce_checkout_after_customer_details'); ?>
                        </div>

                    <?php endif; ?>
                    <div class="accordeon-title active">
                        <span class="number">
                            <i class="fa fa-bars"></i>
                        </span>
                        <?php _e('Your order', 'woocommerce'); ?>
                    </div>
                    <div class="accordeon-entry">
                        <?php do_action('woocommerce_checkout_before_order_review'); ?>

                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <?php do_action('woocommerce_checkout_order_review'); ?>
                        </div>
                    </div>

                    <?php do_action('woocommerce_checkout_after_order_review'); ?>

                </form>
            </div>


            <?php do_action('woocommerce_after_checkout_form', $checkout); ?>
        </div>
        <div class="col-sm-3 information-entry">
            <h3 class="cart-column-title size-2">Your Checkout Progress</h3>
            <div class="checkout-progress-widget">
                <div class="step-entry">1.
                    <?php if (wc_ship_to_billing_address_only() && WC()->cart->needs_shipping()) : ?>

                        <?php _e('Billing &amp; Shipping', 'woocommerce'); ?>

                    <?php else : ?>

                        <?php _e('Billing Details', 'woocommerce'); ?>

                    <?php endif; ?>
                </div>
                <div class="step-entry">2.   <?php _e('Your order', 'woocommerce'); ?></div>
            </div>
            <div class="article-container style-1">
                <p>Custom CMS block displayed below the one page checkout progress block. Put your own content here.</p>
            </div>
            <div class="information-blocks">
                <a class="sale-entry vertical" href="#">
                    <span class="hot-mark yellow">hot</span>
                    <span class="sale-price"><span>-40%</span> Valentine <br> Underwear Sale</span>
                    <span class="sale-description">Lorem ipsum dolor sitamet, conse adipisc sed do eiusmod tempor.</span>
                    <img style="" class="sale-image" src="img/text-widget-image-3.jpg" alt="">
                </a>
            </div>
        </div>

    </div>
</div>
