<?php
function awesome_script_enqueue(){
wp_enqueue_style('customstyle',get_template_directory_uri().'/css/awesome.css',array(),'1.0.0','all');
wp_enqueue_script('customjs',get_template_directory_uri().'/js/awesome.js',array(),'1.0.0','true');
}
add_action('wp_enqueue_scripts','awesome_script_enqueue');


function awesome_theme_setup();
{
	add_theme_support('menus');
	register_nav_menu('primary','primary header navigation');
	register_nav_menu('secondary','footer navigation');
}
add_action('init','awesome_theme_setup');
add_theme_support('custom-background');
add_theme_support('menus');
add_theme_support('post-thumbnails');//feature image 
add_theme_support('post-formats',array('aside','image','video'));
//function university_files(){
//	wp_enqueue_style('university_main_styles',get_stylesheet_uri());
//}
//add_action('wp_enqueue_scripts','university_files');


//sidebar function
function awesome_widget_setup(){
	register_sidebar(
	array(
	'name'=>'sidebar',
	'id'=>'sidebar-1',
	'class'=>'custom',
	'description'=>'standard sidebar',
	'before_widget'=>'<aside id="%1$s" class="widget %2$s">',
	'after_widget'=>'</aside>',
	'before_widget'=>'<h1 class="widget-title">',
    'after_widget'=>'</h1>',
	)
	);
}
add_action('widgets_init','awesome_widget_setup');


?>