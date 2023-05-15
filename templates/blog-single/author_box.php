<div class="author-box">
	<div class="inner">
		<figure class="author-thumb"><?php echo get_avatar( get_the_author_meta( 'ID' ), 160 ); ?></figure>
		<h4><?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?></h4>
		<p><?php echo esc_html( get_the_author_meta( 'description' ) ); ?></p>
	</div>
</div>
