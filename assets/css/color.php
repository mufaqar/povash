<?php


/** Set ABSPATH for execution */
define( 'ABSPATH', dirname(dirname(__FILE__)) . '/' );
define( 'WPINC', 'wp-includes' );


/**
 * @ignore
 */
function add_filter() {}

/**
 * @ignore
 */
function esc_attr($str) {return $str;}

/**
 * @ignore
 */
function apply_filters() {}

/**
 * @ignore
 */
function get_option() {}

/**
 * @ignore
 */
function is_lighttpd_before_150() {}

/**
 * @ignore
 */
function add_action() {}

/**
 * @ignore
 */
function did_action() {}

/**
 * @ignore
 */
function do_action_ref_array() {}

/**
 * @ignore
 */
function get_bloginfo() {}

/**
 * @ignore
 */
function is_admin() {return true;}

/**
 * @ignore
 */
function site_url() {}

/**
 * @ignore
 */
function admin_url() {}

/**
 * @ignore
 */
function home_url() {}

/**
 * @ignore
 */
function includes_url() {}

/**
 * @ignore
 */
function wp_guess_url() {}

if ( ! function_exists( 'json_encode' ) ) :
/**
 * @ignore
 */
function json_encode() {}
endif;



/* Convert hexdec color string to rgb(a) string */
 
function hex2rgba($color, $opacity = false) {
 
	$default = 'rgb(0,0,0)';
 
	//Return default if no color provided
	if(empty($color))
          return $default; 
 
	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}

$color = $_GET['main_color'];

ob_start(); ?>
/*========== Color ====================*/

.sec-title h4,
.feature-ex-section .single-item .inner-box .icon-box,
.image_block_4 .image-box .content-box h2,
.content_block_10 .content-box .text .list li:before,
.service-block-three .inner-box .lower-content .icon-box,
.service-block-three .inner-box .lower-content h3 a:hover,
.counter-block-two .inner-box .icon-box,
.testimonial-ex-section .owl-nav .owl-prev:hover, .testimonial-ex-section .owl-nav .owl-next:hover,
.testimonial-ex-section .testimonial-content .author-info ul li,
.team-block-two .inner-box .lower-content h3 a:hover,
.news-block-two .inner-box .lower-content .post-info li i,
.news-block-one .inner-box .content-box .post-info li i,
.main-header.style-two .sticky-header .main-menu .navigation > li.current > a, .main-header.style-two .sticky-header .main-menu .navigation > li:hover > a,
.testimonial-block-two .inner-box .author-box h4,
.weprovide-section .left-column .video-inner a,
.pricing-section.style-two .pricing-block .icon,
.testimonial-block-one .inner-box .author-box h4,
.two.teatimonial-style-two .testimonial-block-two .icon-box,.tt-coupons .tt-right-top .tt-title__02,.tt-coupons .tt-right-bottom .tt-text .tt-base-color,
.services__section2 .service__block2 .icon,
.workprocess__block .count,
.footer-upper .post-widget .post-inner .post .post-date,
.pricing__section .pricing__block .price,
.services__section .service__block .icon,
.whychoose__block .icon,
.team__section .team__block .social-links li a:hover,
.news__section .news__block h4 a:hover,
.footer-upper .post-widget .post-inner .post .post-date,
#content_block_1 .content-box .inner-box .counter-box .icon-box,
.footer-upper .about-widget .widget-content .subscribe-form .form-group input:focus + button, .footer-upper .about-widget .widget-content .subscribe-form .form-group button:hover,
#content_block_6 .content-box .inner-box .inner .single-item:hover .icon-box,
.main-menu .navigation > li.current > a, .main-menu .navigation > li:hover > a,
.about__section2 .content__block ul.tab-btns li.tab-btn.active-btn,
.service__block3 .icon,
.pricing-calculator .bottom-content .price span,
.pricing-calculator .bottom-content .price span,
.project-details .list li:before,
.faq__page .tabs-box .tabs-content h3,
.faq__page .accordion-box .block .acc-btn.active .icon-outer span:before,
.sidebar-page-container .post-widget .widget-content .post .date,
.st-comment-item .comment-info .date

{
	color:#<?php echo esc_attr( $color ); ?>!important;
}

