<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package techieblog
 */

?>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

</div><!-- .container -->

<?php get_sidebar('footer'); ?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="shape-top-left"></div>
	<div class="shape-top-right"></div>

	<div class="container">
		<div class="row">
			<a href="#top" class="nav-btn"><i class="fa fa-chevron-up"></i><br/>top</a>
			
			<div class="col-xs-6">
				<?php esc_attr_e('&copy;', 'techieblog'); ?> <?php echo esc_attr( date_i18n( __( 'Y', 'techieblog' ) ) ); ?> <?php bloginfo('name'); ?>
			</div>
			
			<div class="col-xs-6 text-right">
				<?php // printf( esc_html__( 'Theme: %1$s by %2$s', 'techieblog' ), 'Techieblog', '<a href="https://wpcrumbs.com/">WPCrumbs</a>' ); ?>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-38467412-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-38467412-5');
</script>

</body>
</html>
