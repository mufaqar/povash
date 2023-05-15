<?php
/**
 * Footer Main File.
 *
 * @package POVASH
 * @author  Theme Author
 * @version 1.0
 */
global $wp_query;
$options = povash_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );
$icon_href = $options->get( 'image_favicon' ); 
$page_id = ( $wp_query->is_posts_page ) ? $wp_query->queried_object->ID : get_the_ID();
?>
<div class="clearfix"></div>
<?php povash_template_load( 'templates/footer/footer.php', compact( 'page_id' ) );?>
<?php if( $options->get( 'to_top' ) ):?>
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>
<?php endif; ?>
</main>
<?php wp_footer(); ?>
</body>

</html>