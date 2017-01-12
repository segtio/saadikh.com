<?php
/**
 * The template for displaying product
 *
 * Override this template by copying it to yourtheme/wc-quick-view/product.php
 * Don't forget to update the image source to show the close, next and previous images properly
 *
 * @author 	Shamim Al Mamun
 * @package 	WC Products Quick View/Templates
 * @version  1.0
 */

global $post, $woocommerce, $product;
?>

<div id="<?= $product->ID ?>" class="overlay-popup visible active">
    <div class="overflow">
        <div class="table-view">
            <div class="cell-view">
                <div class="close-layer"></div>
                <div class="popup-container">

                    <div class="row">
                        <div class="col-sm-6 information-entry">
                            <div class="product-preview-box">
                                <div class="swiper-container product-preview-swiper swiper-swiper-unique-id-5 initialized" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1" id="swiper-unique-id-5">
                                    <div class="swiper-wrapper" style="width: 2220px; transform: translate3d(-370px, 0px, 0px); transition-duration: 0s; height: 497px;"><div class="swiper-slide swiper-slide-duplicate" style="width: 370px; height: 497px;">
                                            <div class="product-zoom-image">
                                                <img src="img/product-main-4.jpg" alt="" data-zoom="img/product-main-4-zoom.jpg">
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 370px; height: 497px;">
                                            <div class="product-zoom-image">
                                                <img src="img/product-main-1.jpg" alt="" data-zoom="img/product-main-1-zoom.jpg">
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 370px; height: 497px;">
                                            <div class="product-zoom-image">
                                                <img src="img/product-main-2.jpg" alt="" data-zoom="img/product-main-2-zoom.jpg">
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 370px; height: 497px;">
                                            <div class="product-zoom-image">
                                                <img src="img/product-main-3.jpg" alt="" data-zoom="img/product-main-3-zoom.jpg">
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 370px; height: 497px;">
                                            <div class="product-zoom-image">
                                                <img src="img/product-main-4.jpg" alt="" data-zoom="img/product-main-4-zoom.jpg">
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate" style="width: 370px; height: 497px;">
                                            <div class="product-zoom-image">
                                                <img src="img/product-main-1.jpg" alt="" data-zoom="img/product-main-1-zoom.jpg">
                                            </div>
                                        </div></div>
                                    <div class="pagination pagination-swiper-unique-id-5"><span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span><span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch"></span></div>
                                    <div class="product-zoom-container">
                                        <div class="move-box">
                                            <img class="default-image" src="img/product-main-1.jpg" alt="">
                                            <img class="zoomed-image" src="img/product-main-1-zoom.jpg" alt="">
                                        </div>
                                        <div class="zoom-area"></div>
                                    </div>
                                </div>
                                <div class="swiper-hidden-edges">
                                    <div class="swiper-container product-thumbnails-swiper swiper-swiper-unique-id-6 initialized pagination-hidden" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="3" data-int-slides="3" data-sm-slides="3" data-md-slides="4" data-lg-slides="4" data-add-slides="4" id="swiper-unique-id-6">
                                        <div class="swiper-wrapper" style="width: 388px; height: 109px;">
                                            <div class="swiper-slide selected swiper-slide-visible swiper-slide-active" style="width: 97px; height: 109px;">
                                                <div class="paddings-container">
                                                    <img src="img/product-main-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-visible" style="width: 97px; height: 109px;">
                                                <div class="paddings-container">
                                                    <img src="img/product-main-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-visible" style="width: 97px; height: 109px;">
                                                <div class="paddings-container">
                                                    <img src="img/product-main-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-visible" style="width: 97px; height: 109px;">
                                                <div class="paddings-container">
                                                    <img src="img/product-main-4.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pagination pagination-swiper-unique-id-6"><span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch" style="display: inline-block;"></span><span class="swiper-pagination-switch swiper-visible-switch" style="display: none;"></span><span class="swiper-pagination-switch swiper-visible-switch" style="display: none;"></span><span class="swiper-pagination-switch swiper-visible-switch" style="display: none;"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 information-entry">
                            <div class="product-detail-box">
                                <h1 class="product-title">T-shirt Basic Stampata</h1>
                                <h3 class="product-subtitle">Loremous Clothing</h3>
                                <div class="rating-box">
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <div class="rating-number">25 Reviews</div>
                                </div>
                                <div class="product-description detail-info-entry">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur.</div>
                                <div class="price detail-info-entry">
                                    <div class="prev">$90,00</div>
                                    <div class="current">$70,00</div>
                                </div>
                                <div class="size-selector detail-info-entry">
                                    <div class="detail-info-entry-title">Size</div>
                                    <div class="entry active">xs</div>
                                    <div class="entry">s</div>
                                    <div class="entry">m</div>
                                    <div class="entry">l</div>
                                    <div class="entry">xl</div>
                                    <div class="spacer"></div>
                                </div>
                                <div class="color-selector detail-info-entry">
                                    <div class="detail-info-entry-title">Color</div>
                                    <div class="entry active" style="background-color: #d23118;">&nbsp;</div>
                                    <div class="entry" style="background-color: #2a84c9;">&nbsp;</div>
                                    <div class="entry" style="background-color: #000;">&nbsp;</div>
                                    <div class="entry" style="background-color: #d1d1d1;">&nbsp;</div>
                                    <div class="spacer"></div>
                                </div>
                                <div class="quantity-selector detail-info-entry">
                                    <div class="detail-info-entry-title">Quantity</div>
                                    <div class="entry number-minus">&nbsp;</div>
                                    <div class="entry number">10</div>
                                    <div class="entry number-plus">&nbsp;</div>
                                </div>
                                <div class="detail-info-entry">
                                    <a class="button style-10">Add to cart</a>
                                    <a class="button style-11"><i class="fa fa-heart"></i> Add to Wishlist</a>
                                    <div class="clear"></div>
                                </div>
                                <div class="tags-selector detail-info-entry">
                                    <div class="detail-info-entry-title">Tags:</div>
                                    <a href="#">bootstrap</a>/
                                    <a href="#">collections</a>/
                                    <a href="#">color/</a>
                                    <a href="#">responsive</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="close-popup"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- close modal markup -->
