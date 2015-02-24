<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Kramar_Motorsport
 * @since Kramar Motorsport 2.0
 */

get_header(); ?>

	<!-- SECOND SCREEN or MAIN SCREEN FOR PAGES -->
	<div class="row-fluid">
		
		<!-- MAIN BLOCK -->
		<div id="content" class="maincolumn">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="single-header"><?php the_title(); ?></h1>
			
				<?php the_content(' ', get_post_format()); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
		<!-- //MAIN BLOCK -->
	
<?php get_footer(); ?>

	<!--div id="content" role="main" <?php post_class(''); ?>-->