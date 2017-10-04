<?php
/**
 * techieblog Theme Customizer.
 *
 * @package techieblog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function techieblog_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	//GENERAL THEME STUFF PANEL

	$wp_customize->add_panel(
		'techieblog_settings_panel',
		array(
			'title' => 'techieblog SETTINGS',
			'description' => 'This is a description of this panel',
			'priority' => 1,
		)
	);

	// Homepage Featured Section

	$wp_customize->add_section(
		'techieblog_section_one',
		array(
			'title' => __('Homepage Featured Section', 'techieblog'),
			'priority' => 10,
			'panel' => 'techieblog_settings_panel',
		));

	$wp_customize->add_setting(
		'techieblog_section_one_img_one',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'transport' => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'techieblog_section_img_one_control',
			array(
				'label' => __('Image 1', 'techieblog'),
				'section' => 'techieblog_section_one',
				'settings' => 'techieblog_section_one_img_one',
				'type' => 'image',
			)
		)
	);

	$wp_customize->add_setting(
		'techieblog_section_one_title_one',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport' => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'techieblog_section_one_title_one_control',
			array(
				'label' => __('Title 1', 'techieblog'),
				'section' => 'techieblog_section_one',
				'settings' => 'techieblog_section_one_title_one',
				'type' => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'techieblog_section_one_link_one',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'transport' => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'techieblog_section_one_link_one_control',
			array(
				'label' => __('Link 1', 'techieblog'),
				'section' => 'techieblog_section_one',
				'settings' => 'techieblog_section_one_link_one',
				'type' => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'techieblog_section_one_img_two',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'transport' => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'techieblog_section_one_img_two_control',
			array(
				'label' => __('Image 2', 'techieblog'),
				'section' => 'techieblog_section_one',
				'settings' => 'techieblog_section_one_img_two',
				'type' => 'image',
			)
		)
	);

	$wp_customize->add_setting(
		'techieblog_section_one_title_two',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport' => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'techieblog_section_one_title_two_control',
			array(
				'label' => __('Title 2', 'techieblog'),
				'section' => 'techieblog_section_one',
				'settings' => 'techieblog_section_one_title_two',
				'type' => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'techieblog_section_one_link_two',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'transport' => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'techieblog_section_one_link_two_control',
			array(
				'label' => __('Link 2', 'techieblog'),
				'section' => 'techieblog_section_one',
				'settings' => 'techieblog_section_one_link_two',
				'type' => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'techieblog_section_one_img_three',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'transport' => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'techieblog_section_one_img_three_control',
			array(
				'label' => __('Image 3', 'techieblog'),
				'section' => 'techieblog_section_one',
				'settings' => 'techieblog_section_one_img_three',
				'type' => 'image',
			)
		)
	);

	$wp_customize->add_setting(
		'techieblog_section_one_title_three',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport' => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'techieblog_section_one_title_three_control',
			array(
				'label' => __('Title 3', 'techieblog'),
				'section' => 'techieblog_section_one',
				'settings' => 'techieblog_section_one_title_three',
				'type' => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'techieblog_section_one_link_three',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'transport' => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'techieblog_section_one_link_three_control',
			array(
				'label' => __('Link 3', 'techieblog'),
				'section' => 'techieblog_section_one',
				'settings' => 'techieblog_section_one_link_three',
				'type' => 'text',
			)
		)
	);

	// Social Media Icons

	$wp_customize->add_section(
		'techieblog_social_media_section',
		array(
			'title'       => __( 'Social Media Icons', 'techieblog' ),
			'priority'    => 100,
			'panel' => 'techieblog_settings_panel',
		)
	);

	$wp_customize->add_setting(
		'techieblog_social_media_email',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'   => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'techieblog_sm_email',
			array(
				'label'       => __( 'Email', 'techieblog' ),
				'section'     => 'techieblog_social_media_section',
				'settings'    => 'techieblog_social_media_email',
				'type'        => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'techieblog_social_media_twitter',
		array(
			'default'     => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'   => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'techieblog_sm_twitter',
			array(
				'label'       => __( 'Twitter URL', 'techieblog' ),
				'section'     => 'techieblog_social_media_section',
				'settings'    => 'techieblog_social_media_twitter',
				'type'        => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'techieblog_social_media_facebook',
		array(
			'default'     => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'   => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'techieblog_sm_facebook',
			array(
				'label'       => __( 'Facebook URL', 'techieblog' ),
				'section'     => 'techieblog_social_media_section',
				'settings'    => 'techieblog_social_media_facebook',
				'type'        => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'techieblog_social_media_instagram',
		array(
			'default'     => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'   => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'techieblog_sm_instagram',
			array(
				'label'       => __( 'Instagram URL', 'techieblog' ),
				'section'     => 'techieblog_social_media_section',
				'settings'    => 'techieblog_social_media_instagram',
				'type'        => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'techieblog_social_media_snapchat',
		array(
			'default'     => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'   => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'techieblog_sm_snapchat', array(
				'label'       => __( 'Snapchat URL', 'techieblog' ),
				'section'     => 'techieblog_social_media_section',
				'settings'    => 'techieblog_social_media_snapchat',
				'type'        => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'techieblog_social_media_youtube',
		array(
			'default'     => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'   => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'techieblog_sm_youtube',
			array(
				'label'       => __( 'YouTube URL', 'techieblog' ),
				'section'     => 'techieblog_social_media_section',
				'settings'    => 'techieblog_social_media_youtube',
				'type'        => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'techieblog_social_media_googleplus',
		array(
			'default'     => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'   => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'techieblog_sm_googleplus',
			array(
				'label'       => __( 'Google+ URL', 'techieblog' ),
				'section'     => 'techieblog_social_media_section',
				'settings'    => 'techieblog_social_media_googleplus',
				'type'        => 'text',
			)
		)
	);
}

add_action('customize_register', 'techieblog_customize_register');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function techieblog_customize_preview_js()
{
	wp_enqueue_script('techieblog_customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'techieblog_customize_preview_js');
