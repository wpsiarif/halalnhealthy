<?php

function default_menu(){
	echo'<ul>';
	if(is_user_logged_in()){
		echo'<li><a href="'.home_url().'/wp-admin/nav-menus.php">go menu</a></li>';
	}
	else{
		
	echo'<li><a href="'.home_url().'">Home</a></li>';
	}
	echo'</ul>';
	
}

