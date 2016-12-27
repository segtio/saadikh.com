<?php get_header(); ?>
<div class="information-blocks">
    <div class="row">
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-md-9 information-entry">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <div class="blog-landing-box type-1 detail-post">
                    <div class="blog-entry">
                        <!-- post thumbnail -->
                        <?php if (has_post_thumbnail()) : // Check if Thumbnail exists ?>
                            <a href="<?php the_permalink(); ?>" class="image hover-class-1"
                               title="<?php the_title(); ?>">
                                <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                                <span class="hover-label"><i class="fa fa-plus-circle"></i></span>
                            </a>
                        <?php endif; ?>
                        <!-- /post thumbnail -->
                        <div id="post-<?php the_ID(); ?>" class="content">
                            <!-- post title -->
                            <h1 class="title">
                                <a href="<?php the_permalink(); ?>"
                                   title="<?php the_title(); ?>"><?php the_title(); ?></a>
                            </h1>
                            <!-- /post title -->
                            <div class="subtitle">
                                <?php the_time('F j, Y'); ?><?php the_time('g:i a'); ?>
                                <?php the_author(); ?>
                                / Category:
                                <?php _e('Categorised in: ', 'html5blank');
                                the_category(', '); // Separated by commas ?>
                            </div>
                            <div class="article-container style-1">
                                <?php the_content(); // Dynamic Content ?>
                            </div>
                            <div class="detail-post-tags">
                                <?php the_tags(__('Tags: ', 'html5blank'), ', ', '<br>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="blog-entry">
                        <?php if (comments_open(get_the_ID())) comments_popup_link(__('Leave your thoughts', 'html5blank'), __('1 Comment', 'html5blank'), __('% Comments', 'html5blank')); ?>
                    </div>
                    <div class="blog-entry">
                        <?php comments_template(); ?>
                    </div>
                </div>
                <!-- article -->

                <!-- /article -->

            <?php endwhile; ?>

            <?php else: ?>

                <!-- article -->
                <div class="col-md-9 information-entry">
                    <div class="blog-landing-box type-1 detail-post">
                        <div class="blog-entry">
                            <div class="content">
                                <h1 class="title"><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /article -->

            <?php endif; ?>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
