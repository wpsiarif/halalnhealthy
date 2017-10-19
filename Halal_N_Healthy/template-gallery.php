 <?php 
 /*
 Template Name:  Template gallery
 */
 
get_header(); ?> 
 

		
		
            
            	<div class="content">
                      <div class="events-section">
                            <div class="container">
                                <h3><?php the_title(); ?></h3>
                            </div>
                           
                               
                    </div>
                </div>
   
			<!--gallery-->
	<div class="gallery">
		<div class="container">
			
			<!--light-box-js -->
			
				<!--light-box-files -->
				<script type="text/javascript" charset="utf-8">
				$(function() {
					$('.moments-bottom a').Chocolat();
				});
				</script> 
			<!--//end-gallery js-->
			<div class="gallery-info">
            
            <?php
						$ebit_post = null;
						$ebit_post	= new WP_Query(array(
							'post_type' => 'post',
							'posts_per_page' => -1,
							
						
						
						));
						
						
						if($ebit_post->have_posts()) {
							while( $ebit_post->have_posts() ){
								
								
								 $ebit_post->the_post();
								 
								
								
								$price = get_post_meta(get_the_ID(), '_halal-n-healthy_price', true)
								  ?>
            
				<div class="col-md-4 col-xs-12 col-sm-12 galry-grids moments-bottom">
					<a class="b-link-stripe b-animate-go" href="<?php the_post_thumbnail_url(); ?>">
						<img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" alt="">
                        <div class="text text-center">
                            <h4><?php echo $price; ?></h4>
                         </div>
                        
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>./images/e.png" alt=""/>
							</span>					
						</div>
					</a>				
				</div>
               
				<?php }
							
							
						} else {
							
							
							echo 'No Post';	
						}
						
						
						wp_reset_postdata();
						$ebit_post = null;
						
						
					
					?>
                    
				
			</div>
		</div>
	</div>
	<!--//gallery-->



<?php get_footer();?>
	