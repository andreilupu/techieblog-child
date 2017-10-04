<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package techieblog
 */

get_header(); ?>


	<section class="section-padding">

		<?php
		while (have_posts()) : the_post();

			get_template_part('template-parts/content', 'single');

			the_post_navigation();

			if (!is_page()): ?>
				<?php techieblog_related_posts(); ?>
			<?php endif;

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</section>

<?php
get_footer();
