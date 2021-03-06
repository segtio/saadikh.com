<!-- footer -->
<div class="footer-wrapper style-3">
    <footer class="type-1">
        <div class="footer-bottom-navigation">
            <div class="cell-view">
                <!-- copyright -->
                <div class="copyright">
                    &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
                    . <?php _e('Powered by', 'html5blank'); ?>
                    <a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com"
                                                                                       title="HTML5 Blank">HTML5
                        Blank</a>.
                </div>
                <!-- /copyright -->
            </div>
            <div class="cell-view">
                <div class="payment-methods">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/payment-method-1.png" alt=""/></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/payment-method-2.png" alt=""/></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/payment-method-3.png" alt=""/></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/payment-method-4.png" alt=""/></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/payment-method-5.png" alt=""/></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/payment-method-6.png" alt=""/></a>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- /footer -->
</div>
</div>
<div class="clear"></div>
</div>
<!-- /#content-block -->



<div class="search-box popup">
    <?php get_template_part('searchform'); ?>
</div>

<div class="cart-box popup cart-right">
    <?php woocommerce_mini_cart(); ?>
</div>

<?php wp_footer(); ?>

<!-- analytics -->
<script>
    (function (f, i, r, e, s, h, l) {
        i['GoogleAnalyticsObject'] = s;
        f[s] = f[s] || function () {
                (f[s].q = f[s].q || []).push(arguments)
            }, f[s].l = 1 * new Date();
        h = i.createElement(r),
            l = i.getElementsByTagName(r)[0];
        h.async = 1;
        h.src = e;
        l.parentNode.insertBefore(h, l)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
    ga('send', 'pageview');
</script>

</body>
</html>
