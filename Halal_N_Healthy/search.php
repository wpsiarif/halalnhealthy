<?php get_header(); ?> 


<section id="singlepost">

	  <div class="container">
                <div class="center animated fadeInDown" style="margin-top:20px; margin-bottom:20px; padding:0px;">
                   <h3 class="page-title"><?php printf( 'Search Results for: %s', get_search_query() ); ?></h3>
                </div>
    
               
    </div>





 <div class="container">
    	<div class="row">



<?php if(have_posts()) {
	
	while(have_posts()){
		
		the_post(); ?>
		
			<div class="col-md-6 col-xs-12 left">
            	<div class="image">
                	<?php the_post_thumbnail('singlepage');?>
                </div>
                <div class="title">
                	<h3><?php the_title(); ?></h3>
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
        
        
        	<div class="col-md-3 col-xs-6  middle">
            	<div class="description">
                	 <?php the_excerpt(); ?>
                </div>
            </div>
            
            
            
            <div class="col-md-3 col-xs-6  right">
            	<div class="others">
                	<p>Some Related Food</p>
                	<p>Comment option</p>
                </div>
            	
            </div>





		
	<?php	}

	
}else{  ?>
	
    
    <div class="Noresult" style="color:red; padding-left:20px;
    height:250px; width:4oopx; padding-top:100px; font-size:24px;">
    	<?php echo '<h3>No result found</h3>'; ?>
    </div>
    
	
	
<?php }
?>

		</div>
	</div>
</section>


<?php get_footer();?>