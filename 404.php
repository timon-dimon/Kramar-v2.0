<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Kramar_Motorsport
 * @since Kramar Motorsport 2.0
 */

get_header(); ?>

	<!-- SECOND SCREEN or MAIN SCREEN FOR PAGES -->
	<div class="row-fluid">
	
		<!-- MAIN BLOCK -->
		<div id="photo" class="span8 column_container">
			
			<h1 class="single-header"><?php _e( 'Ошибка', 'kramar' ); ?></h1>
			
			<p>Страница, которую вы запросили, не найдена.</p>

			<div id="error404">
				<p><?php _e( 'Возможно, поиск может помочь.', 'kramar' ); ?></p>
				<?php get_search_form(); ?>
			</div>
			
			<h4 class="block-title2">
				<span style="background-color:#ff0000;color:#fff">НОВОСТИ</span>
			</h4>
			<div class="block-child-cats">
				<a href="" title="Все новости Kramar Motorsport">Все новости</a>
			</div>
			
			<!-- BIG 2 OTHER NEWS -->
			<div>
				<?php global $do_not_duplicate; ?>
				<?php 
					$do_not_duplicate = array();
					$my_query = new WP_Query(array('posts_per_page' => 2, 'post__in' => get_option( 'sticky_posts' ), 'caller_get_posts' => 1 ) );
					while ($my_query->have_posts()) : $my_query->the_post();
					$do_not_duplicate[] = $post->ID; 
				?>
				<div class="span6 td_mod5">

					<!-- Проверка наличия внешней ссылки для миниатюры -->
					<?php if (get_field('ext_url') == ""): ?>

						<!-- Если внешняя ссылка отсутствует -->
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( '%s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>">
							<!-- Вывод миниатюры -->
							<?php the_post_thumbnail('medium', array('class' => 'entry-thumb')); ?>
							<!-- //Вывод миниатюры -->
							<h2 class="entry-title"><?php the_title(); ?></h2>
						</a>
						<!-- //Если внешняя ссылка отсутствует -->

						<!-- Если внешняя ссылка присутствует -->
						<?php else: ?>
						<a href="<?php the_field('ext_url'); ?>" rel="bookmark" title="<?php printf( esc_attr__( '%s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>">
							<!-- Вывод миниатюры -->
							<?php the_post_thumbnail('medium', array('class' => 'entry-thumb')); ?>
							<!-- //Вывод миниатюры -->
							<h2 class="entry-title"><?php the_title(); ?></h2>
						</a>
						<!-- //Если внешняя ссылка присутствует -->

					<?php endif ?>
					<!-- //Проверка наличия внешней ссылки для миниатюры -->

					<div class="td-post-text-excerpt"><?php the_excerpt();?></div>

				</div>
				
				<?php endwhile;?>
				<?php wp_reset_query(); ?>
			</div>
			<!-- //BIG 2 OTHER NEWS -->
			
			<!-- ADD SMALL 6 OTHER NEWS -->
			<div>
				<?php global $do_not_duplicate; ?>
				<?php 
					$my_query = new WP_Query(array('posts_per_page' => 4, 'post__not_in' => array_merge($do_not_duplicate, get_option( 'sticky_posts' )) ) );
					while ($my_query->have_posts()) : $my_query->the_post();
					$do_not_duplicate[] = $post->ID; 
				?>
				<div class="span6 td_mod3">
				
					<!-- Проверка наличия внешней ссылки для миниатюры -->
					<?php if (get_field('ext_url') == ""): ?>
						
						<!-- Если внешняя ссылка отсутствует -->
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( '%s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>">
							<!-- Вывод миниатюры -->
							<?php the_post_thumbnail('thumbnail', array('class' => 'small-thumb')); ?>
							<!-- //Вывод миниатюры -->
							<h3 class="entry-title"><?php the_title(); ?></h3>
						</a>
						<!-- //Если внешняя ссылка отсутствует -->
						
						<!-- Если внешняя ссылка присутствует -->
						<?php else: ?>
						<a href="<?php the_field('ext_url'); ?>" rel="bookmark" title="<?php printf( esc_attr__( '%s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>">
							<!-- Вывод миниатюры -->
							<?php the_post_thumbnail('thumbnail', array('class' => 'small-thumb')); ?>
							<!-- //Вывод миниатюры -->
							<h3 class="entry-title"><?php the_title(); ?></h3>
						</a>
						<!-- //Если внешняя ссылка присутствует -->
					
					<?php endif ?>
					<!-- //Проверка наличия внешней ссылки для миниатюры -->
					
				</div>
				
				<?php endwhile;?>
				<?php wp_reset_query(); ?>
			</div>
			<!-- //ADD SMALL 6 OTHER NEWS -->

		</div>
		<!-- //MAIN BLOCK -->

<?php get_footer(); ?>