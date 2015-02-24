<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Kramar_Motorsport
 * @since Kramar Motorsport 2.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'twentytwelve' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentytwelve' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentytwelve' ) ) . '</span>' );
					else :
						_e( 'Archives', 'twentytwelve' );
					endif;
				?></h1>
			</header><!-- .archive-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
			<div <?php post_class(''); ?>>
			
				<?php if ( 'image' == get_post_format( get_the_ID() ) ) : ?>
				<!-- Блок с названием записи и другими атрибутами -->
				<div class="post-header"></div>
				<div class="post-overlay-title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
						<h1 class="post-title"><?php the_title(); ?></h1>
					</a>
				</div>
				<!-- //Блок с названием записи и другими атрибутами -->
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
				<div class="thumb">
        	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					<?php
						if ( has_post_thumbnail() ) { // Проверка на наличие миниатюры для записи
							the_post_thumbnail('medium');// Покажем миниатюру
						}
					?>
					</a>
        </div>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
        	<h1 class="post-title"><?php the_title(); ?></h1>
        </a>
        <?php the_excerpt(); ?>
				<?php endif; ?>
			</div>
			
			<?php endwhile; ?>
			<!-- //Список публикаций (лента) -->

			<!-- Блок навигации по ленте публикаций -->
			<?php twentytwelve_content_nav( 'nav-below' ); ?>
			<!-- //Блок навигации по ленте публикаций -->

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>