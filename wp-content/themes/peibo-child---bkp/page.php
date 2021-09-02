<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Equality_Child
 */

get_header();

       
		while ( have_posts() ) :
			the_post();


			$post_id = get_the_ID();
			$dish_meta = get_post_meta( $post_id, 'dish_meta', true );
			$drink_meta = get_post_meta( $post_id, 'drink_meta', true );
			

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.



get_footer();

?>
