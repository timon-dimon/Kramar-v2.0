<?php	// Register the extra Widget Header
function wicked_header_aside() {
	register_sidebar( array(
		'name' => __( 'Верхняя панель (header)', 'kramar' ),
		'id' => 'header-aside',
		'description' => __('Логотип, навигация ...', 'kramar'),
		'before_widget' => '',
		'after_widget' => '',
		//'before_title' => '<h3 class="widget-title">',
		//'after_title' => '</h3>',
	)	);
}
add_action('init', 'wicked_header_aside');

// Add header Sidebar Area
function add_wicked_header_aside() {
	if (is_sidebar_active('header-aside')) {
		echo kramar_before_widget_area('header-aside');
		dynamic_sidebar('header-aside');
		echo kramar_after_widget_area('header-aside');
		}
	}
	add_action('kramar_footer','add_wicked_header_aside', 10);
?>