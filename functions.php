<?php

require_once get_template_directory() . '/includes/loader.php';

add_action( 'after_setup_theme', 'povash_setup_theme' );
add_action( 'after_setup_theme', 'povash_load_default_hooks' );


function povash_setup_theme() {

	load_theme_textdomain( 'povash', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background' );
	add_theme_support('woocommerce');
	add_theme_support('wc-product-gallery-lightbox');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );


	// Set the default content width.
	$GLOBALS['content_width'] = 525;
	
	/*---------- Register image sizes ----------*/
	
	//Register image sizes
	add_image_size( 'povash_370x260', 370, 260, true ); //'povash_370x260 Our Projects'
	add_image_size( 'povash_270x300', 270, 300, true ); //'povash_270x300 Our Team'
	add_image_size( 'povash_70x70', 70, 70, true ); //'povash_70x70 Our Testimonials V2'
	add_image_size( 'povash_370x240', 370, 240, true ); //'povash_370x240 Latest News V2 '
	add_image_size( 'povash_105x100', 105, 100, true ); //'povash_105x100 Feature Services '
	add_image_size( 'povash_270x120', 270, 120, true ); //'povash_270x120 Our Industries '
	add_image_size( 'povash_370x383', 370, 383, true ); //'povash_370x383 Our Testimonials V3'
	add_image_size( 'povash_330x300', 330, 300, true ); //'povash_330x300 Our Services V2'
	add_image_size( 'povash_975x530', 975, 530, true ); //'povash_975x530 Our Projects V4'
	add_image_size( 'povash_397x575', 397, 575, true ); //'povash_397x575 Our Testimonials V4'
	add_image_size( 'povash_370x270', 370, 270, true ); //'povash_370x270 Our Services V3'
	add_image_size( 'povash_270x390', 270, 390, true ); //'povash_270x390 Our Projects V5'
	add_image_size( 'povash_270x180', 370, 270, true ); //'povash_270x180 Our projects V5'
	add_image_size( 'povash_340x214', 340, 214, true ); //'povash_340x214 Our Testimonials V6'
	add_image_size( 'povash_340x240', 340, 240, true ); //'povash_340x240 Our Team V3'
	add_image_size( 'povash_270x430', 270, 430, true ); //'povash_270x430 Portfolio Masonry'
	add_image_size( 'povash_270x230', 270, 230, true ); //'povash_270x230 Portfolio Masonry'
	add_image_size( 'povash_400x327', 400, 327, true ); //'povash_400x327 Blog List View'
	add_image_size( 'povash_1170x400', 1170, 400, true ); //'povash_1170x400 Our Blog'
	add_image_size( 'povash_85x75', 85, 75, true ); //'povash_85x75 Our Project Widget'
	
	/*---------- Register image sizes ends ----------*/
	
	
	
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'main_menu' => esc_html__( 'Main Menu', 'povash' ),
		'sidebar_menu' => esc_html__( 'Sidebar Menu', 'povash' ),
		'onepage_menu' => esc_html__( 'OnePage Menu', 'povash' ),
		
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'      => 250,
		'height'     => 250,
		'flex-width' => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style();
	add_action( 'admin_init', 'povash_admin_init', 2000000 );
}

/**
 * [povash_admin_init]
 *
 * @param  array $data [description]
 *
 * @return [type]       [description]
 */


function povash_admin_init() {
	remove_action( 'admin_notices', array( 'ReduxFramework', '_admin_notices' ), 99 );
}

/*---------- Sidebar settings ----------*/

/**
 * [povash_widgets_init]
 *
 * @param  array $data [description]
 *
 * @return [type]       [description]
 */
