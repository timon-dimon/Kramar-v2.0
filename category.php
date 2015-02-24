<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Kramar_Motorsport
 * @since Kramar Motorsport 2.0
 */

get_header(); ?>
	
<!-- MAIN BLOCK -->
<div id="photo" class="maincolumn">
	
	<?php if ( have_posts() ) : ?>
	<h1 class="single-header"><?php single_cat_title(); ?></h1>

	<!--
	<?php if ( category_description() ) : // Show an optional category description ?>
	<div class="archive-meta"><?php echo category_description(); ?></div>
	<?php endif; ?>
	-->

	<?php
	/* Start the Loop */
	while ( have_posts() ) : the_post();

		/* Include the post format-specific template for the content. If you want to
		 * this in a child theme then include a file called called content-___.php
		 * (where ___ is the post format) and that will be used instead.
		 */
		get_template_part( 'content', get_post_format() );

	endwhile;
	
	/* Блок навигации по ленте публикаций */
	kramar_content_nav( 'nav-below' );
	/* //Блок навигации по ленте публикаций */
	?>

	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>
	
</div>
<!-- //MAIN BLOCK -->

<?php get_footer(); ?>