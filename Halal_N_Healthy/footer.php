	<?php global  $halal_n_healthy; ?>	
			<div class=" specials-section container" style="padding: 4em 0;
  background:url('<?php global  $halal_n_healthy; echo $halal_n_healthy['footer_image']['url']; ?>');
  background-size:cover;
  background-position:center;
  border-radius:10px;">
            
				<div class="col-md-3 specials">
				<h3><?php global  $halal_n_healthy; echo $halal_n_healthy['title_one']; ?></h3>
				<p><?php global  $halal_n_healthy; echo $halal_n_healthy['detail_one']; ?></p>
				</div>
				<div class="col-md-3 specials1">
				<h3><?php global  $halal_n_healthy; echo $halal_n_healthy['title_two']; ?></h3>
				<ul>
                
                
                
                <?php
				foreach($halal_n_healthy['detail_two_links'] as $singlevalue){
						
					echo '<li><a href="'.$singlevalue['url'].'">'.$singlevalue['title'].'</a></li>';
					
				}
				
				?>
				
				</ul>
				</div>
			<div class="col-md-3 specials1">
			<h3><?php global  $halal_n_healthy; echo $halal_n_healthy['title_three']; ?></h3>
			<ul>
                
                
                
                <?php
				foreach($halal_n_healthy['detail_three_links'] as $singlevalue){
						
					echo '<li><a href="'.$singlevalue['url'].'">'.$singlevalue['title'].'</a></li>';
					
				}
				
				?>
				
				</ul>
			</div>
			<div class="col-md-3 specials1">
			<h3><?php global  $halal_n_healthy; echo $halal_n_healthy['title_four']; ?></h3>
			<ul>
                
                
                
                <?php
				foreach($halal_n_healthy['detail_four_links'] as $singlevalue){
						
					echo '<li><a href="'.$singlevalue['url'].'">'.$singlevalue['title'].'</a></li>';
					
				}
				
				?>
				
				</ul>
			</div>
			<div class="clearfix"></div>
			</div>
			
	</div>
	<div class="footer-section">
					<div class="container">
						<div class="footer-top">
						<?php global  $halal_n_healthy; echo $halal_n_healthy['copy_text']; ?>
					</div>
					
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"></span></a>


					</div>
					</div>

<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

 <!---- start-smoth-scrolling---->

 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
</script>


 <!---- FOR CALENDER---->
 <script>
			jQuery(document).ready(function($) {
			$( "#vfb-10" ).datepicker();
			});
</script>
            
 <script>
 
 		jQuery(document).ready(function($) {
			
			<!--$("#vfb-9-address").after("<i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>");-->
            $("#vfb-5").attr("placeholder", "Insert Your Full Name");
			 $("#vfb-6").attr("placeholder", "Insert Email Address");
			 $("#vfb-9-address").attr("placeholder", "Insert Street Address");
			 $("#vfb-9-city").attr("placeholder", "Insert City Name");
			 $("#vfb-8").attr("placeholder", "Insert Phone Number");
			  $("#vfb-10").attr("placeholder", "mm/dd/yyyy");
			 
				
		});
 </script>

<?php wp_footer(); ?>


</body>
</html>
	