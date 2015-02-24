<?php
/*
 * Template Name: Full-width and without block comments.
 *
 * @package WordPress
 * @subpackage Kramar_Motorsport
 * @since Kramar Motorsport 2.0
*/
get_header(); ?>

<!-- FIRST SCREEN -->
<div class="row-fluid">
	
	<!-- MAIN BLOCK -->
	<div id="content" class="span12 column_container">
		
		<?php while ( have_posts() ) : the_post(); ?>
		<h1 class="single-header"><?php the_title(); ?></h1>
		
		<?php the_content(' ', get_post_format()); ?>
		<?php endwhile; // end of the loop. ?>
		
	</div>
	<!-- //MAIN BLOCK -->

	<?php get_footer( 'live' ); ?>