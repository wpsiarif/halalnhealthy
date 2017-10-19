 <?php get_header(); ?> 
 
 
 <div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="<?php bloginfo(home);?>">Home</a></li>
				<li><?php the_title();  ?></li>			
			</div>		
		</div>	
</div>
    
 <section id="singlepost"> 
    <div class="container">
                <div class="center animated fadeInDown">
                   <h1><?php the_title();?></h1>
                </div>
    
               
    </div>
    
    <div class="container">
    	<div class="row">
        
        <?php while(have_posts()) : the_post(); ?>
        	<div class="col-md-6 left">
            	<div class="image">
                	<?php the_post_thumbnail('singlepage');?>
                </div>
                
                <div class="basic">
                	<dl>
                    	 <dt>Preperation time</dt>
                         <dd><?php echo get_post_meta(get_the_ID(), '_halal-n-healthy_pretime', true) ?></dd>
                         
                         <dt>Cooking time </dt>
                         <dd content="PT1M" itemprop="cookTime"><?php echo get_post_meta(get_the_ID(), '_halal-n-healthy_cooktime', true) ?></dd>
                         
                         <dt> Serves</dt>
                         <dd><?php echo get_post_meta(get_the_ID(), '_halal-n-healthy_servespeople', true) ?></dd>
                    </dl>
                    
                    <div class="favorite">
                    	<a class="disabled" href="">
                        	<i class="fa fa-heart" aria-hidden="true"></i><span>Add to favorites</span>
                         </a>
                    </div>
                    
                    
                    <div class="print">
                    	<a class="" href="#" onclick="window.print();">
                        	<i class="fa fa-print" aria-hidden="true"></i><span>Print recipe</span>
                         </a>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-md-3 middle">
            	<div class="description">
                	 <?php the_content(); ?>
                </div>
            </div>
            
            <div class="col-md-3 right">
            	<div class="others">
                	<p>Some Related Food</p>
                	<p>Comment option</p>
                </div>
            	
            </div>
         <?php endwhile; ?>
        </div>
    </div>




      
</section>  


 

 <?php get_footer(); ?>