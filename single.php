<?php
/**
 * The Template for displaying all single posts (full description)
 *
 * @package WordPress
 * @subpackage Kramar_Motorsport
 * @since Kramar Motorsport 2.0
 */

get_header(); ?>

<?php
	if ( wp_is_mobile() ){
		/* Покажем мобильую версию */
?>
	<!-- FIRST SCREEN -->
	<div class="row-fluid">

		<!-- MAIN BLOCK -->
		<div id="content" class="span12 column_container">

			<?php while ( have_posts() ) : the_post(); ?>

			<h1 class="single-header"><?php the_title(); ?></h1>

				<!-- Вывод миниматюры записи -->
				<?php if ( 'image' == get_post_format( get_the_ID() ) ) : ?>
				<?php
					if ( has_post_thumbnail() ) { // Проверка на наличие миниатюры для записи
						the_post_thumbnail('medium');// Покажем большой размер миниатюры
					}
				?>
				
				<?php else : ?>
				<!--div class="thumb"-->
					<?php
						if ( has_post_thumbnail() ) { // Проверка на наличие миниатюры для записи
							//the_post_thumbnail('medium', array('class' => 'single-header-img'));// Покажем миниатюру
							the_post_thumbnail('medium');// Покажем большой размер миниатюры
						}
					?>
        <!--/div-->
        <?php endif; ?>

			<!-- Вывод полного описания записи -->
			<?php the_content(' ', get_post_format()); ?>
			<!-- //Вывод полного описания записи -->

			<?php endwhile; // end of the loop. ?>

		</div>
		<!-- MAIN BLOCK -->

	</div>
	<!-- FIRST SCREEN -->
	
	<?php get_footer( 'mobile' ); ?>
	
<?php
	}
	else{
		/* Покажем десктопную версию */
?>
	<!-- FIRST SCREEN -->
	<div class="row-fluid">

		<!-- MAIN BLOCK -->
		<div id="content" class="span12 column_container">

			<?php while ( have_posts() ) : the_post(); ?>

			<h1 class="single-header"><?php the_title(); ?></h1>

				<!-- Вывод миниматюры записи -->
				<?php if ( 'image' == get_post_format( get_the_ID() ) ) : ?>
				<?php
					if ( has_post_thumbnail() ) { // Проверка на наличие миниатюры для записи
						the_post_thumbnail('large');// Покажем большой размер миниатюры
					}
				?>
				
				<?php else : ?>
					<?php
						if ( has_post_thumbnail() ) { // Проверка на наличие миниатюры для записи
							//the_post_thumbnail('medium', array('class' => 'single-header-img'));// Покажем миниатюру
							the_post_thumbnail('large');// Покажем большой размер миниатюры
						}
					?>
				<?php endif; ?>

			<!-- Вывод полного описания записи -->
			<?php the_content(' ', get_post_format()); ?>
			<!-- //Вывод полного описания записи -->

			<!-- Yandex Share -->
			<div class="yandex-share">
				<script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus" data-yashareTheme="counter"></div>
			</div>
			<!-- //Yandex Share -->

		</div>
		<!-- MAIN BLOCK -->

	</div>
	<!-- FIRST SCREEN -->

	<!-- SECOND SCREEN -->
	<div class="row-fluid">
		<div class="maincolumn column1">
			<h4 class="block-title2">
				<span style="background-color:#ff0000;color:#fff">Комментарии</span>
			</h4>
			<?php comments_template( '', true ); ?>
		</div>
		<div class="sidebar">
			<!-- SIDEBAR -->
			<?php get_sidebar( 'fullwidth' ); ?>
			<!-- //SIDEBAR -->
		</div>

		<?php endwhile; // end of the loop. ?>

	</div>
	<!-- SECOND SCREEN -->
	
	<?php get_footer( 'single' ); ?>

<?php
	}
?>