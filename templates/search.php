<?php 
get_header();
$options = povash_WSH()->option(); ?>

<section class="search_area_df">
<div class="container">		 
		<div class="row clearfix">			
			<div class="col-md-5 col-sm-12 col-xs-12">
				<div class="searcg_img">
				  <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/search.jpg');?>" alt="<?php esc_attr_e('Image', 'povash');?>">
				</div>
			</div>
			<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="search_tx_box">
		<!-- search Title -->	
			<?php if($options->get('search-page_title' ) ): ?>
				<h1 class="search_title">
				<?php echo(wp_kses($options->get('search-page-text' ), $allowed_html )) ?>
				</h1>
				<?php else : ?>
				<h1 class="search_title">
				<?php esc_html_e( 'Oops! Search not Found', 'povash' ); ?>
				</h1>
			<?php endif; ?>	
		<!-- search Text -->		
				<?php if($options->get('search-page-text' ) ): ?>
				<div class="search_text">	
				<?php echo(wp_kses($options->get('search-page-text' ), $allowed_html )) ?>
				</div>
			<?php else : ?>
				<div class="search_text">	
				<p><?php esc_html_e( '1. Check the Spelling ', 'povash' ); ?>
				</p>
				<p><?php esc_html_e( '2. Check the Caps Lock', 'povash' ); ?>
				</p>      
				<p><?php esc_html_e( '3. Press Enter correctly or Press F5', 'povash' ); ?>
				</p> 
				</div>
			<?php endif; ?>	
		<!--  Search form -->
			   <?php if ( $options->get('search_page_form', true ) ) : ?>
				<?php echo get_search_form(); ?>
				<?php endif; ?>
		<!--  Back to Home -->
		   <?php if ( $options->get( 'search_back_home_btn', true ) ) : ?>
			<div class="error_btn1 btn-box wow fadeInUp animated" data-wow-delay="300ms">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="btn-one"><i class="fas fa-feather"></i>
				<?php esc_html_e( 'Back To Home', 'povash' ); ?>
				</a>
			</div>
			<?php endif; ?>
			</div>
			</div>
	</div>
</div>
</section>	