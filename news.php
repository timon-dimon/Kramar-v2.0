<?php
/*
 * The template for displaying All news pages
 * 
 * Template Name: All news pages
 *
 * @package WordPress
 * @subpackage Kramar_Motorsport
 * @since Kramar Motorsport 2.0
*/

get_header(); ?>

	<!-- SECOND SCREEN or MAIN SCREEN FOR PAGES -->
	<div class="row-fluid">
		
		<!-- All NEWS ON PAGE -->
		<div class="maincolumn">

			<h4 class="block-title2">
				<span style="background-color:#ff0000;color:#fff">Новости</span>
			</h4>
			
			<!-- BIG 6 NEWS -->
			<div class="all-news">
      	<?php
					$temp = $wp_query; $wp_query= null;
					$wp_query = new WP_Query(); $wp_query->query('showposts=6' . '&paged='.$paged);
					$one = true; //сбрасываем строку после каждой четной записи
					while ($wp_query->have_posts()) : $wp_query->the_post(); 
				?>
 
				<!-- Формирование блока одной записи -->
				<div class="span6 td_mod5 <?php echo cycle($oddEven); ?>">
					<!-- Проверка наличия внешней ссылки для миниатюры -->
					<?php if (get_field('ext_url') == ""): ?>
						
					<!-- Если внешняя ссылка отсутствует -->
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( '%s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>" class="all-news-preview">
						<!-- Вывод миниатюры -->
						<?php the_post_thumbnail('all-news-preview', array('class' => 'entry-thumb')); ?>
						<!-- //Вывод миниатюры -->
						<h2 class="entry-title"><?php the_title(); ?></h2>
					</a>
					<!-- //Если внешняя ссылка отсутствует -->

					<!-- Если внешняя ссылка присутствует -->
					<?php else: ?>
					<a href="<?php the_field('ext_url'); ?>" rel="bookmark" title="<?php printf( esc_attr__( '%s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>">
						<!-- Вывод миниатюры -->
						<?php the_post_thumbnail('all-news-preview', array('class' => 'entry-thumb')); ?>
						<!-- //Вывод миниатюры -->
						<h2 class="entry-title"><?php the_title(); ?></h2>
					</a>
					<!-- //Если внешняя ссылка присутствует -->

					<?php endif ?>
					<!-- //Проверка наличия внешней ссылки для миниатюры -->
						
					<div class="td-post-text-excerpt">
						<p>
						<?php 
							//вывод анонса различной длины
							echo wp_trim_words( get_the_content(), 15, ' ...' ); 
						?>
						</p>
					</div>
				</div>
				<!-- //Формирование блока одной записи -->
				
				<?php
					//сбрасываем строку после каждой четной записи
					$one = !$one; if ($one) echo '<div class=clear></div>';
				?>
        <?php endwhile; ?>
 
				<!-- Блок навигации по ленте публикаций -->
        <?php kramar_content_nav( 'nav-below' );?>
        <!-- //Блок навигации по ленте публикаций -->
 
        <?php wp_reset_postdata(); ?>
					
			</div>
			<!-- //BIG 6 NEWS -->
			
		</div>
		<!-- //All NEWS ON PAGE -->

<?php get_footer(); ?>