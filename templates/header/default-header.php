<?php
$options = povash_WSH()->option(); 
$allowed_html = wp_kses_allowed_html( 'post' );

//Logo Settings
$image_logo = $options->get( 'image_normal_logo' );
$logo_dimension = $options->get( 'normal_logo_dimension' );

$image_logo2 = $options->get( 'image_normal_logo2' );
$logo_dimension2 = $options->get( 'normal_logo_dimension2' );

$logo_type = '';
$logo_text = '';
$logo_typography = '';
?>



        <!-- main header -->
        <header class="main-header">
		<?php if( $options->get( 'top_header_show_v1' ) ):?>
            <div class="header-top">
                <!-- header-top -->
                <div class="auto-container">
                    <div class="top-inner clearfix">
						  <?php if(wp_kses( $options->get( 'welcome_v1'), $allowed_html )) : ?>	
                        <div class="text pull-left"><p><?php echo esc_attr( $options->get( 'welcome_v1' ), $allowed_html ); ?></p></div>
						 <?php endif ; ?>
                        <div class="top-right pull-right clearfix">
					                <?php echo wp_kses( $options->get( 'social_profile'), $allowed_html ); ?>
							<?php if( $options->get('quote_show_v1') ):?>
                            <div class="link">
                                <div class="bg-color"></div>
                                <a href="<?php echo esc_attr( $options->get( 'quote_link_v1' ), $allowed_html ); ?>"><?php echo esc_attr( $options->get( 'quote_v1' ), $allowed_html ); ?></a>
                            </div>
							<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
			<?php endif; ?>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box clearfix">
                        <div class="info-box pull-left clearfix">
                            <div class="logo-box">
                                <div class="bg-color"></div>
                               <figure class="logo"><?php echo povash_logo( $logo_type, $image_logo, $logo_dimension, $logo_text, $logo_typography ); ?></figure>
                            </div>
							
						  <?php if(wp_kses( $options->get( 'about_v1'), $allowed_html )) : ?>		
                            <div class="phone-box">
                                <div class="icon-box"><i class="flaticon-chat"></i></div>
                                <p><?php echo esc_attr( $options->get( 'about_v1' ), $allowed_html ); ?></p>
                                <h5><a href=""><?php echo esc_attr( $options->get( 'phone_v1' ), $allowed_html ); ?></a></h5>
                            </div>
							<?php endif; ?>
                        </div>
                        <div class="menu-area pull-right">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbar-collapse-1',
											'container_class'=>'navbar-collapse collapse navbar-right',
											'menu_class'=>'nav navbar-nav',
											'fallback_cb'=>false, 
											'items_wrap' => '%3$s', 
											'container'=>false,
											'depth'=>'3',
											'walker'=> new Bootstrap_walker()  
										) ); ?>  
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

              <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box clearfix">
                        <div class="info-box pull-left clearfix">
                            <div class="logo-box">
                                <div class="bg-color"></div>
                                <figure class="logo"><?php echo povash_logo( $logo_type, $image_logo, $logo_dimension, $logo_text, $logo_typography ); ?></figure>
                            </div>
                        </div>
                        <div class="menu-area pull-right">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->