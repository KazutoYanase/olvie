<?php
/**
 * The template for displaying all single posts.
 *
 * @package Olvie
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post();//Start the Loop ?>


	<?php endwhile;//end of the loop. ?>
	
<?php get_footer(); ?>