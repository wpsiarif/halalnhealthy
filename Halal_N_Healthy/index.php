<?php get_header(); ?>
		
			<div class="content">
				<!--hot-offer-->
					<div class="today-offer">
                    
                    	<div class="container">
                        		
                             <div class="today-head">
						<h3> today hot offer BY REDUX FRAMEWORK</h3>
							<p>Autem vel eum iriure dolor in hendrerit in volestie consequat vel illum BY REDUX FRAMEWOR</p>
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
                
                
                	
                
                
                
                	<div class="order-grids">
				<div class="container">
				<div class="order-head">
						<h3>What makes us Different</h3>
							<p>Autem vel eum iriure dolor in hendrerit in volestie consequat vel illum</p>
					</div>
                    
                    
                    
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						
                            	<?php
					
								$cats = get_categories(array(
								
									'hide_empty' => false
								
								));
								
								
								
								foreach($cats as $single_term){
									
								echo '<div class="panel-heading" role="tab" id="'.$single_term->term_id.'">
							<h4 class="panel-title" style="background-color:#F0F0F0;"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#'.$single_term->slug  .'" aria-expanded="false" aria-controls="'.$single_term->slug  .'">
									'. $single_term->name .'
								</a></h4></div>';
								
								}
								?>
                            
                            
                            
								
						
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
								
								?>
                            
                           <div id="<?php foreach($post_terms as $post_term){echo $post_term->slug;} ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body" style="background-color:#F2E8C5"> 
                            
								<div class="col-md-3 order-grid">
                                <h1><?php the_title(); ?></h1>
								<img src="<?php the_post_thumbnail_url('differentfoodtab'); ?>" class="img-responsive" alt="NO Image">
								</div>
							
								<div class="clerafix"></div>
                                
                              </div>
						</div>
  
                                
                                <?php }
							
									
								} else {
									
									
									echo "No Post";	
								}
								
								
								wp_reset_postdata();
								$ebit_post = null;
								
								
							
								?>
												</div>
                    
				</div>
			</div>
			</div>
                
				<!--menu-->
					<div class="menu-offer">
						<div class="container">
						<div class="menu-head">
						<h3>our menu</h3>
							<p>Autem vel eum iriure dolor in hendrerit in volestie consequat vel illum</p>
					</div>
					<div class="menu-grids">
						<div class="col-md-4 menu-grid">
								<div class="menu-text">
							<?php global $halal_n_healthy;
 
echo 'First Text Entry: ' . $$halal_n_healthy['menu_title'][0];   ?>

									
									<div class="menu-text-midle">
										<span class="line"> </span>
									</div>
                                    
                           

									<div class="clearfix"> </div>
								</div>	
								
						</div>
					
						<div class="col-md-4 menu-grid cooke">
						<img src="<?php echo get_template_directory_uri(); ?>/images/p5.jpg" class="img-responsive" alt="/">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
				<!--end-menu-->
			
<?php get_footer(); ?>