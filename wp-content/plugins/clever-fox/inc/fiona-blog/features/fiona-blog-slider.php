<?php
function fiona_blog_slider_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Slider Section Panel
	=========================================*/
	
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'clever-fox' ),
			'panel' => 'fiona_blog_frontpage_sections',
			'priority' => 1,
		)
	);
	
	// slider Contents
	$wp_customize->add_setting(
		'slider_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fiona_blog_sanitize_text',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'slider_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Contents','clever-fox'),
			'section' => 'slider_setting',
		)
	);
	
	// Skider Category
	$wp_customize->add_setting(
    'slider_category_id',
		array(
		'capability' => 'edit_theme_options',
		'priority' => 5,
		'sanitize_callback' => 'absint',
		)
	);	
	$wp_customize->add_control( new Fiona_Blog_Category_Dropdown_Control( $wp_customize, 
	'slider_category_id', 
		array(
		'label'   => __('Select Blog category for Slider Section','clever-fox'),
		'section' => 'slider_setting',
		) 
	) );
	
	// slider opacity
	if ( class_exists( 'Cleverfox_Customizer_Range_Slider_Control' ) ) {
		$wp_customize->add_setting(
			'slider_opacity',
			array(
				'default'	      => '0.5',
				'capability'     	=> 'edit_theme_options',
				//'sanitize_callback' => 'fiona_blog_sanitize_range_value',
				'priority' => 7,
			)
		);
		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'slider_opacity', 
			array(
				'label'      => __( 'opacity', 'clever-fox' ),
				'section'  => 'slider_setting',
					'input_attrs' => array(
						'min'    => 0,
						'max'    => 0.9,
						'step'   => 0.1,
						//'suffix' => 'px', //optional suffix
					),
			) ) 
		);
	}
}

add_action( 'customize_register', 'fiona_blog_slider_setting' );