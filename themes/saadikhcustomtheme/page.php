<?php get_header(); ?>
<div class="information-blocks">
	<div class="row">
		<div class="col-md-12 information-entry">
			<div class="blog-landing-box type-4 columns-3">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" class="blog-entry">
					<a class="image hover-class-1" href="<?php the_pemalink() ?>"><?php the_post_thumbnail() ?><span class="hover-label"> ... </span></a>
					<div class="date"><?php the_time('j');?> <span><?php the_time('f');?></span></div>
					<div class="content">
						<a class="title" href="#"><?php the_title(); ?></a>
						<div class="subtitle"><a href="#"><b><?php the_author() ?></b></a>  /  Category:   <?php _e('Categorised in: ', 'html5blank');
							the_category(', '); // Separated by commas ?></div>
						<div class="description"><?php the_excerpt()  ?></div>
						<a class="readmore" href="<?php the_pemalink() ?>">Détails</a>
					</div>
				</div>
				<?php endwhile; ?>
				<?php else: ?>
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				<?php endif; ?>
			</div>
			<div class="page-selector"></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
