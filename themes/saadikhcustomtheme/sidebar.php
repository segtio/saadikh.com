<!-- sidebar -->
<div class="sidebar-navigation donation">
    <div class="donation-wrapper">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <h5>Please Enter Amount to Donate</h5>
            <hr>
            <input type="hidden" name="cmd" value="_donations">
            <input type="hidden" name="item_name" value="Donation">
            <input type="hidden" name="business" value="info@designbootstrap.com">
            <!-- CHANGE 'info@designbootstrap.com' TO YOUR EMAIL -->
            <input type="hidden" name="currency_code" value="USD">
            <!-- CHANGE 'USD' TO YOUR CURRENCY CODE IF YOU WANT -->
            <input type="text" class="form-control" placeholder="Enter Amt. in USD" name="amount" required="">
            <hr>
            <input type="submit" class="btn btn-info" value="Faite Votre Don">
        </form>
    </div>
</div>
<div class="clear"></div>
<div class="sidebar-navigation videotheque">
    <div class="title">Videotheque<i class="fa fa-angle-down"></i></div>
</div>
<div class="information-blocks hidden-sm hidden-xs">
    <div class="sidebar-logos-row">
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
        <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>
<!--<aside class="sidebar" role="complementary">

	<div class="sidebar-widget">
		<?php //if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php //if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside> -->
<!-- /sidebar -->
