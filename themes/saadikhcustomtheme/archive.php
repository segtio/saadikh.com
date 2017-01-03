<?php get_header(); ?>
	<div class="row">
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>
		<div class="col-md-9">
			<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
			<div class="clear"></div>
		</div>
	</div>

<?php get_footer(); ?>