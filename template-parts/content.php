<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package techieblog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="shape-top-left"></div>
	<div class="shape-top-right"></div>

	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	} ?>

	<header class="entry-header">
		<?php
			if ( !is_single() ) {
				the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php techieblog_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'techieblog' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'techieblog' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<div class="shape-bottom-left"></div>
	<div class="shape-bottom-right"></div>
</article><!-- #post-## -->
