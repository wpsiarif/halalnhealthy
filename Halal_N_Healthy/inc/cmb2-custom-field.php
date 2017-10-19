<?php

/**
 * Get the bootstrap!
 */
if ( file_exists( __DIR__ . '/cmb2/init.php' ) ) {
  require_once __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once __DIR__ . '/CMB2/init.php';
}



add_action( 'cmb2_admin_init', 'hh_cmb2_sample_metaboxes' );


function hh_cmb2_sample_metaboxes() {
	
	$prefix = '_halal-n-healthy_';
	
	$hot_offer = new_cmb2_box( array(
		'id'            => 'hot_metabox',
		'title'         => __( 'Hot Metabox', 'halal_n_healthy' ),
		'object_types'  => array( 'hot-offer', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	
	
	
	$hot_offer->add_field( array(
		'name'       => __( 'Hot Offer Quoto', 'halal_n_healthy' ),
		'desc'       => __( 'write here your hot offer quoto', 'halal_n_healthy' ),
		'id'         => $prefix . 'hot-quoto',
		'type'       => 'text'
		
	) );
	
	
	
	/** ADDING PRICE IN POST!*/
	
	
		$price = new_cmb2_box( array(
		'id'            => 'price_metabox',
		'title'         => __( 'Price Metabox', 'halal_n_healthy' ),
		'object_types'  => array( 'post', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	
	
	$price->add_field( array(
		'name'       => __( 'Price', 'halal_n_healthy' ),
		'desc'       => __( 'Insert Price of the food', 'halal_n_healthy' ),
		'id'         => $prefix . 'price',
		'type'       => 'text'
		
	) );
	
	
	/** ADDING PREPERATION TIME IN POST!*/
	
		$preperation_time = new_cmb2_box( array(
		'id'            => 'pretime_metabox',
		'title'         => __( 'Preperation Time Metabox', 'halal_n_healthy' ),
		'object_types'  => array( 'post', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	
	
	$preperation_time->add_field( array(
		'name'       => __( 'Preperation Time', 'halal_n_healthy' ),
		'desc'       => __( 'Insert Preperation Time of the food', 'halal_n_healthy' ),
		'id'         => $prefix . 'pretime',
		'type'       => 'text'
		
	) );
	
	
	
	/** ADDING COOKING TIME IN POST!*/
	
	
		$cooking_time = new_cmb2_box( array(
		'id'            => 'cooktime_metabox',
		'title'         => __( 'Cooking Time Metabox', 'halal_n_healthy' ),
		'object_types'  => array( 'post', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	
	
	$cooking_time->add_field( array(
		'name'       => __( 'Cooking Time', 'halal_n_healthy' ),
		'desc'       => __( 'Insert Cooking Time of the food', 'halal_n_healthy' ),
		'id'         => $prefix . 'cooktime',
		'type'       => 'text'
		
	) );
	
	
	/** ADDING SERVES PEOPLE IN POST!*/
	
	
		$serves_people = new_cmb2_box( array(
		'id'            => 'servespeople_metabox',
		'title'         => __( 'Serves People Metabox', 'halal_n_healthy' ),
		'object_types'  => array( 'post', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	
	
	$serves_people->add_field( array(
		'name'       => __( 'Serves People', 'halal_n_healthy' ),
		'desc'       => __( 'Insert Serves People of the food', 'halal_n_healthy' ),
		'id'         => $prefix . 'servespeople',
		'type'       => 'text'
		
	) );
}