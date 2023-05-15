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
        <header class="main-header style-three">
            <div class="header-top">
                <!-- header-top -->
                <div class="auto-container">
                    <div class="top-inner clearfix">
                        <div class="top-left pull-left clearfix">
						                <?php echo wp_kses( $options->get( 'social_profile'), $allowed_html ); ?>
							
						
                        </div>
                        <div class="text pull-right">
                            <p><i class="far fa-clock"></i><?php echo wp_kses( $options->get( 'time_title_v1'), $allowed_html ); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header-upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="upper-inner clearfix">
                        <div class="info-box pull-left clearfix">
                            <div class="logo-box">
                                <div class="shape"></div>
                                <figure class="logo"><?php echo povash_logo( $logo_type, $image_logo, $logo_dimension, $logo_text, $logo_typography ); ?></figure>
                            </div>
                        </div>
                        <div class="upper-info pull-right">
                            <ul class="info-list clearfix"> 
                                <li>
                                    <i class="flaticon-telephone"></i>
                                    <h5><?php echo wp_kses( $options->get( 'phone_title_v1'), $allowed_html ); ?></h5>
                                    <p><a href="#"><?php echo wp_kses( $options->get( 'phone_v1'), $allowed_html ); ?></a></p>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <h5><?php echo wp_kses( $options->get( 'email_title_v1'), $allowed_html ); ?></h5>
                                    <p><a href="#"><?php echo wp_kses( $options->get( 'email_v1'), $allowed_html ); ?></a></p>
                                </li>
								
								 <li>
                                    <i class="icon flaticon-pin"></i>
                                    <h5><?php echo wp_kses( $options->get( 'address_title_v1'), $allowed_html ); ?></h5>
                                    <p><a href="#"><?php echo wp_kses( $options->get( 'address_v1'), $allowed_html ); ?></a></p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="lower-inner">
                        <div class="outer-box clearfix">
                            <div class="menu-area pull-left">
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
                            <ul class="menu-right-content pull-right">
								<?php if( $options->get( 'header_search_show_v1' ) ):?>
                                <li class="search-box-outer">
                                    <div class="dropdown">
                                        <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i></button>
                                        <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                                            <div class="form-container">
                                               <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="search-form">
                                                    <div class="form-group">
                                                        <input type="search" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php echo wp_kses( $options->get( 'search_text_v1'), $allowed_html ); ?>" required="">

                                                        <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
								<?php endif; ?>
                               
                            </ul>
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