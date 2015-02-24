<?php	// Register the extra Footer Aside
function wicked_footer_aside() {
	register_sidebar( array(
		'name' => __( 'Footer (логотипы)', 'kramar' ),
		'id' => 'footer-logo',
		'description' => __('Для размещения сторонних логотипов', 'kramar'),
		'before_widget' => '<div id="menuLogo">',
		'after_widget' => '</div>',
		//'before_title' => '<h5>',
		//'after_title' => '</h5>',
	)	);

	register_sidebar( array(
		'name' => __( 'Footer (контакты)', 'kramar' ),	// Название области виджетов.
		'id' => 'footer-aside',													// Идентификатор области виджетов. Используется при добавлении области виджетов к шаблонам.
		'description' => __('Для размещения контактов в подвале сайта.', 'kramar'), 											// Описание области виджетов, включающее в себя ее функционирование или расположение.
		'before_widget' => '<div class="address-list">',
		'after_widget' => '</div>',
		//'before_title' => '<h3 class="widget-title">',
		//'after_title' => '</h3>',
	)	);

}
add_action('init', 'wicked_footer_aside');

// Add footer Sidebar Area
function add_wicked_footer_aside() {
	if (is_sidebar_active('footer-aside')) {
		echo kramar_before_widget_area('footer-aside');
		dynamic_sidebar('footer-aside');
		echo kramar_after_widget_area('footer-aside');
		}
	}
	add_action('kramar_footer','add_wicked_footer_aside', 10);
?>