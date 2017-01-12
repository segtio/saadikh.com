<?php
/**
 * The template for displaying quick view button
 *
 * Override this template by copying it to yourtheme/wc-quick-view/button.php
 * Don't forget to update the image source to show the loading image properly
 *
 * @author 	Shamim Al Mamun
 * @package 	WC Products Quick View/Templates
 * @version  1.0
 */

global $post;
?>

<a class="top-line-a right open-product" data-product_id="<?php echo $post->ID; ?>"><i class="fa fa-expand"></i> <span><?php  _e('Quick View', 'wpqv') ?></span></a>