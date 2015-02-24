<?php
/*
 * Template Name: Kramar Live
 *
 * @package WordPress
 * @subpackage Kramar_Motorsport
 * @since Kramar Motorsport 2.0
*/
get_header(); ?>

	<!-- SECOND SCREEN or MAIN SCREEN FOR PAGES -->
	<div class="row-fluid">
		
		<!-- MAIN BLOCK -->
		<div id="content" class="span12 column_container">
		
			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="single-header"><?php the_title(); ?></h1>
			
				<?php the_content(' ', get_post_format()); ?>
				<?php /*comments_template( '', true );*/ ?>
			<?php endwhile; // end of the loop. ?>

		</div>
		<!-- //MAIN BLOCK -->

<?php get_footer( 'live' ); ?>