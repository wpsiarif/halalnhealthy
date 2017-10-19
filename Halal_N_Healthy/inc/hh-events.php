<?php


function hh_event(){
	register_post_type('event', array(
		
		'labels'=> array(
		'name'=> 'Events',
		'menu_name'=> 'Our Events',
		'add_new'=> 'Add New Event',
		'add_new_item' => 'Add new event'
		 
		 ),
		 'public' => true,
		 'menu_icon' => 'dashicons-menu',
		 'supports' => array('title', 'editor', 'excerpt', 'revisions', 'thumbnail')
	
	
	
	));
	
	
	
}
add_action('init','hh_event');