<?php
/**
 * Login form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
if ( is_user_logged_in() ) {
    return;
}
?>

<div class="login-box">
    <div class="article-container style-1">
        <p><?php _e( $message, 'woocommerce' ); ?></p>
    </div>
    <form method="post" class="login" <?php if ( $hidden ) echo 'style="display:none;"'; ?>>
        <label><?php _e( 'Username or email', 'woocommerce' ); ?></label>
        <input class="simple-field" type="text" name="username" id="username" placeholder="<?php _e( 'Username or email', 'woocommerce' ); ?>" value="">
        <label><?php _e( 'Password', 'woocommerce' ); ?></label>
        <input class="simple-field" name="password" id="password" type="password" placeholder="<?php _e( 'Password', 'woocommerce' ); ?>" value="">
        <?php do_action( 'woocommerce_login_form' ); ?>
        <p><?php wp_nonce_field( 'woocommerce-login' ); ?></p>
        <label class="checkbox-entry">
            <input name="rememberme" type="checkbox" id="rememberme" value="forever" type="checkbox"> <span class="check"></span> <?php _e( 'Remember me', 'woocommerce' ); ?>
        </label>
        <div class="button style-10"><?php esc_attr_e( 'Login', 'woocommerce' ); ?><input type="submit" value=""></div>
        <input type="hidden" name="redirect" value="<?php echo esc_url( $redirect ) ?>" />
        <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="forgot-password"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a>
        <?php do_action( 'woocommerce_login_form_end' ); ?>
    </form>
</div>