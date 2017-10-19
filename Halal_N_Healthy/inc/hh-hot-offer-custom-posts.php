<?php


function hh_hot_offer(){
	register_post_type('hot-offer', array(
		
		'labels'=> array(
		'name'=> 'Hot Offer',
		'menu_name'=> 'Hot Offers',
		'add_new'=> 'Add New Offer',
		'add_new_item' => 'Add new hot offer'
		 
		 ),
		 'public' => true,
		 'menu_icon' => 'dashicons-welcome-write-blog',
		 'supports' => array('title','custom-fields', 'thumbnail')
	
	
	
	));
	
	
	
}
add_action('init','hh_hot_offer');