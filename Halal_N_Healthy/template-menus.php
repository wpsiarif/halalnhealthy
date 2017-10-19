 <?php 
 /*
 Template Name:  Template menus
 */
 
get_header(); ?> 
 


<div class="content">
      <div class="events-section">
			<div class="container">
            	<h3><?php the_title(); ?></h3>
    		</div>
           
               
    </div>
</div>
   
        <section id="portfolio">
            
            <div class="container">
            
            	<ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Foods</a></li>
             
                 <?php
					
						$cats = get_categories(array(
						
						'hide_empty' => false
						
						
						
						));
						
						
						
						foreach($cats as $single_term){
							
						echo ' <li><a class="btn btn-default" href="#" data-filter=".'.  $single_term->slug    .'">'. $single_term->name .'</a></li>';
						
						}
					?>
              </ul><!--/#portfolio-filter-->
         </div>
         
         
            <div class="container">
         	<div class="portfolio-items">
                
                	<?php
						$ebit_post = null;
						$ebit_post	= new WP_Query(array(
							'post_type' => 'post',
							'posts_per_page' => -1,
							
						
						
						));
						
						
						if($ebit_post->have_posts()) {
							while( $ebit_post->have_posts() ){
								
								
								 $ebit_post->the_post();
								 
								$post_terms = get_the_terms($post->ID, 'category' );
								
								$price = get_post_meta(get_the_ID(), '_halal-n-healthy_price', true)
								  ?>
                                 
                                                 
                                    <div class="portfolio-item <?php   foreach($post_terms as $post_term){ echo $post_term->slug . ' ';} ?> col-xs-12 col-sm-4 col-md-3">
                                        <div class="recent-work-wrap"  style="text-align:center; margin:5px; padding:5px; background-color:rgba(255,255,255,0.54);">
                                        
                                         <a href="<?php the_permalink(); ?>"> 
										 
										 	<?php the_post_thumbnail('food'); ?>
                                         
                                            <div class="text">
                                               <h4><?php echo $price; ?></h4>
                                            </div>
                                         
                                         </a>
                                          
                                          
                                            <div class="overlay">
                                                <div class="recent-work-inner">
                                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                                                    <?php the_excerpt(); ?>
                                                    
                                                </div> 
                                            </div>
                                            
                                        </div>
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
         
         
       </section>  
         
         
         
  
		
	
    
<?php get_footer();?>