function povash_widgets_init() {

	global $wp_registered_sidebars;

	$theme_options = get_theme_mod( 'povash' . '_options-mods' );

	register_sidebar( array(
		'name'          => esc_html__( 'Default Sidebar', 'povash' ),
		'id'            => 'default-sidebar',
		'description'   => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'povash' ),
		'before_widget' => '<div id="%1$s" class="widget mrwidget sidebar-widget single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar(array(
		'name' => esc_html__('Footer Widget', 'povash'),
		'id' => 'footer-sidebar',
		'description' => esc_html__('Widgets in this area will be shown in Footer Area.', 'povash'),
		'before_widget'=>'<div class="col-lg-3 col-md-6 col-sm-12 footer-column"><div id="%1$s" class="footer-widget %2$s">',
		'after_widget'=>'</div></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
	if ( class_exists( '\Elementor\Plugin' )){

	register_sidebar(array(
		'name' => esc_html__('Services Widget', 'povash'),
		'id' => 'service-sidebar',
		'description' => esc_html__('Widgets in this area will be shown in Services Area.', 'povash'),
		'before_widget'=>'<div id="%1$s" class="service-widget %2$s">',
		'after_widget'=>'</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
	}
	register_sidebar(array(
	  'name' => esc_html__( 'Blog Listing', 'povash' ),
	  'id' => 'blog-sidebar',
'description'   => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'povash' ),
		'before_widget' => '<div id="%1$s" class="widget mrwidget sidebar-widget single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
	if ( ! is_object( povash_WSH() ) ) {
		return;
	}

	$sidebars = povash_set( $theme_options, 'custom_sidebar_name' );

	foreach ( array_filter( (array) $sidebars ) as $sidebar ) {

		if ( povash_set( $sidebar, 'topcopy' ) ) {
			continue;
		}

		$name = $sidebar;
		if ( ! $name ) {
			continue;
		}
		$slug = str_replace( ' ', '_', $name );

		register_sidebar( array(
			'name'          => $name,
			'id'            => sanitize_title( $slug ),
			'before_widget' => '<div id="%1$s" class="%2$s widget ">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}

	update_option( 'wp_registered_sidebars', $wp_registered_sidebars );
}

add_action( 'widgets_init', 'povash_widgets_init' );

/*---------- Sidebar settings ends ----------*/

/*---------- Gutenberg settings ----------*/

function povash_gutenberg_editor_palette_styles() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => esc_html__( 'strong yellow', 'povash' ),
            'slug' => 'strong-yellow',
            'color' => '#f7bd00',
        ),
        array(
            'name' => esc_html__( 'strong white', 'povash' ),
            'slug' => 'strong-white',
            'color' => '#fff',
        ),
		array(
            'name' => esc_html__( 'light black', 'povash' ),
            'slug' => 'light-black',
            'color' => '#242424',
        ),
        array(
            'name' => esc_html__( 'very light gray', 'povash' ),
            'slug' => 'very-light-gray',
            'color' => '#797979',
        ),
        array(
            'name' => esc_html__( 'very dark black', 'povash' ),
            'slug' => 'very-dark-black',
            'color' => '#000000',
        ),
    ) );
	
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name' => esc_html__( 'Small', 'povash' ),
			'size' => 10,
			'slug' => 'small'
		),
		array(
			'name' => esc_html__( 'Normal', 'povash' ),
			'size' => 15,
			'slug' => 'normal'
		),
		array(
			'name' => esc_html__( 'Large', 'povash' ),
			'size' => 24,
			'slug' => 'large'
		),
		array(
			'name' => esc_html__( 'Huge', 'povash' ),
			'size' => 36,
			'slug' => 'huge'
		)
	) );
	
}
add_action( 'after_setup_theme', 'povash_gutenberg_editor_palette_styles' );

/*---------- Gutenberg settings ends ----------*/

/*---------- Enqueue Styles and Scripts ----------*/

