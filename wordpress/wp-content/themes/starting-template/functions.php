<?php

// Register menu

register_nav_menus(
	array(
		'main-menu' => 'Main Menu'
	)
);

// Thumbnails

add_theme_support('post-thumbnails');
set_post_thumbnail_size(240, 240, true);

// Widgets side bar

$aside_sidebar = array(
	'name' => 'Aside',
	'id' => 'aside', 
	'description' => 'Widgets placed here will go on the righthand sidebar',
	'class' => '',
	'before_widget' => '<div>',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	); 

register_sidebar( $aside_sidebar );

// Replaces the excerpt "more" text by a link

function new_excerpt_more($more) {
       global $post;
    return '<a class="moretag" title="'. get_the_title($post->ID) . '" href="'. get_permalink($post->ID) . '"> Read more...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');