<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Kramar_Motorsport
 * @since Kramar Motorsport 2.0
 */

get_header(); ?>

	<!-- FIRST SCREEN -->
	<div class="maincolumn">
		
		<!-- Список последних публикаций (SLIDER) -->
		<div class="wpb_wrapper">

			<!-- START Slider -->
			<div id="ei-slider" class="ei-slider">
				<ul class="ei-slider-large">
					
					<?php global $do_not_duplicate; ?>
					<?php 
						$do_not_duplicate = array();
						$my_query = new WP_Query(array('posts_per_page' => 4, 'post__in' => get_option( 'sticky_posts' ), 'caller_get_posts' => 1 ) );
						while ($my_query->have_posts()) : $my_query->the_post();
						$do_not_duplicate[] = $post->ID; 
					?>
					<li>
						
						<!-- Проверка наличия внешней ссылки для миниатюры -->
						<?php if (get_field('ext_url') == ""): ?>
							
							<!-- Если внешняя ссылка отсутствует -->
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( '%s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>">
								<?php the_post_thumbnail('windows8', array('class' => 'entry-thumb')); ?>
								<h1><?php the_title(); ?></h1>
							</a>
							<!-- // Если внешняя ссылка отсутствует -->
							
							<!-- Если внешняя ссылка присутствует -->
							<?php else: ?>
							<a href="<?php the_field('ext_url'); ?>" rel="bookmark" title="<?php printf( esc_attr__( '%s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>">
								<?php the_post_thumbnail('windows8', array('class' => 'entry-thumb')); ?>
								<h1><?php the_title(); ?></h1>
							</a>
							<!-- // Если внешняя ссылка присутствует -->
									
						<?php endif ?>
						<!-- // Проверка наличия внешней ссылки для миниатюры -->
						
					</li>
					<?php endwhile;?>
					<?php wp_reset_query(); ?>
					
				</ul><!-- ei-slider-large -->
				
				<ul class="ei-slider-thumbs">
					<li class="ei-slider-element">Current</li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
				</ul><!-- ei-slider-thumbs -->
			</div><!-- ei-slider -->
			
			<!-- // END Slider -->
		
		</div>
		<!-- //Список последних публикаций (SLIDER) -->
		
	</div><!-- .maincolumn -->
	
	<div class="clear max640"></div>
	
	<div class="sidebar side-max640">
		<h4 class="block-title2">
			<span style="background-color:#ff0000;color:#fff">Сервис</span>
		</h4>
		<div class="side-service">
			<p>Мы предпочитаем применять оригинальные запчасти <strong>Subaru</strong>, но по желанию клиента можем предложить хороший выбор проверенных аналогов.</p>
			<center><a href="autoservice/" title="Сервисное обслуживание автомобилей Subaru"><img src="/img/Flyer-price-site.png" style="width:80%"/></a></center>
			<!--
			<ul>
				<li>Обслуживание, диагностика, ремонтные работы;</li>
				<li>Установка дополнительного оборудования</li>
			</ul>
			<p>Мы никогда не беремся за те работы, которые по каким-либо причинам не сможем сделать качественно и в срок.</p>
			-->
		</div>
	</div>
	<div class="clear"></div>
	<!-- //FIRST SCREEN -->
	
	<!-- SECOND SCREEN or MAIN SCREEN FOR PAGES -->
	<div class="row-fluid" id="second-screen">
	
		<!-- MAIN SECOND BLOCK -->
		<div class="maincolumn">
			
			<h4 class="block-title">
				<span style="background-color:#fff;color:#000">ДРУГИЕ НОВОСТИ</span>
			</h4>
			<div class="block-child-cats">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>news/" title="Все новости Kramar Motorsport">Все новости</a>
			</div>
			
			<!-- BIG 2 OTHER NEWS -->
			<div class="all-news">
				<?php global $do_not_duplicate; ?>
				<?php 
					$my_query = new WP_Query(array('posts_per_page' => 2, 'post__not_in' => array_merge($do_not_duplicate, get_option( 'sticky_posts' )) ) );
					while ($my_query->have_posts()) : $my_query->the_post();
					$do_not_duplicate[] = $post->ID; 
				?>
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
						<!-- ?php the_excerpt();? -->
						<p>
						<?php 
							//вывод анонса различной длины
							echo wp_trim_words( get_the_content(), 15, ' ...' ); 
						?>
						</p>
					</div>

				</div>
				
				<?php endwhile;?>
				<?php wp_reset_query(); ?>
				<div class="clear"></div>
			</div>
			<!-- //BIG 2 OTHER NEWS -->
			
			<!-- ADD SMALL 6 OTHER NEWS -->
			<div class="small6news">
				<?php global $do_not_duplicate; ?>
				<?php 
					$my_query = new WP_Query(array('posts_per_page' => 6, 'post__not_in' => array_merge($do_not_duplicate, get_option( 'sticky_posts' )) ) );
					while ($my_query->have_posts()) : $my_query->the_post();
					$do_not_duplicate[] = $post->ID; 
				?>
				<div class="span6 td_mod3">
				
					<!-- Проверка наличия внешней ссылки для миниатюры -->
					<?php if (get_field('ext_url') == ""): ?>
						
						<!-- Если внешняя ссылка отсутствует -->
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( '%s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>">
							<!-- Вывод миниатюры -->
							<?php the_post_thumbnail('small-thumb', array('class' => 'small-thumb')); ?>
							<!-- //Вывод миниатюры -->
							<h3 class="entry-title"><?php the_title(); ?></h3>
						</a>
						<!-- //Если внешняя ссылка отсутствует -->
						
						<!-- Если внешняя ссылка присутствует -->
						<?php else: ?>
						<a href="<?php the_field('ext_url'); ?>" rel="bookmark" title="<?php printf( esc_attr__( '%s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>">
							<!-- Вывод миниатюры -->
							<?php the_post_thumbnail('small-thumb', array('class' => 'small-thumb')); ?>
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
		<!-- //MAIN SECOND BLOCK -->
		
		<!-- SIDEBAR and SECOND SCREEN closes in the FOOTER -->
		<?php get_footer(); ?>