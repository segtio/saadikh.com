<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}
?>
<div class="col-md-3 col-sm-4 shop-grid-item">
    <div class="product-slide-entry">
        <div class="product-image">
            <a href="<?= $product->get_permalink()?>"><?= $product->get_image() ?></a>
            <?php do_action("woocommerce_quick_btn"); ?>
            <div class="bottom-line">
                <div class="right-align">
                    <a  href="<?=$product->add_to_cart_url()?>" class="bottom-line-a square"><i class="fa fa-heart"></i></a>
                </div>
                <div>
                    <a href="<?=$product->add_to_cart_url()?>" class="bottom-line-a"><i class="fa fa-shopping-cart"></i><?php _e("Add to cart", "woocommerce") ?></a>
                </div>
            </div>
        </div>
        <?= $product->get_categories( ', ', '<span class="tag">' . _n( 'Category:', 'Categories:', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), 'woocommerce' ) . ' ', '.</span>' ); ?>
        <a class="title" href="<?= $product->get_permalink()?>"><?= $product->get_title() ?></a>
        <div class="price">
            <div class="current"><?= $product->price,' ', get_woocommerce_currency_symbol()?></div>
        </div>
    </div>
    <div class="clear"></div>
</div>