<?php
/**
 * CT Custom Theme Customizer
 *
 * @package CT_Custom
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ct_custom_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'ct_custom_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'ct_custom_customize_partial_blogdescription',
		) );
	}

	// Theme Settings section.
	$wp_customize->add_section( 'ct_custom_theme_settings', array(
		'title'    => __( 'Theme Settings', 'ct-custom' ),
		'priority' => 30,
	) );

	// Logo image.
	$wp_customize->add_setting( 'ct_custom_logo', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'ct_custom_logo',
		array(
			'label'   => __( 'Logo', 'ct-custom' ),
			'section' => 'ct_custom_theme_settings',
		)
	) );

	// Phone.
	$wp_customize->add_setting( 'ct_custom_phone', array(
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'ct_custom_phone', array(
		'label'   => __( 'Phone Number', 'ct-custom' ),
		'section' => 'ct_custom_theme_settings',
		'type'    => 'text',
	) );

	// Address.
	$wp_customize->add_setting( 'ct_custom_address', array(
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'ct_custom_address', array(
		'label'   => __( 'Address', 'ct-custom' ),
		'section' => 'ct_custom_theme_settings',
		'type'    => 'textarea',
	) );

	// Fax.
	$wp_customize->add_setting( 'ct_custom_fax', array(
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'ct_custom_fax', array(
		'label'   => __( 'Fax Number', 'ct-custom' ),
		'section' => 'ct_custom_theme_settings',
		'type'    => 'text',
	) );

	// Social links.
	$ct_custom_socials = array( 'facebook', 'twitter', 'linkedin', 'pinterest' );
	foreach ( $ct_custom_socials as $ct_custom_social ) {
		$wp_customize->add_setting( 'ct_custom_social_' . $ct_custom_social, array(
			'sanitize_callback' => 'esc_url_raw',
		) );
		$wp_customize->add_control( 'ct_custom_social_' . $ct_custom_social, array(
			'label'   => ucfirst( $ct_custom_social ) . ' URL',
			'section' => 'ct_custom_theme_settings',
			'type'    => 'url',
		) );
	}
}
add_action( 'customize_register', 'ct_custom_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ct_custom_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ct_custom_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ct_custom_customize_preview_js() {
	wp_enqueue_script( 'ct-custom-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ct_custom_customize_preview_js' );
