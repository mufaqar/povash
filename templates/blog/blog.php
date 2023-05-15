<?php

/**
 * Blog Content Template
 *
 * @package    WordPress
 * @subpackage POVASH
 * @author     Theme Author
 * @version    1.0
 */

if ( class_exists( 'Povash_Resizer' ) ) {
	$img_obj = new Povash_Resizer();
} else {
	$img_obj = array();
}
$allowed_tags = wp_kses_allowed_html('post');
global $post;
?>
<div <?php post_class(); ?>>

    <div class="news-block-two">
        <div class="inner-box">
            <?php if( has_post_thumbnail() ):?>
            <figure class="image-box">
                <a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php the_post_thumbnil(); ?></a>
                <span class="post-date"><?php the_category(', '); ?></span>
            </figure>
            <?php endif;?>
            <div class="lower-content">
                <ul class="post-info clearfix">
                    <li><i class="far fa-user"></i> <a
                            href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>"><?php the_author(); ?></a>
                    </li>
                    <li><i class="far fa-calendar"></i> <a
                            href="<?php echo get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ); ?>"><?php echo get_the_date(); ?></a>
                    </li>

                    <li><i class="far fa-comment"></i> <span
                            class="comment_class"><?php comments_number( wp_kses(__('0 Comments' , 'povash'), true), wp_kses(__('1 Comment' , 'povash'), true), wp_kses(__('% Comments' , 'povash'), true)); ?></span>
                    </li>



                </ul>

                <h2><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
                <div class="link"><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><i
                            class="fas fa-angle-right"></i><?php esc_html_e('Read More', 'povash'); ?></a></div>
            </div>
        </div>
    </div>

</div>