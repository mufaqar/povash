<?php
/**
 * Blog Post Main File.
 *
 * @package SUMBA
 * @author  Theme Author
 * @version 1.0
 */

get_header();


while(have_posts()) {
	   the_post();
	   the_content();
}
get_footer();
