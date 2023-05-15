<?php
/**
 * Search Form template
 *
 * @package POVASH
 * @author Theme Author
 * @version 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}
?>

<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="search-form">
    <div class="form-group">
        <input type="search" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr__( 'Keyword...', 'povash' ); ?>" required="">
        <button type="submit"><i class="fas fa-search"></i></button>
    </div>
</form>
