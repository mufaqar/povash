<?php
/**
 * Footer Template  File
 *
 * @package POVASH
 * @author  Theme Author
 * @version 1.0
 */

$options = povash_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );
?>


        <footer class="main-footer">
            <div class="footer-upper">
                   <?php if ( is_active_sidebar( 'footer-sidebar' ) ) { ?>
					<div class="auto-container">
						<!--Widgets Section-->
						<div class="widgets-section">
							<div class="row clearfix">
								<?php dynamic_sidebar( 'footer-sidebar' ); ?>
							</div>
						</div>
					</div>
					<?php } ?>	
			
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-box clearfix">
                        <div class="copyright pull-left">
                            <p><?php echo wp_kses( $options->get( 'copyright_text', '© 2021 <a href="#">Povash</a> Consultancy, All Rights Reserved.' ), $allowed_html ); ?></p>
                        </div>
						
						   
				<?php
					$icons = $options->get( 'footer_v1_social_share' );
					if ( ! empty( $icons ) ) :
				?>
 <ul class="footer-social pull-right clearfix">
				<?php
                    foreach ( $icons as $h_icon ) :
                    $header_social_icons = json_decode( urldecode( povash_set( $h_icon, 'data' ) ) );
                    if ( povash_set( $header_social_icons, 'enable' ) == '' ) {
                        continue;
                    }
                    $icon_class = explode( '-', povash_set( $header_social_icons, 'icon' ) );
                    ?>
                    <li><a href="<?php echo esc_url(povash_set( $header_social_icons, 'url' )); ?>" style="background-color:<?php echo esc_attr(povash_set( $header_social_icons, 'background' )); ?>; color: <?php echo esc_attr(povash_set( $header_social_icons, 'color' )); ?>"><span class="fab <?php echo esc_attr( povash_set( $header_social_icons, 'icon' ) ); ?>"></span></a></li>
                <?php endforeach; ?>
                </ul>
                <?php endif;?>	
                    </div>
                </div>
            </div>
        </footer>

