<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'techieblog'); ?></a>

	<!-- header 
	<header id="masthead" class="site-header" role="banner">
		<a id="nav-toggle" class="nav-slide-button" href="#"><span></span></a>
		<nav class="pull">
			<?php ///wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'top-nav')); ?>
		</nav>
	</header>
	end header -->

	<div id="content" class="site-content">

		<!-- Hero -->
		<section id="hero">
			<div class="container-fluid">
				<div class="vert-center">
					<?php /** 
					<div class="site-logo">
						<img src="<?php echo get_customify_option('custom_logo') ?>" alt="Site Logo" width="160" height="160" />
					</div>
					<?php 
*/
					if (is_front_page() && is_home()) : ?>
						<h1 class="site-title"><?php bloginfo('name'); ?></h1>
					<?php else : ?>
						<p class="site-title">
							<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
					<?php endif; ?>

					<?php
					$description = get_bloginfo('description', 'display');
					if ($description || is_customize_preview()) : ?>
						<h2 class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></h2>
						<?php
					endif; ?>

					<ul class="social-buttons">
						<?php if (get_theme_mod('techieblog_social_media_twitter')) { ?>
							<li>
								<a href="<?php echo esc_url(get_theme_mod('techieblog_social_media_twitter')); ?>" aria-label="Twitter">
									<i class="fa fa-twitter" aria-hidden="true" ></i>
								</a>
							</li>
						<?php } ?>
						<?php if (get_theme_mod('techieblog_social_media_facebook')) { ?>
							<li>
								<a href="<?php echo esc_url(get_theme_mod('techieblog_social_media_facebook')); ?>" aria-label="Facebook">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</li>
						<?php } ?>
						<?php if (get_theme_mod('techieblog_social_media_instagram')) { ?>
							<li>
								<a href="<?php echo esc_url(get_theme_mod('techieblog_social_media_instagram')); ?>" aria-label="WordPress">
									<i class="fa fa-wordpress" aria-hidden="true"></i>
								</a>
							</li>
						<?php } ?>
						<?php if (get_theme_mod('techieblog_social_media_snapchat')) { ?>
							<li>
								<a href="<?php echo esc_url(get_theme_mod('techieblog_social_media_snapchat')); ?>" aria-label="GitHub">
									<i class="fa fa-github" aria-hidden="true"></i>
								</a>
							</li>
						<?php } ?>
						<?php if (get_theme_mod('techieblog_social_media_youtube')) { ?>
							<li>
								<a href="<?php echo esc_url(get_theme_mod('techieblog_social_media_youtube')); ?>" aria-label="Stack Overflow">
									<i class="fa fa-stack-overflow" aria-hidden="true"></i>
								</a>
							</li>
						<?php } ?>
						<?php if (get_theme_mod('techieblog_social_media_googleplus')) { ?>
							<li>
								<a href="<?php echo esc_url(get_theme_mod('techieblog_social_media_googleplus')); ?>" aria-label="Google Plus">
									<i class="fa fa-google-plus" aria-hidden="true"></i>
								</a>
							</li>
						<?php } ?>
						<?php if (get_theme_mod('techieblog_social_media_email')) { ?>
							<li>
								<a href="<?php echo esc_attr( 'mailto:' . antispambot(get_theme_mod( 'techieblog_social_media_email' ) ) ); ?>" aria-label="Mail me">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</section>
		<!-- end Hero-->

		<!-- Featured Articles / Page Title section -->
		<section class="section-bg-dark" id="featured-articles">
			<div class="shape-top-left"></div>
			<div class="shape-top-right"></div>

			<div class="container">
				<div class="row text-center">
					
					<?php if (is_front_page()) : ?>

						<div class="list list-hover">
						</div>

					<?php elseif (is_404()) : ?>
									
						<h1 class="entry-title"><?php esc_html_e('404 - Page not found', 'techieblog'); ?></h1>

					<?php elseif (is_search()) : ?>

						<h1 class="entry-title"><?php printf(esc_html__('Search Results for: %s', 'techieblog'), get_search_query()); ?></h1>

					<?php elseif (is_archive()) : ?>
						
						<?php
							the_archive_title('<h1 class="entry-title">', '</h1>');
							the_archive_description('<div class="taxonomy-description">', '</div>');
						?>

					<?php else : ?>

						<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

					<?php endif; ?>
			
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="shape-bottom-left"></div>
			<div class="shape-bottom-right"></div>
		</section>
		<!-- end Featured Articles / Page Title section -->

		<div class="container">
			<div id="primary" class="content-area content-no-sidebar">
				<main id="main" class="site-main" role="main">
