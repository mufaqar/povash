<?php
/**
 * Comments Main File.
 *
 * @package POVASH
 * @author  Theme Author
 * @version 1.0
 */
?>
<?php
if ( post_password_required() ) {
	return;
}
?>
<?php $count = wp_count_comments(get_the_ID()); ?>

<?php if ( have_comments() ) : ?>
	
    <div class="comments-area post-comments" id="comments">
	
 <h3 class="m-b30">
	<?php comments_number( wp_kses(__('0 Comments' , 'povash'), true), wp_kses(__('1 Comment' , 'povash'), true), wp_kses(__('% Comments' , 'povash'), true)); ?>
	
</h3>
    
    <?php
        wp_list_comments( array(
            'style'       => 'div',
            'short_ping'  => true,
            'avatar_size' => 80,
            'callback'    => 'povash_list_comments',
        ) );
    ?>
    
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <nav class="navigation comment-navigation" role="navigation">
        <h1 class="screen-reader-text section-heading">
            <?php esc_html_e( 'Comment navigation', 'povash' ); ?>
        </h1>
        <div class="nav-previous">
            <?php previous_comments_link( esc_html__( '&larr; Older Comments', 'povash' ) ); ?>
        </div>
        <div class="nav-next">
            <?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'povash' ) ); ?>
        </div>
    </nav><!-- .comment-navigation -->
    <?php endif; ?>
    
	<?php if ( ! comments_open() && get_comments_number() ) : ?>
    <p class="no-comments">
        <?php esc_html_e( 'Comments are closed.', 'povash' ); ?>
    </p>
	<?php endif; ?>

</div>
<?php endif; ?>

<?php povash_comment_form(); ?>