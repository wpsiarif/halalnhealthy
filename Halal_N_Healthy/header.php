
<!DOCTYPE HTML>
<html <?php language_attributes();  global  $halal_n_healthy; ?>>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



 

 
 
   <?php wp_head(); ?>
</head>
<body>
		<!-- start-header section-->
			<div class="header">
				<div class="container img-responsive" style="background:url(<?php  global  $halal_n_healthy; echo $halal_n_healthy['header_image']['url'];?>); background-position:center; background-size:cover;">
				     <div class="top-header">
                     
                        
						<div class="phone_menu">
                        
                        		<div class="phone">
                                    <ul>
                                        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
                                        <li><p><?php  echo $halal_n_healthy['header_phone'];?></p></li>
                                    </ul>
                                </div>
                        		<div class="top-menu">
                                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar" style="background:orange;"></span>
                                            <span class="icon-bar" style="background:orange;"></span>
                                            <span class="icon-bar" style="background:orange;"></span>
                                        </button>
                                </div>
                        </div>
						
						<div class="logo">
							<h1><a href="<?php bloginfo('home');?>">Halal & Healthy</a></h1>
						</div>
						<div class="header-right">
				
                        
                        
                        <div class="search_form">
                        	<?php get_search_form(); ?>
                        </div>
                        
                        <!--	<div class="searchform">
                            	<form action="" method="get">
                                	<input class="searchbtn"  type="submit" value="">
                                    <input id="s" class="searchtxt" type="text" name="s" value="Search">
                                    
                                </form>
                               
                           </div>-->
    
				</div>
		
						<div class="clearfix"></div>
					</div>	
                    
                   
                   
                  <div class="navbar-collapse collapse">   
                     <div id="nav">
                     	<div id="nav_wrapper"></br>
                        	<?php wp_nav_menu(array(
								'theme_location'=>'main_menu',
								'fallback_cb'=>'default_menu'
								
									   
							)); ?>    
                        
                        
                        </div>
                     </div>
                   </div>  
                   
				</div>
			</div>
		<!-- end-header section-->
		<!--start-banner-->
				
            	
                	
        <!--        
			<div class="top-menu container">
					<span class="menu"><img src="<?php echo get_template_directory_uri(); ?>/images/nav.png" alt=""/> </span>
                    
                    
                    	
                    
	
						<!-- script for menu -->
									
							 <script>
							 $("span.menu").click(function(){
							 $("#nav_wrapper ul").slideToggle("slow" , function(){
							 });
							 });
							 </script>
						<!-- //script for menu -->

		<!--</div>-->