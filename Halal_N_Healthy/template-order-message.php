 <?php 
 /*
 Template Name: Template Order message
 */
 
 
 ?>
 
 <?php get_header(); ?> 
 

			<div class="content">
				<div class="aboutus">
					<div class="container">
                    	<div class="col-md-4 col-xs-12">
                        
                            
                            <?php
                            if(have_posts()){
                            	the_post();
								
								 the_post_thumbnail();
									
                            }
                            else
                            {
                            	echo "No post";
                            }
							
							?>
                        	
                        </div>
                        
                        
                        <div class="col-md-8 col-xs-12">
                        	<h3>You are successfully ordered your choicable food.just come and take our service.</h3>
                        	<p>Thank you for ordering..</p>
                        </div>
						
					</div>
				</div>
		
			</div>
    
    <?php get_footer();?>