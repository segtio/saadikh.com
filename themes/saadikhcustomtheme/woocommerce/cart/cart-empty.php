<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
wc_print_notices();
?>
<div class="row">
    <div class="col-md-9 col-md-push-3 col-sm-8 col-sm-push-4">
        <div class="information-blocks">
            <div class="container-404">
                <div class="description"><?php _e( 'Your cart is currently empty.', 'woocommerce' ) ?></div>
                <?php do_action( 'woocommerce_cart_is_empty' ); ?>
                <?php if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
                    <div class="text"> <a href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" ><?php _e( 'Return To Shop', 'woocommerce' ) ?></a></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-md-pull-9 col-sm-4 col-sm-pull-8 blog-sidebar">
        <?php
        /**
         * woocommerce_sidebar hook.
         *
         * @hooked woocommerce_get_sidebar - 10
         */
        do_action( 'woocommerce_sidebar' );
        ?>
    </div>
</div>
