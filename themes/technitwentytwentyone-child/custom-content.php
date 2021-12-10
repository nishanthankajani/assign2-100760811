<?php
/**
 * Template name: Custom-Content
 
 *
 *
 *  @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
 <h5>this is my custom content heading  page </h5>

<?php

while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile;
?> 
 <h5><i>this is my custom content heading  page<i> </h5>


<?php get_footer(); ?>
