<?php if ( !empty( $related_posts ) ) { ?>
	<div class="related-posts">
		<div class="shape-top-left"></div>
		<div class="shape-top-right"></div>
		<h4 class="widget-title"><?php _e('Related posts', 'techieblog'); ?></h4>

		<ul class="related-posts-list">
			<?php
			foreach ($related_posts as $post) {
				setup_postdata($post);
				?>
				<li>
					<a class="title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php if (has_post_thumbnail()) { ?>
							<div class="thumb">
								<?php echo get_the_post_thumbnail(null, 'medium', array('alt' => the_title_attribute(array('echo' => false)))); ?>
							</div>
						<?php } ?>
						<h5><?php the_title(); ?></h5>
					</a>
				</li>
			<?php } ?>
		</ul>
		<div class="clearfix"></div>
		<div class="shape-bottom-left"></div>
		<div class="shape-bottom-right"></div>
	</div>
	<?php
}
