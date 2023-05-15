<?php
/**
 * 404 page file
 *
 * @package    WordPress
 * @subpackage Povash
 * @author     Theme Author <admin@theme-kalia.com>
 * @version    1.0
 */

$text = sprintf(__('It seems we can\'t find what you\'re looking for. Perhaps searching can help or go back to <a href="%s">Homepage</a>', 'povash'), esc_html(home_url('/')));
$error_page_img    = $options->get( 'error_page_image' );
$error_page_img    = povash_set( $error_page_img, 'url', POVASH_URI . 'assets/images/resource/404.png' );
$allowed_html = wp_kses_allowed_html( 'post' );
?>
<?php get_header();
$data = \POVASH\Includes\Classes\Common::instance()->data( '404' )->get();
do_action( 'povash_banner', $data );
$options = povash_WSH()->option();
if ( class_exists( '\Elementor\Plugin' ) AND $data->get( 'tpl-type' ) == 'e' AND $data->get( 'tpl-elementor' ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'tpl-elementor' ) );
} else {
	?>
	

        <!-- error-section -->
        <section class="error-section centred sec-pad">
            <div class="auto-container">
                <div class="inner-box">
                    <h1><?php esc_html_e( '404', 'povash' ); ?></h1>
                    <h2><?php esc_html_e( 'Oops! Page Not Found!', 'povash' ); ?></h2>
                    <p> <?php esc_html_e( 'Please go back to', 'povash' ); ?><a href="<?php echo( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back homepage', 'povash' ); ?></a></p>
                </div>
            </div>
        </section>
        <!-- error-section end -->    
     
<?php
}
get_footer(); ?>
