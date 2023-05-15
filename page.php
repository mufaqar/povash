<?php
/**
 * Default Template Main File.
 *
 * @package POVASH
 * @author  ThemeKalia
 * @version 1.0
 */

get_header();
$data  = \POVASH\Includes\Classes\Common::instance()->data( 'single' )->get();
$layout = $data->get( 'layout' );
$sidebar = $data->get( 'sidebar' );
if (is_active_sidebar( $sidebar )) {$layout = 'right';} else{$layout = 'full';}
$class = ( !$layout || $layout == 'full' ) ? 'col-xs-12 col-sm-12 col-md-12' : 'col-xs-12 col-sm-12 col-md-12 col-lg-8';
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
                    <ul class="bread-crumb pull-right">
                        <?php echo povash_the_breadcrumb(); ?>
                    </ul>
                </div>
            </div>
        </section>
<!-- Page Title -->
<?php endif;?>

<!--Start blog area-->
<section class="sidebar-page-container mrsingle">
    <div class="auto-container">
        <div class="row clearfix">
		
        	<?php
            if ( $data->get( 'layout' ) == 'left' ) {
                do_action( 'povash_sidebar', $data );
            }
            ?>
            <div class="content-side <?php echo esc_attr( $class ); ?>">
                <div class="thm-unit-test">
                    
					<?php while ( have_posts() ): the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                    
                    <div class="clearfix"></div>
                    <?php
                    $defaults = array(
                        'before' => '<div class="paginate-links">' . esc_html__( 'Pages:', 'povash' ),
                        'after'  => '</div>',
    
                    );
                    wp_link_pages( $defaults );
                    ?>
                    <?php comments_template() ?>
                </div>
            </div>
            <?php
            if ( $layout == 'right' ) {
                $data->set('sidebar', 'default-sidebar');
                do_action( 'povash_sidebar', $data );
            }
            ?>
        
        </div>
	</div>
</section><!-- blog section with pagination -->
<?php get_footer(); ?>