function povash_enqueue_scripts() {
	$options = povash_WSH()->option();
	$header_meta = get_post_meta( get_the_ID(), 'header_style_settings');
		$header_option = $options->get( 'header_style_settings' );
		
    //styles
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'color', get_template_directory_uri() . '/assets/css/color.css' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css' );
	wp_enqueue_style( 'font-awesome-all', get_template_directory_uri() . '/assets/css/font-awesome-all.css' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css' );
	wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css' );
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.css' );
	wp_enqueue_style( 'rtl', get_template_directory_uri() . '/assets/css/rtl.css' );
	wp_enqueue_style( 'appointment', get_template_directory_uri() . '/assets/css/appointment.css' );
	wp_enqueue_style( 'datetimepicker', get_template_directory_uri() . '/assets/css/datetimepicker.css' );
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css' );
wp_enqueue_style( 'povash-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css' );
	wp_enqueue_style( 'style-2', get_template_directory_uri() . '/assets/css/style-2.css' );
	wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/assets/css/icomoon.css' );
	
	wp_enqueue_style( 'povash-main', get_stylesheet_uri() );
	wp_enqueue_style( 'povash-main-style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'povash-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
	wp_enqueue_style( 'povash-fixing', get_template_directory_uri() . '/assets/css/fixing.css' );
	wp_enqueue_style( 'povash-gutenberg', get_template_directory_uri() . '/assets/css/gutenberg.css' );
	wp_enqueue_style( 'povash-sidebar', get_template_directory_uri() . '/assets/css/sidebar.css' );
	wp_enqueue_style( 'povash-tut', get_template_directory_uri() . '/assets/css/tut.css' );
	wp_enqueue_style( 'povash-error', get_template_directory_uri() . '/assets/css/error.css' );


    //scripts
	wp_enqueue_script( 'jquery-ui-core');
	wp_enqueue_script( 'appear', get_template_directory_uri().'/assets/js/appear.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'popper', get_template_directory_uri().'/assets/js/popper.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'circle-progress', get_template_directory_uri().'/assets/js/circle-progress.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri().'/assets/js/isotope.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'countTo', get_template_directory_uri().'/assets/js/jquery.countTo.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri().'/assets/js/jquery.fancybox.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'nice-select', get_template_directory_uri().'/assets/js/jquery.nice-select.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'owl', get_template_directory_uri().'/assets/js/owl.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'pagenav', get_template_directory_uri().'/assets/js/pagenav.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'scrollbar', get_template_directory_uri().'/assets/js/scrollbar.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'wow', get_template_directory_uri().'/assets/js/wow.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri().'/assets/js/jquery-ui.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'knob', get_template_directory_uri().'/assets/js/knob.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'nav-tool', get_template_directory_uri().'/assets/js/nav-tool.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'parallax-scroll', get_template_directory_uri().'/assets/js/parallax-scroll.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'range-slider', get_template_directory_uri().'/assets/js/range-slider.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'TweenMax-min', get_template_directory_uri().'/assets/js/TweenMax.min.js', array( 'jquery' ), '2.1.2', true );
	
	
	
	//Temp
	wp_enqueue_script( 'jquery-cookie', get_template_directory_uri().'/assets/js/jquery.cookie.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'themepanel', get_template_directory_uri().'/assets/js/themepanel.js', array( 'jquery' ), '2.1.2', true );
	
	
	wp_enqueue_script( 'povash-main-script', get_template_directory_uri().'/assets/js/script.js', array(), false, true );
	if( is_singular() ) wp_enqueue_script('comment-reply');
}
add_action( 'wp_enqueue_scripts', 'povash_enqueue_scripts' );

/*---------- Enqueue styles and scripts ends ----------*/

/*---------- Google fonts ----------*/

function povash_fonts_url() {
	
	$fonts_url = '';

		$font_families['Barlow']      = 'Barlow:300,400,500,600,700,800,900';

		$font_families = apply_filters( 'REXAR/includes/classes/header_enqueue/font_families', $font_families );

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$protocol  = is_ssl() ? 'https' : 'http';
		$fonts_url = add_query_arg( $query_args, $protocol . '://fonts.googleapis.com/css' );

		return esc_url_raw($fonts_url);

}

function povash_theme_styles() {
    wp_enqueue_style( 'povash-theme-fonts', povash_fonts_url(), array(), null );
}

add_action( 'wp_enqueue_scripts', 'povash_theme_styles' );
add_action( 'admin_enqueue_scripts', 'povash_theme_styles' );

/*---------- Google fonts ends ----------*/

/*---------- More functions ----------*/

// 1) povash_set function

/**
 * [povash_set description]
 *
 * @param  array $data [description]
 *
 * @return [type]       [description]
 */
if ( ! function_exists( 'povash_set' ) ) {
	function povash_set( $var, $key, $def = '' ) {
		//if( ! $var ) return false;

		if ( is_object( $var ) && isset( $var->$key ) ) {
			return $var->$key;
		} elseif ( is_array( $var ) && isset( $var[ $key ] ) ) {
			return $var[ $key ];
		} elseif ( $def ) {
			return $def;
		} else {
			return false;
		}
	}
}

// 2) povash_add_editor_styles function

function povash_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'povash_add_editor_styles' );

// 3) Add specific CSS class by filter body class.

$options = povash_WSH()->option(); 
if( povash_set($options, 'boxed_wrapper') ){

add_filter( 'body_class', function( $classes ) {
    $classes[] = 'boxed_wrapper';
    return $classes;
} );
}

/**
 * product per page
 */
add_filter( 'loop_shop_per_page', 'povash_loop_shop_per_page', 20 );

function povash_loop_shop_per_page( $cols ) {
		$options     = povash_WSH()->option();		
		$shop_product = esc_attr( $options->get( 'shop_product') );	
		
  // $cols contains the current number of products per page based on the value stored on Options –> Reading
  // Return the number of products you wanna show per page.
  $cols =  $shop_product;
  return $cols;
}