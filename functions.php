<?php

// Load jQuery
	if ( !function_exists(core_mods) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script('jquery');
				wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"), false);
				wp_enqueue_script('jquery');
			}
		}
		core_mods();
	}
	
// Home Sidebar

register_sidebar( array(
		'name' => __( 'Home Sidebar', 'f1' ),
		'id' => 'home-sidebar',
		'description' => __( 'The primary widget area on the home page.', 'f1' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );

register_sidebar( array(
		'name' => __( 'MegaMenu', 'f1' ),
		'id' => 'megamenu-sidebar',
		'description' => __( 'MegaMenu widget holder.', 'f1' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );

?>