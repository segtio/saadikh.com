<?php get_header(); ?>
	<div class="row">
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>
		<div class="col-md-9">
			<h1><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
			<div class="clear"></div>
		</div>
	</div>

<?php get_footer(); ?>