<div class="modal-close">
    <a href="#" class="quick-view-close">
        <img src="<?php echo plugin_dir_url( __FILE__ ) . '../assets/images/close.png'; ?>" alt="close">
    </a>
</div>
<!-- close modal markup -->

<div class="nav-wrapper">
    <div class="nav-wrapper-inner">
        <?php if ( !empty( $prev_id ) ): ?>
            <div class="left-nav">
                <a href="#" class="<?php echo $prev_class; ?> prev-button"><img src="<?php echo plugin_dir_url( __FILE__ ) . '../assets/images/chevron-left.svg'; ?>" alt="Previous Product"></a>
            </div>
        <?php endif; ?>
        <?php if ( !empty( $next_id ) ): ?>
            <div class="right-nav">
                <a href="#" class="<?php echo $next_class; ?> next-button"><img src="<?php echo plugin_dir_url( __FILE__ ) . '../assets/images/chevron-right.svg'; ?>" alt="Next Product"></a>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- product wrapper -->
<div <?php post_class('product product-wrapper'); ?>>

    <?php woocommerce_show_product_images(); ?>
    <div class="product-brief">
        <?php
        woocommerce_show_product_loop_sale_flash();
        echo '<h3 class="title">', the_title(), '</h3>';
        woocommerce_template_loop_rating();
        woocommerce_template_loop_price();
        woocommerce_template_single_add_to_cart();
        woocommerce_template_single_excerpt();
        woocommerce_template_single_meta();
        ?>
    </div>
</div>
<!-- product wrapper -->
<div class="clear quick-view-nav-wrapper">
    <?php if ( !empty( $prev_id ) ): ?>
        <a href="#" class="button <?php echo $prev_class; ?>">Prev</a>
    <?php endif; ?>
    <?php if ( !empty( $next_id ) ): ?>
        <a href="#" class="button <?php echo $next_class; ?>">Next</a>
    <?php endif; ?>
</div>