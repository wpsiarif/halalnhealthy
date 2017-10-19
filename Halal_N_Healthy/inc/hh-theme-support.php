<?php

function hh_theme_support_functions(){	

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('html5');
	
	
	add_image_size('hotoffersize',385,453,true);
	add_image_size('differentfoodtab',300,300,true);
	add_image_size('eventpic',400,300,true);
	add_image_size('singlepage',580,400,true);
	add_image_size('food',300,200,true);
	
	


}

add_action('after_setup_theme','hh_theme_support_functions');


?>