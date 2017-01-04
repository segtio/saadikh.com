<?php
/**
 * Auth form login
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/auth/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates/Auth
 * @version 2.4.0
 */
if (!defined('ABSPATH')) {
    exit;
}
?>

<?php do_action('woocommerce_auth_page_header'); ?>

<?php wc_print_notices(); ?>


    <div class="article-container style-1">
        <h3><?php printf(__('%s would like to connect to your store', 'woocommerce'), esc_html($app_name)); ?></h3>
        <p><?php printf(__('To connect to %1$s you need to be logged in. Log in to your store below, or %2$scancel and return to %1$s%3$s', 'woocommerce'), wc_clean($app_name), '<a href="' . esc_url($return_url) . '">', '</a>'); ?></p>

        <form method="post" class="wc-auth-login">
            <label><?php _e('Username or email address', 'woocommerce'); ?></label>
            <input name="username" type="text" value="<?php echo (!empty($_POST['username'])) ? esc_attr($_POST['username']) : ''; ?>" placeholder="<?php _e('Username or email address', 'woocommerce'); ?>" class="simple-field">
            <label><?php _e('Password', 'woocommerce'); ?></label>
            <input  name="password" type="password" value="" placeholder="<?php _e('Password', 'woocommerce'); ?>" class="simple-field">
            <p><?php wp_nonce_field('woocommerce-login'); ?></p>
            <div class="button style-10"><?php esc_attr_e('Login', 'woocommerce'); ?><input name="login" type="submit" value=""></div>
            <a class="forgot-password" href="#">Forgot password?</a>
            <input type="hidden" name="redirect" value="<?php echo esc_url($redirect_url); ?>"/>
        </form>
    </div>


<?php do_action('woocommerce_auth_page_footer'); ?>