<?php
/*
 * Template Name: Kramar Map
 *
 * @package WordPress
 * @subpackage Kramar_Motorsport
 * @since Kramar Motorsport 2.0
*/
get_header( 'map' ); ?>

	<!-- SECOND SCREEN or MAIN SCREEN FOR PAGES -->
	<div class="row-fluid">
		
		<!-- MAIN BLOCK -->
		<div id="content" class="span12 column_container">
		
			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="single-header"><?php the_title(); ?></h1>
				
				<div class="cont">
					<div class="fl">
						<p>Часы работы: понедельник-пятница с 10.00 до 19.00 без перерыва на обед.</p>
					</div>
					<div class="fl">
						<p>105173, Балашиха, квартал Щитниково, владение 79 А</p>
					</div>
				</div>
				<div class="clear"></div>
				
				<p>
					<span class="pdf">&nbsp;</span>
					<a title="Схема проезда сервисное обслуживание Subaru" target="_blank" href="/img/map-kramar1.pdf">Схема проезда</a>
				</p>
				
				<!-- GOOGLE MAPS -->
				<div class="map">
					<div id="map-canvas"></div>
				</div>
				<!-- //GOOGLE MAPS -->

				<?php the_content(' ', get_post_format()); ?>

			<?php endwhile; // end of the loop. ?>

		</div>
		<!-- //MAIN BLOCK -->

<?php get_footer( 'map' ); ?>