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
    <div class="product-slide-entry shift-image">
        <div class="product-image">
            <?= $product->get_image() ?>
            <?= $product->get_image() ?>
            <div class="bottom-line left-attached">
                <a href="<?=$product->add_to_cart_url()?>" class="bottom-line-a square"><i class="fa fa-shopping-cart"></i></a>
                <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>
                <a class="bottom-line-a square"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <a class="tag" href="#">Men clothing</a>
        <a class="title" href="<?= $product->get_permalink()?>"><?= $product->get_title() ?></a>
        <div class="article-container style-1">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="price">
            <div class="current"><?= $product->price,' ', get_woocommerce_currency_symbol()?></div>
        </div>
        <div class="list-buttons">
            <a class="button style-10">Add to cart</a>
            <a class="button style-11"><i class="fa fa-heart"></i> Add to Wishlist</a>
        </div>
    </div>
    <div class="clear"></div>
</div>