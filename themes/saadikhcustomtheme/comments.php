<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>
	<h3 class="additional-blog-title"><?php comments_number(); ?></h3>
		<?php wp_list_comments(array('style' => 'div', 'class' => 'comment'),'type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>

<?php endif; ?>

<?php comment_form(); ?>

</div>
