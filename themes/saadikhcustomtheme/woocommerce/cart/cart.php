<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.3.8
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
wc_print_notices();
do_action( 'woocommerce_before_cart' ); ?>


    <div class='breadcrumb-box'>
        <?php
        /**
         * woocommerce_before_main_content hook.
         *
         * @hooked woocommerce_breadcrumb - 20
         */
        do_action( 'woocommerce_before_main_content' );
        ?>
    </div>
<div class="information-blocks">
    <div class="row">
        <form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
        <div class="col-sm-9 information-entry">
            <h3 class="cart-column-title size-1"><?php _e( 'Products', 'woocommerce' ); ?></h3>


                <?php do_action( 'woocommerce_before_cart_table' ); ?>
                <?php
                foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
                    $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                    $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
                    if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) :
                        $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                        ?>

                        <div class="traditional-cart-entry style-1">
                            <?php
                            $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
                            if ( ! $product_permalink ) {
                                echo $thumbnail;
                            } else {
                                printf( '<a href="%s" class="image">%s</a>', esc_url( $product_permalink ), $thumbnail );
                            }
                            ?>
                            <div class="content">
                                <div class="cell-view">
                                    <?php
                                    if ( ! $product_permalink ) {
                                        echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
                                    } else {
                                        echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s" class="title">%s</a>', esc_url( $product_permalink ), $_product->get_title() ), $cart_item, $cart_item_key );
                                    }
                                    // Meta data
                                    echo WC()->cart->get_item_data( $cart_item );
                                    // Backorder notification
                                    if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                        echo '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>';
                                    }
                                    ?>
                                    <div class="price">
                                        <div class="current">
                                            <?php
                                            echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                                            ?>
                                        </div>
                                    </div>
                                    <div class="quantity-selector detail-info-entry">
                                        <div class="detail-info-entry-title"><?= __( 'Quantity', 'woocommerce' ) ?></div>
                                        <div class="entry number-minus">&nbsp;</div>
                                        <div class="entry number" data-input="<?= sprintf( 'cart[%s][qty]', $cart_item_key ) ?>"><?= $cart_item['quantity']?></div>
                                        <div class="entry number-plus">&nbsp;</div>
                                        <?php
                                        echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
                                            '<a class="button style-17" href="%s" class="remove" title="%s" data-product_id="%s" data-product_sku="%s">'.  __( 'Remove this item', 'woocommerce' ) .'</a>',
                                            esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
                                            __( 'Remove this item', 'woocommerce' ),
                                            esc_attr( $product_id ),
                                            esc_attr( $_product->get_sku() )
                                        ), $cart_item_key );
                                        ?>
                                        <input class="button style-15" type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update Cart', 'woocommerce' ); ?>" />
                                        <div class="hidden">
                                            <?php
                                            if ( $_product->is_sold_individually() ) {
                                                $product_quantity = sprintf( '<input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                                            } else {
                                                $product_quantity = woocommerce_quantity_input( array(
                                                    'input_name'  => "cart[{$cart_item_key}][qty]",
                                                    'input_value' => $cart_item['quantity'],
                                                    'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
                                                    'min_value'   => '0',
                                                ), $_product, false );
                                            }
                                            echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php endif; endforeach;  do_action( 'woocommerce_cart_contents' );?>
        </div>
        <div class="col-sm-3 information-entry">
            <h3 class="cart-column-title size-1" style="text-align: center;"><?php _e( 'Cart Totals', 'woocommerce' ); ?></h3>
            <div class="sidebar-subtotal">
                <div class="price-data">
                    <div class="main"><?= WC()->cart->get_cart_subtotal() ?></div>
                </div>
                <?php if ( wc_coupons_enabled() ) { ?>
                    <div class="additional-data">
                        <div class="title"><?php _e( 'Coupon:', 'woocommerce' ); ?></div>
                        <input type="text" name="coupon_code" class="input-text simple-field" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <input type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply Coupon', 'woocommerce' ); ?>" />
                        <?php do_action( 'woocommerce_cart_coupon' ); ?>

                    </div>
                <?php } ?>

                <?php do_action( 'woocommerce_cart_actions' ); ?>

                <?php wp_nonce_field( 'woocommerce-cart' ); ?>
                <div class="spacer"></div>
                <div class="additional-data">
                    <?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
                </div>
            </div>
        </div>
        </form>
        <?php do_action( 'woocommerce_after_cart' ); ?>
    </div>
</div>
<?php do_action( 'woocommerce_after_cart' ); ?>
<div class="spacer"></div>