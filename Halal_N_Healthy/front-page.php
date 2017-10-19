<?php get_header(); ?>
		
			<div class="content">
				<!--hot-offer-->
					<div class="today-offer">
                    
                    	<div class="container">
                        		
                             <div class="today-head">
						<h3><?php global  $halal_n_healthy; echo $halal_n_healthy['hot_offer_title']; ?></h3>
							<p><?php global  $halal_n_healthy; echo $halal_n_healthy['hot_offer_subtitle']; ?></p>
					</div>
                    
							  <div class="today-grids">
						
                        
          
                       <?php
					  
					  	$offer = null; 
					   $offer = new WP_Query(array(
					   
					   'post_type'=>'hot-offer',
					   'posts_per_page' => -1
					   
					   ));
					   
					   
					   if($offer->have_posts()){
						   while( $offer-> have_posts()){
							   
							   $offer->the_post();
							   
							   $hot = get_post_meta(get_the_ID(), '_halal-n-healthy_hot-quoto', true)
							    ?>
							
                         <div class="col-md-3 today-grid test1">
						<img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" alt="/">
						<div class="textbox">
								<h4><?php the_title(); ?> </h4>
								<p><?php echo $hot; ?></p>
							</div>
						</div>
                            
					<?php	}
						   
						}else{
							echo 'NO Post';	
						}
						
						
				wp_reset_postdata();		
					 ?>
					   
                       
                       
             		
					
					
                        
                        
                        
						
						
					
                        
					</div>
                        		
                        </div>
                    
				
				</div>
				<!--end-hot-offer-->
                
                
                	
                
                
       
                
                
                <!--practise-->
					<div class="menu-offer">
						<div class="container">
						<div class="menu-head">
						<h3><?php global  $halal_n_healthy; echo $halal_n_healthy['food_menu_title']; ?></h3>
							<p><?php global  $halal_n_healthy; echo $halal_n_healthy['food_menu_desc']; ?></p>
					</div>
					<div class="menu-grids">
						
								
                                
                                		 <?php
											foreach($halal_n_healthy['item_price'] as $singlevalue){
													
												echo '<div class="col-md-6 menu-grids">
										<div class="menu-text">
										      
											<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="'.$singlevalue['image'].'" alt=" " class="img-responsive">
												</div>
											     <div class="rep-w3l-text">
												   <h4>'.$singlevalue['title'].'</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
												
												<div class="clearfix"> </div>
											</div>
											<div class="menu-text-right">
												<h4>'.$singlevalue['description'].'</h4>
											</div>
											<div class="clearfix"> </div>
										</div></div>';
												
											}
											
										 ?>
                                         
						
					</div>
				</div>
			</div>
				<!--practise-->
                
                
                
                
           <div class="container">
           		
                 	<div class="order_head">
						<h3>Food Order Form</h3>
                        <p>Insert your order information</p>
							
					</div>
                
           		<div class="col-md-8 col-XS-12 col-SM-12 map-grids">
                	<?php echo do_shortcode("[vfb id=1]"); ?> 
                </div>
           	 	
                
                 <div class="col-md-4 col-sm-4">
                                	<div class="media-2">
                                    	<div class="media-left">	
                                        	<div class="contact-phone bg-1 text-center">
                                            	<span class="phone-in-talk fa fa-phone"></span>
                                             </div>
                                         </div>
                                        <div class="media-body">
                                            <h4 class="dark-blue regular">
                                                Phone Numbers
                                            </h4>
                                            <p class="light-blue regular alt-p">
                                                +440 875369208 - <span class="contacts-sp">	Phone Booking</span>
                                             </p>
                                         </div>
                               		</div>
                                    <div class="media-2">
                                    	<div class="media-left">
                                        	<div class="contact-email bg-14 text-center">
                                            	<span class="hour-icon fa fa-clock-o"></span>
                                             </div>
                                        </div>
                                        <div class="media-body">
                                        	<h4 class="dark-blue regular">
      											Opening Hours
    										</h4>
                                            <p class="light-blue regular alt-p">
       											Monday to Friday 09.00 - 24:00
    										</p>
                                            <p class="light-blue regular alt-p">
      											Friday and Sunday 08:00 - 03.00
                            
    										</p>
                                        </div>
                                     </div>
                                 </div>
           </div>
                
                
                
                
                
				
				
<?php get_footer(); ?>