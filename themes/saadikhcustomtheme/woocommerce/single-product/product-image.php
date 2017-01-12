<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
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
 * @version 2.7.0
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
global $post, $product;
$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
$full_size_image   = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
$thumbnail_post    = get_post( $post_thumbnail_id );
$image_title       = $thumbnail_post->post_content;
?>

<?php
$attributes = array(
    'title'                   => $image_title,
    'data-large-image'        => $full_size_image[0],
    'data-large-image-width'  => $full_size_image[1],
    'data-large-image-height' => $full_size_image[2],
);

?>
<div class="product-preview-box">
    <div class="swiper-container product-preview-swiper" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="product-zoom-image">
                    <?php
                    if ( has_post_thumbnail() ) {
                        echo apply_filters( 'woocommerce_single_product_image_thumbnail_html','<img src="'. get_the_post_thumbnail_url( $post->ID, 'shop_thumbnail' ).'" alt="'.$image_title.'" class="wp-post-image"  data-zoom="%s"/>' );
                    } else {
                        echo sprintf( '<img src="%s" alt="%s" class="wp-post-image"  data-zoom="%s"/>', esc_url( wc_placeholder_img_src() ), esc_html__( 'Awaiting product image', 'woocommerce' ), esc_url( wc_placeholder_img_src() ) );
                    }
                    do_action( 'woocommerce_product_thumbnails' );
                    ?>
                </div>
            </div>
        </div>
        <div class="pagination"></div>
        <div class="product-zoom-container">
            <div class="move-box">
                <img class="default-image" src="<?= get_the_post_thumbnail_url( $post->ID, 'shop_thumbnail' ) ?>" alt="" />
                <img class="zoomed-image" src="<?=  esc_url( wc_placeholder_img_src() ) ?>" alt="" />
            </div>
            <div class="zoom-area"></div>
        </div>
    </div>
</div>