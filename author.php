<?php
/**
 * Blog Main File.
 *
 * @package POVASH
 * @author  Theme Author
 * @version 1.0
 */

get_header();
global $wp_query;
$data  = \POVASH\Includes\Classes\Common::instance()->data( 'author' )->get();
$layout = $data->get( 'layout' );
$sidebar = $data->get( 'sidebar' );
$layout = ( $layout ) ? $layout : 'right';
$sidebar = ( $sidebar ) ? $sidebar : 'default-sidebar';
if (is_active_sidebar( $sidebar )) {$layout = 'right';} else{$layout = 'full';}
$class = ( !$layout || $layout == 'full' ) ? 'col-xs-12 col-sm-12 col-md-12' : 'col-xs-12 col-sm-12 col-md-12 col-lg-8';
if ( class_exists( '\Elementor\Plugin' ) AND $data->get( 'tpl-type' ) == 'e' AND $data->get( 'tpl-elementor' ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'tpl-elementor' ) );
} else {
?>

<?php if ( class_exists( '\Elementor\Plugin' )):?>
<?php do_action( 'povash_banner', $data );?>
<?php else:?>
<!-- Page Title -->
<section class="page-title" style="background-image: url(<?php echo esc_url( $data->get( 'banner' ) ); ?>);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <div class="title-box centred">
                <h1><?php echo wp_kses( $data->get( 'title' ), true ); ?></h1>
            </div>

        </div>
    </div>
</section>
<!-- Page Title -->
<?php endif;?>

<!--Start blog area-->
<section class="sidebar-page-container mrindex">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Sidebar Start-->
            <?php
				if ( $data->get( 'layout' ) == 'left' ) {
					do_action( 'povash_sidebar', $data );
				}
				?>

            <div class="content-side <?php echo esc_attr( $class ); ?>">

                <div class="thm-unit-test">

                    <?php
                            while ( have_posts() ) :
                                the_post();
                                povash_template_load( 'templates/blog/blog.php', compact( 'data' ) );
                            endwhile;
                            wp_reset_postdata();
                        ?>

                </div>
                <!--Pagination-->
                <div class="pagination-wrapper text-center">
                    <?php povash_the_pagination( $wp_query->max_num_pages );?>
                </div>
            </div>

            <!--Sidebar Start-->
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