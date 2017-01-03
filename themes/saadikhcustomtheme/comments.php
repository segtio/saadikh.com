<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>
	<h3 class="additional-blog-title"><?php comments_number(); ?></h3>
		<?php wp_list_comments('type=comment&callback=custom_comments'); // Custom callback in functions.php ?>

<?php endif; ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
	<div class="row">
		<div class="col-sm-6">
			<label>Votre Nom <span>*</span></label>
			<input id="author" name="author" aria-required="true" class="simple-field" type="text" placeholder="Votre nom (requis)" value="">
			<label>Votre Email <span>*</span></label>
			<input id="email" name="email" aria-required="true" class="simple-field" type="email" placeholder="Votre email (requis)" value="">
			<div class="clear"></div>
		</div>
		<div class="col-sm-6">
			<label>Votre Message <span>*</span></label>
			<textarea name="comment" class="simple-field" placeholder="Votre message (requis)"></textarea>
			<div class="button style-10">Envoyer <input type="submit" value=""></div>
			<input type="hidden" name="comment_post_ID" value="<?php echo $comment ->comment_post_ID?>" id="comment_post_ID">
			<input type="hidden" name="comment_parent" id="comment_parent" value="0">

		</div>
	</div>
</form>

</div>
