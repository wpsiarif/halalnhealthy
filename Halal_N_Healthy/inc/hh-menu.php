<?php


function hh_theme_menus(){
	
	register_nav_menus(array(
		   'main_menu' => 'Main Menu'
		 
		
		));
	
}
add_action('after_setup_theme','hh_theme_menus');

