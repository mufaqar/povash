<?php
/**
 * Single Post Content Template
 *
 * @package    WordPress
 * @subpackage POVASH
 * @author     Theme Author
 * @version    1.0
 */
?>
<?php global $wp_query;

$page_id = ( $wp_query->is_posts_page ) ? $wp_query->queried_object->ID : get_the_ID();

$gallery = get_post_meta( $page_id, 'povash_gallery_images', true );

$video = get_post_meta( $page_id, 'povash_video_url', true );


$audio_type = get_post_meta( $page_id, 'povash_audio_type', true );

?>


<div class="blog-details-content">  
 <div class="news-block-two">
	<div class="inner-box">
	
		<figure class="image-box">
			<?php the_post_thumbnail(); ?>
			<span class="post-date"><?php the_category(', '); ?></span>
		</figure>

		<div class="lower-content">
			<ul class="post-info clearfix">
				
				<li><i class="far fa-user"></i> <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>"><?php the_author(); ?></a></li>
				
				<li><i class="far fa-calendar"></i> <a href="<?php echo get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ); ?>"><?php echo get_the_date(); ?></a></li>
				
				<li><i class="far fa-comment"></i> <span class="comment_class"><?php comments_number( wp_kses(__('0 Comments' , 'povash'), true), wp_kses(__('1 Comment' , 'povash'), true), wp_kses(__('% Comments' , 'povash'), true)); ?></span></li>
				
			</ul>
		<div class="text">
			<?php the_content(); ?>
			<div class="clearfix"></div>
		<?php wp_link_pages(array('before'=>'<div class="paginate_links">'.esc_html__('Pages: ', 'povash'), 'after' => '</div>', 'link_before'=>'', 'link_after'=>'')); ?>
		</div>
	
			
		</div>
	</div>
</div>


<?php povash_template_load( 'templates/blog-single/social_share.php', compact( 'options', 'data' ) ); ?>	


<?php comments_template(); ?>

</div>