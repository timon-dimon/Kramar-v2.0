<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Kramar_Motorsport
 * @since Kramar Motorsport 2.0
 */

get_header(); ?>
	
		<!-- MAIN BLOCK -->
		<div id="photo" class="maincolumn">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>

			<?php twentytwelve_content_nav( 'nav-above' ); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<div <?php post_class(''); ?>>
			
				<?php if ( 'image' == get_post_format( get_the_ID() ) ) : ?>
				<!-- Блок с названием записи и большой миниатюрой -->
				<div class="post-header"></div>
				<div class="post-overlay-title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
						<h1 class="post-title"><?php the_title(); ?></h1>
					</a>
				</div>
				<!-- //Блок с названием записи и большой миниатюрой -->
				<!-- Вывод миниатюры в списке публикаций -->
				<center>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
						<?php
							if ( has_post_thumbnail() ) { // Проверка на наличие миниатюры для записи
								the_post_thumbnail('large');// Покажем большой размер миниатюры
							}
						?>
					</a>
				</center>
				<!-- //Вывод миниатюры в списке публикаций -->
				
				<?php else : ?>
				<!-- Вывод анонса записи: миниатюра + название + анонс -->
					<!-- Проверка наличия миниатюры и внешней ссылки -->
					<?php if( has_post_thumbnail() ):?>
					<div class="thumb">
						<!-- Проверка наличия внешней ссылки для миниатюры -->
						<?php if (get_field('ext_url') == ""): ?>
							<!-- ext_url = empty -->
							<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_post_thumbnail('medium'); ?></a>
							<?php else: ?>
							<a href="<?php the_field('ext_url'); ?>" title="<?php printf( esc_attr__( '%s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_post_thumbnail('medium'); ?></a>
						<?php endif ?>
						<!-- //Проверка наличия внешней ссылки для миниатюры -->
					</div>
					<?php endif; ?>
					<!-- //Проверка наличия миниатюры и внешней ссылки -->
				
					<!-- Проверка наличия внешней ссылки для названия -->
				  <?php if (get_field('ext_url') == ""): ?>
						<!-- ext_url = empty -->
						<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><h1 class="post-title"><?php the_title(); ?></h1></a>
						<?php else: ?>
						<a href="<?php the_field('ext_url'); ?>" title="<?php printf( esc_attr__( '%s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><h1 class="post-title"><?php the_title(); ?></h1></a>
					<?php endif ?>
					<!-- //Проверка наличия внешней ссылки для названия -->
				  
					<!-- Вывод анонса -->
					<?php the_excerpt(); ?>
					<!-- //Вывод анонса -->
				<!-- //Вывод анонса записи: миниатюра + название + анонс -->
				
				<?php endif; ?>
			</div>

			<?php endwhile; ?>

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>

		</div>
		<!-- //MAIN BLOCK -->

<?php get_footer(); ?>