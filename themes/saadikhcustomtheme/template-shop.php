<?php /* Template Name: Shop Page Template */
get_header(); ?>
<div class="row">
    <div class="col-md-3">
        <?php get_sidebar(); ?>
    </div>
    <div class="col-md-9">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>

        <?php endwhile; ?>
        <?php else: ?>
            <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
