<?php

return array(
	'title'      => esc_html__( 'Single Post Settings', 'povash' ),
	'id'         => 'single_post_setting',
	'desc'       => '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'      => 'single_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Single Post Source Type', 'povash' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'povash' ),
				'e' => esc_html__( 'Elementor', 'povash' ),
			),
			'default' => 'd',
		),

		array(
			'id'       => 'single_default_st',
			'type'     => 'section',
			'title'    => esc_html__( 'Post Default', 'povash' ),
			'indent'   => true,
			'required' => [ 'single_source_type', '=', 'd' ],
		),
		array(
			'id'      => 'single_post_date',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Date', 'povash' ),
			'desc'    => esc_html__( 'Enable to show post publish date on posts detail page', 'povash' ),
			'default' => false,
		),
		array(
			'id'      => 'single_post_author',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Author', 'povash' ),
			'desc'    => esc_html__( 'Enable to show author on posts detail page', 'povash' ),
			'default' => false,
		),

		array(
			'id'      => 'single_post_comments',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Comments', 'povash' ),
			'desc'    => esc_html__( 'Enable to show number of comments on posts single page', 'povash' ),
			'default' => false,
		),
	

		array(
			'id'      => 'single_post_author_box',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Author Box', 'povash' ),
			'desc'    => esc_html__( 'Enable to show author box on post detail page.', 'povash' ),
			'default' => false,
		),
		array(
			'id'      => 'single_post_share',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Social Share', 'rinbuild' ),
			'desc'    => esc_html__( 'Enable to show social Share options', 'rinbuild' ),
			'default' => false,
		),
		array(
			'id'       => 'single_social_share',
			'type'     => 'sortable',
			'title'    => esc_html__( 'Post Sharing Icons', 'rinbuild' ),
			'subtitle' => esc_html__( 'Select icons to activate social sharing icons in post detail page', 'rinbuild' ),
			'required' => array( 'blog_post_share', '=', true ),
			'mode'     => 'checkbox',
			'required' => array( 'single_post_share', '=', true ),
			'options'  => array(
				'facebook'    => esc_html__( 'Facebook', 'rinbuild' ),
				'twitter'     => esc_html__( 'Twitter', 'rinbuild' ),
				'gplus'       => esc_html__( 'Google Plus', 'rinbuild' ),
				'digg'        => esc_html__( 'Digg Digg', 'rinbuild' ),
				'reddit'      => esc_html__( 'Reddit', 'rinbuild' ),
				'linkedin'    => esc_html__( 'Linkedin', 'rinbuild' ),
				'pinterest'   => esc_html__( 'Pinterest', 'rinbuild' ),
				'stumbleupon' => esc_html__( 'Sumbleupon', 'rinbuild' ),
				'tumblr'      => esc_html__( 'Tumblr', 'rinbuild' ),
				'email'       => esc_html__( 'Email', 'rinbuild' ),
			),
		),
	
	
		array(
			'id'       => 'single_section_default_ed',
			'type'     => 'section',
			'indent'   => false,
			'required' => [ 'single_source_type', '=', 'd' ],
		),
	),
);





