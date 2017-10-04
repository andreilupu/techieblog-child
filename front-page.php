<?php
/**
 * The homepage template file.
 *
 * @package techieblog
 */

get_header(); ?>

	<!-- Blog section -->
	<section class="text-center section-padding" id="blog">

		<div id="blog-isotope-masonry">
			<?php
			if (have_posts()) :

				if (is_home() && !is_front_page()) : ?>
					<header>
						<h1 class="page-title"><?php single_post_title(); ?></h1>
					</header>

					<?php
				endif;

				/* Start the Loop */
				while (have_posts()) : the_post();

					get_template_part('template-parts/content', 'post');

				endwhile;

				the_posts_navigation();

			else :

				get_template_part('template-parts/content', 'none');

			endif; ?>
		</div>

	</section>
	<!-- end Blog section -->


<?php
get_footer();
