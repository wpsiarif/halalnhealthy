 <?php 
 /*
 Template Name:  Template event
 */
 
 
 ?>
 
 <?php get_header(); ?> 
 

		<div class="content">
        
        
			<div class="events-section">
						<div class="container">
							<h3><?php the_title(); ?></h3>
						<div class="events-grids">
						<div class="events1">
                        
                       <?php
					  
					  	$event = null; 
					   $event = new WP_Query(array(
					   
					   'post_type'=>'event',
					   'posts_per_page' => -1
					   
					   ));
					   
					   
					   if($event->have_posts()){
						   while( $event-> have_posts()){
							   
							   $event->the_post();
							   
							   
							    ?>
                                
                                
						<div class="col-md-4 col-xs-12 col-sm-12  event-grid">
						<a href="#" class="mask">
				     <img src="<?php the_post_thumbnail_url('eventpic'); ?>" class="img-responsive zoom-img" alt=""></a>
						<h5><?php the_date(); ?></h5>
						 <h4><?php the_title(); ?></h4>
					<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="button"> more info</a>
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
					</div>
			
            
       </div>

	
    
    <?php get_footer();?>