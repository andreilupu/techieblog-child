<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package techieblog
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<aside id="tertiary" class="widget-area section-padding" role="complementary">
	<div class="container">
		<div class="shape-top-left"></div>
		<div class="shape-top-right"></div>
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div>
</aside><!-- #secondary -->
