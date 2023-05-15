<?php get_header(); 
$data    = \POVASH\Includes\Classes\Common::instance()->data( 'single-povash_team' )->get();
do_action( 'povash_banner', $data );
$allowed_tags = wp_kses_allowed_html('post');

?>

<?php while( have_posts() ) : the_post(); ?>

<!--  Team details -->
<section class="team-details-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-team-member">
                    <div class="inner-box">
                        <?php if( has_post_thumbnail() ):?>
                        <div class="image">
                            <?php the_post_thumbnail('povash_340x468'); ?>
                            
                            <?php
								$icons = get_post_meta( get_the_id(), 'social_profile', true );
								if ( ! empty( $icons ) ) :
							?>
                            <div class="social-links-wrapper">
                                <div class="icon"><span class="flaticon-share-1"></span></div>
                                <ul class="social-links">
                                    <?php
									foreach ( $icons as $h_icon ) :
									$header_social_icons = json_decode( urldecode( povash_set( $h_icon, 'data' ) ) );
									if ( povash_set( $header_social_icons, 'enable' ) == '' ) {
										continue;
									}
									$icon_class = explode( '-', povash_set( $header_social_icons, 'icon' ) );
									?>
									<li><a href="<?php echo povash_set( $header_social_icons, 'url' ); ?>" style="background-color:<?php echo povash_set( $header_social_icons, 'background' ); ?>; color: <?php echo povash_set( $header_social_icons, 'color' ); ?>"><span class="fab <?php echo esc_attr( povash_set( $header_social_icons, 'icon' ) ); ?>"></span></a></li>
									<?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif;?>
                        <div class="lower-content">
                            <div class="author-title">
                                <h4><?php the_title(); ?></h4>
                                <div class="designation"><?php echo (get_post_meta( get_the_id(), 'designation', true ));?></div>
                            </div>                                
                            <ul class="info-list">
                                <li><span><?php esc_html_e('Email:', 'povash'); ?></span> <a href="mailto:<?php echo (get_post_meta( get_the_id(), 'team_email', true));?>"><?php echo (get_post_meta( get_the_id(), 'team_email', true ));?></a></li>
                                <li><span><?php esc_html_e('Phone:', 'povash'); ?></span> <a href="tel:<?php echo (get_post_meta( get_the_id(), 'team_phone', true ));?>"><?php echo (get_post_meta( get_the_id(), 'team_phone', true ));?></a></li>
                                <li><span><?php esc_html_e('Address:', 'povash'); ?></span> <?php echo (get_post_meta( get_the_id(), 'team_address', true ));?></li>
                                <li><span><?php esc_html_e('Website:', 'povash'); ?></span> <?php echo (get_post_meta( get_the_id(), 'team_url', true ));?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="working-history">
                    <?php the_content(); ?>
                    <div class="contact-form-area">
                        <div class="sec-title">
                            <h2><?php echo (get_post_meta( get_the_id(), 'form_title', true ));?></h2>
                            <div class="text-decoration">
                                <span class="left"></span>
                                <span class="right"></span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form">
                        <?php echo do_shortcode(get_post_meta( get_the_id(), 'contact_form_url', true ));?>
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>