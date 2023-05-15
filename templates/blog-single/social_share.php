<?php
$options = povash_WSH()->option(); ?>


<div class="post-share-option clearfix">

	<ul class="tags pull-left">
		<?php the_tags('Tags: ', '<span class="commax">,</span>  ', ''); ?>
	</ul>



		<?php if ( $options->get( 'single_social_share' ) && $options->get( 'single_post_share' ) ) : ?>	
		<ul class="social-links">
				
				<?php foreach ( $options->get( 'single_social_share' ) as $k => $v ) {
					if ( $v == '' ) {
						continue;
					} ?>
					<?php do_action('povash_social_share_output', $k ); ?>
				<?php } ?>
		</ul>
		<?php endif; ?>

</div>


