<?php
/**
 * The template for displaying posts in the Image post format
 *
 * @package WordPress
 * @subpackage Kramar_Motorsport
 * @since Kramar Motorsport 2.0
 */
?>
	
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- Блок с названием записи и большой миниатюрой -->
		<div class="post-header"></div>
		<div class="post-overlay-title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( '%s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>">
				<h1 class="post-title"><?php the_title(); ?></h1>
			</a>
		</div>
		<!-- //Блок с названием записи и большой миниатюрой -->
		<!-- Вывод миниатюры в списке публикаций -->
		<center>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( '%s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>">
				<?php
					if ( has_post_thumbnail() ) { // Проверка на наличие миниатюры для записи
						the_post_thumbnail('large');// Покажем большой размер миниатюры
					}
				?>
			</a>
		</center>
		<!-- //Вывод миниатюры в списке публикаций -->
	</div><!-- #post -->