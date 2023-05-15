<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package POVASH
 * @since   1.0
 * @version 1.0
 */
$options = povash_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );
$icon_href = $options->get( 'image_favicon' ); 

//Logo Settings
$image_logo = $options->get( 'image_normal_logo' );
$logo_dimension = $options->get( 'normal_logo_dimension' );

$image_logo2 = $options->get( 'image_normal_logo2' );
$image_logo2 = povash_set( $image_logo2, 'url', POVASH_URI . 'assets/images/logo2.png' );

$logo_type = '';
$logo_text = '';
$logo_typography = '';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ): ?>
    <?php if( $icon_href ):?>
    <link rel="shortcut icon" href="<?php echo esc_url($icon_href['url']); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url($icon_href['url']); ?>" type="image/x-icon">
    <?php endif; ?>
    <?php endif; ?>
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

    <?php
if ( ! function_exists( 'wp_body_open' ) ) {
		function wp_body_open() {
			do_action( 'wp_body_open' );
		}
}?>


    <?php if( $options->get( 'theme_preloader' ) ):?>
    <div class="preloader"></div>
    <?php endif; ?>

    <main class="page-wrapper <?php if($options->get( 'theme_rtl' ) ): echo esc_attr_e( 'rtl', 'povash' ); endif;?>">


        <?php do_action( 'povash_main_header' ); ?>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <figure class="nav-logo"> <img src="<?php echo esc_url($image_logo2); ?>"
                        alt="<?php esc_attr_e('Logo', 'povash'); ?>"></figure>

                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>

                <?php
							$icons = $options->get( 'header_social_v1' );
							if ( ! empty( $icons ) ) :
							?>
                <div class="social-links">
                    <ul class="clearfix">
                        <?php
								foreach ( $icons as $h_icon ) :
								$header_social_icons = json_decode( urldecode( povash_set( $h_icon, 'data' ) ) );
								if ( povash_set( $header_social_icons, 'enable' ) == '' ) {
									continue;
								}
								$icon_class = explode( '-', povash_set( $header_social_icons, 'icon' ) );
								?>
                        <li><a href="<?php echo esc_url(povash_set( $header_social_icons, 'url' )); ?>"><i
                                    class="fab <?php echo esc_attr( povash_set( $header_social_icons, 'icon' ) ); ?>"></i></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>


            </nav>
        </div><!-- End Mobile Menu -->