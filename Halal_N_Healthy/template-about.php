 <?php 
 /*
 Template Name:  Template about
 */
 
 
 ?>
 
 <?php get_header(); ?> 
 

			<div class="content">
				<div class="aboutus">
					<div class="container">
						<h3><?php the_title(); ?></h3>
							<div class="about-grids">
								<?php if(have_posts()){
									the_post();
									
									the_content();
									
									
									} ?>
							</div>
					</div>
				</div>
		
			</div>
    
    <?php get_footer();?>