/*==============================================
   Theme Background Css
===============================================*/

.main-header.style-two .header-lower .lower-inner .outer-box,
.works-ex-section .single-item .inner-box .image-box span,
.content_block_11 .content-box .inner-box .single-item .icon-box,
.service-block-three .inner-box .lower-content .btn-box .theme-btn-one,
.counter-block-two .inner-box:before,
.testimonial-ex-section .testimonial-content .thumb-box:before,
.team-block-two .inner-box .lower-content .share-option .share-links li a:hover,
.service-block-three .inner-box .lower-content .icon-box:before,
.team-block-two .inner-box .lower-content .share-option span,
.cta-section,
.bg-color-1,
.service-block-one .inner-box .lower-content .icon-box,
.service-block-one .inner-box .image-box,
.service-section .tab-btns li.active-btn, .service-section .tab-btns li:hover,
#image_block_2 .image-box:before,
.service-block-two .inner-box:before,
.google-map-section .lower-content .inner-container .image-box:before,
#content_block_2 .content-box .text .list li:before,
#content_block_5 .content-box .inner .icon-box:before,
.testimonial-section .owl-dots .owl-dot.active span, .testimonial-section .owl-dots .owl-dot span:hover,
#content_block_4 .content-box .image-box .video-btn,
.about-area .feature-section .feature-column:last-child .feature-block,
.about-area .feature-section .feature-column:first-child .feature-block,
.service-details-content .inner-box .two-column .left-inner .icon-box:before,
.service-sidebar .download-widget .download-content a,.woocommerce #place_order, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,
.theme-btn.style-three,
.testimonials__section .owl-theme .owl-nav .owl-prev:hover:after, .testimonials__section .owl-theme .owl-nav .owl-next:hover:after,
.pricing__section .pricing-tabs .tab-btns .active-btn,
.theme-btn.style-five,
.cta__section,
.funfact-section.style-two,
.team__section .team__block .social-links:before,
.header-top .top-inner .top-right .link .bg-color,
.pricing-section.style-two .btn-style-two:before,
.pricing-section.style-two .btn-style-two:after,
.information_siral,
#appoinment_content .thm-spinner .ui-widget-header,
#appoinment_content .thm-spinner.ui-slider .ui-slider-handle,
#appoinment_content .btn-info,
.services-price .table thead th,
.owl-theme .owl-dots .owl-dot.active span,
.experience-section.alternat-2 .progress-box .bar-inner,
.experience-section.alternat-2 .progress-box .count-text,
.experience-section.alternat-2 .progress-box .count-text:before,
.team-member-info-box .social-links-style1 li a:hover i,
.team-single-area .btn-style-two,
.team-single-area .btn-style-two:before,
.team-single-area .btn-style-two:after,
.resume .info-box .title:after,
.faq__page ul.tab-btns li.tab-btn:before,
.pagination li .page-numbers.current,
.pagination li:first-child a, .pagination li:last-child a

{
	background: #<?php echo esc_attr( $color ); ?>!important;
	background-color:#<?php echo esc_attr( $color ); ?>!important;
}


/*==============================================
   Theme Border Color Css
===============================================*/

.pricing-section.style-two .btn-style-two,
.about__section2 .content__block ul.tab-btns li.tab-btn.active-btn,
.team-single-area .btn-style-two,
.faq__page .accordion-box .block .acc-btn.active .icon-outer

{
    border-color: #<?php echo esc_attr( $color ); ?>!important;  
}

/*==============================================
   RGB
===============================================*/

.video-galler-outer-bg:before {
    background-color: <?php echo esc_attr( hex2rgba($color, 0.9));?>!important;
}
.main-slider .content h3:before{
    background: <?php echo esc_attr( hex2rgba($color, 0.4));?>!important;
}




<?php 

$out = ob_get_clean();
$expires_offset = 31536000; // 1 year
header('Content-Type: text/css; charset=UTF-8');
header('Expires: ' . gmdate( "D, d M Y H:i:s", time() + $expires_offset ) . ' GMT');
header("Cache-Control: public, max-age=$expires_offset");
header('Vary: Accept-Encoding'); // Handle proxies
header('Content-Encoding: gzip');

echo gzencode($out);
exit;