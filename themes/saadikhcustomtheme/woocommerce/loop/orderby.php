<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     2.2.0
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<div class="shop-grid-controls">
    <form class="woocommerce-ordering" method="get">
        <div class="entry">
            <div class="inline-text">Arranger par</div>
            <div class="simple-drop-down">

                <select name="orderby" class="orderby">
                    <?php foreach ($catalog_orderby_options as $id => $name) : ?>
                        <option
                            value="<?php echo esc_attr($id); ?>" <?php selected($orderby, $id); ?>><?php echo esc_html($name); ?></option>
                    <?php endforeach; ?>
                </select>
                <?php
                $order_class= '';
                if (empty($_GET["order"]) || strtolower ($_GET["order"]) == "asc"){
                    $order_class = "active";
                }
                // Keep query string vars intact
                foreach ($_GET as $key => $val) {
                    if ('orderby' === $key || 'submit' === $key) {
                        continue;
                    }
                    if (is_array($val)) {
                        foreach ($val as $innerVal) {
                            echo '<input type="hidden" name="' . esc_attr($key) . '[]" value="' . esc_attr($innerVal) . '" />';
                        }
                    } else {
                        echo '<input type="hidden" name="' . esc_attr($key) . '" value="' . esc_attr($val) . '" />';
                    }
                }
                ?>
            </div>
            <div class="sort-button <?= $order_class ?>"></div>
        </div>
        <div class="entry">
            <div class="view-button grid active"><i class="fa fa-th"></i></div>
            <div class="view-button list"><i class="fa fa-list"></i></div>
        </div>
    </form>
</div>
<div class="clear"></div>

<script type="text/javascript">
    $(".sort-button").click(function () {
        var form = $("form.woocommerce-ordering");
        var order = $(form).find("input[name='order']");
        console.log(order);
        if(! $(this).hasClass("active")){

            if($(order).length){
                $(order).val("asc");
                $(form).submit();
            }else{
                $(form).append("<input type=\"hidden\" name=\"order\" value=\"asc\">");
                 $(form).submit();
            }

        }else{
            if($(order).length){
                $(order).val("desc");
                $(form).submit();
            }else{
                $(form).append("<input type=\"hidden\" name=\"order\" value=\"desc\">");
                 $(form).submit();
            }
        }
    })
</script>