<?php


function hh_css_js() {
	
	
	
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', 'hh-theme-stylesheet', 'v3.3.4', 'all');
	wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), '3.1.0', 'all');
	wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css', array(), '3.1.0', 'all');
	wp_enqueue_style('chocolat', get_template_directory_uri().'/css/chocolat.css', array(), '3.1.0', 'all');
	wp_enqueue_style('flexslider', get_template_directory_uri().'/css/flexslider.css', 'hh-theme-stylesheet', 'v2.0', 'all');
	wp_enqueue_style('jqueryui', get_template_directory_uri().'/css/jquery-ui.css', 'hh-theme-stylesheet', 'v2.0', 'all');
	wp_enqueue_style('theme-style', get_template_directory_uri().'/css/style.css','hh-theme-stylesheet', 'v1.0', 'all');
	wp_enqueue_style('hh-theme-stylesheet', get_stylesheet_uri());
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('move-top', get_template_directory_uri().'/js/move-top.js', 'jquery' , null, true);
	wp_enqueue_script('easing', get_template_directory_uri().'/js/easing.js', 'jquery' , null, true);
	wp_enqueue_script('chocolat', get_template_directory_uri().'/js/jquery.chocolat.js', 'jquery' , null, true);
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', 'jquery' , null, true);
	wp_enqueue_script('isotop', get_template_directory_uri().'/js/jquery.isotope.min.js', 'jquery' , null, true);
	wp_enqueue_script('jqueryui', get_template_directory_uri().'/js/jquery-ui.js', 'jquery' , null, true);
	wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.min.js', 'jquery' , null, true);
	wp_enqueue_script('function', get_template_directory_uri().'/js/functions.js', 'jquery' , null, true);
	
	
	
}

add_action('wp_enqueue_scripts', 'hh_css_js');