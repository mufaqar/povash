<?php
/**
 * Blog Post Main File.
 *
 * @package POVASH
 * @author  Theme Author
 * @version 1.0
 */

get_header();
$data    = \POVASH\Includes\Classes\Common::instance()->data( 'single' )->get();
$layout = $data->get( 'layout' );
$sidebar = $data->get( 'sidebar' );
if (is_active_sidebar( $sidebar )) {$layout = 'right';} else{$layout = 'full';}
$class = ( !$layout || $layout == 'full' ) ? 'col-xs-12 col-sm-12 col-md-12' : 'col-xs-12 col-sm-12 col-md-12 col-lg-8';
$options = povash_WSH()->option();

if ( class_exists( '\Elementor\Plugin' ) && $data->get( 'tpl-type' ) == 'e') {
	
	while(have_posts()) {
	   the_post();
	   the_content();
    }

} else {
	?>
 <!--Page Title-->
        <section class="page-title" style="background-image: url(<?php echo esc_url( $data->get( 'banner' ) ); ?>);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <div class="title-box centred">
                        <h1><?php echo wp_kses( $data->get( 'title' ), true ); ?></h1>
                    </div>
                    <ul class="bread-crumb pull-right">
                        <?php echo povash_the_breadcrumb(); ?>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


<section class="sidebar-page-container mrsingle">
	<div class="auto-container">
		<div class="row clearfix">
        	<?php
				if ( $data->get( 'layout' ) == 'left' ) {
					do_action( 'povash_sidebar', $data );
				}
			?>
            <div class="content-side <?php echo esc_attr( $class ); ?>">
            	
				<?php while ( have_posts() ) : the_post(); ?>
				
                    <div <?php post_class(); ?>>
						<?php povash_template_load( 'templates/blog-single/single-content.php', compact( 'options', 'data' ) ); ?>
					</div>
				<?php endwhile; ?>
              
            </div>
        	<?php
				if ( $data->get( 'layout' ) == 'right' ) {
					do_action( 'povash_sidebar', $data );
				}
			?>
        </div>
    </div>
</section> 
<!--End blog area--> 

<?php
}
get_footer();
