<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );
if ( ! empty( $tabs ) ) : ?>

<div class="tabs-container style-1">
    <div class="swiper-tabs tabs-switch">
        <div class="title">Product info</div>
        <div class="list">
        <?php $first ="active"; foreach ( $tabs as $key => $tab ) : ?>
                <a class="tab-switcher <?= $first ?>" ><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></a>
        <?php $first=""; endforeach; ?>
            <div class="clear"></div>
        </div>
    </div>
    <div>
        <?php foreach ( $tabs as $key => $tab ) : ?>
            <div class="tabs-entry " id="tab-<?php echo esc_attr( $key ); ?>">
                <div class="article-container style-1">
                    <div class="information-entry">
                        <?php call_user_func( $tab['callback'], $key, $tab ); ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
<?php endif; ?>