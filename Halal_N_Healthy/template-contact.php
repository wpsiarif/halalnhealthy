 <?php 
 /*
 Template Name: Contact Template
 */
 
 
 ?>
 
 <?php get_header(); ?> 
 

			<div class="content">
				<div class="contact">
			<div class="container">
				<h3>contact us</h3>
				<div class="google-map">
					<iframe src="<?php echo $halal_n_healthy['map_url']; ?>"></iframe>
				</div>
			<div class="contact-grids">
				<div class="col-md-6 contact-left">
						<span><?php echo $halal_n_healthy['contact_short_desc']; ?></span>
					<address>
						<?php echo $halal_n_healthy['contact_address']; ?>
					</address>
					</div>
						<div class="col-md-6 contact-right">
							<form>
								<h5>name</h5>
									<input type="text">
										<h5>emailaddress</h5>
											<input type="text">
												<h5>message</h5>
												   <textarea></textarea>
													 <input type="submit" value="send">
													 </form>
												</div>
										 <div class="clearfix"></div>
									</div>
							</div>
					</div>
	
    
    <?php get_footer();?>