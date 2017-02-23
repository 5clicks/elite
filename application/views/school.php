<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="breadcrumb-place ">
    <div class="row clearfix">
        <div class="logo">
			<img src="<?=base_url();?>assets/images/nuvision_logo.png" alt="School Name" /></a>
		</div><!-- end logo -->
        <div class="infoAbout">
        	<h1 class="page-title">About <?=$page;?></h1>
        </div>
    </div><!-- row -->
</div><!-- breadcrumb -->

<!-- SLIDER -->   
<div class="row clearfix fullBG">
	
    <div class="big-slider clearfix flexslider flex-slide-h">
		
        <ul class="slides">
			
            <li>
				<a href="#"><img src="<?=base_url();?>assets/images/nuvision.jpg" alt="" /></a>
					
					<p><img src="<?=base_url();?>assets/images/nuvision_logo.png" alt="Logo" /></p>
			</li>
               
		</ul>
	
    </div>

</div><!-- End SLIDER -->

<div class="page-content">
				
    <div class="row clearfix" >
					
                    <div class="grid_12">
						
                        <div class="clearfix" >
							
                            <ul class="tabs">
								<li><a  class="active"  href="#panel-tt1">Music Class</a></li>
								<li><a  href="#panel-tt2">Sport Class</a></li>
								<li><a  href="#panel-tt3">About</a></li>
							</ul>
                           
                            <ul class="tabs-content">
                            	<li  class="active"  id="panel-tt1"> 
                            		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est labo uis aute irure dolor in reprehenderit in voluptate velit sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum 
                            	</li>

								<li  id="panel-tt2"> 
									<div class="recent portfolio">
										<ul>
											<?php foreach ($media as $row): ?>
											<?php if($row['type']=='video'){?>
												<li>
													<div class="post-thumbnail">
				                            
													<a class="prettyphoto mini-thumb toptip portfolio-pic" href="https://www.youtube.com/watch?v=<?php echo $row['name'];?>&amp;width=800&amp;height=500" title="<?php echo $row['title'];?>" description="<?php echo $row['description'];?>" rel="prettyPhoto[rel-recplay]" >
														<img src="<?=base_url();?>uploads/thumbs/<?php echo $row['thumb'];?>" alt="<?php echo $row['title'];?>" width="150px" height="150px" />
													</a>

													</div>

												</li>
											<?php }elseif($row['type']=='image'){ ?>
												<li>
													<div class="post-thumbnail">
				                            
													<a class="prettyphoto mini-thumb toptip portfolio-pic" href="<?=base_url();?>uploads/<?php echo $row['name'];?>" title="<?php echo $row['title'];?>" description="<?php echo $row['description'];?>" rel="prettyPhoto[rel-recplay]" >
														<img src="<?=base_url();?>uploads/thumbs/<?php echo $row['thumb'];?>" alt="<?php echo $row['title'];?>" width="150px" height="150px" />
													</a>

													</div>

												</li>
											<?php } ?>
											<?php endforeach; ?> 
										</ul>
									</div>
								</li>

								<li  id="panel-tt3">
									
									<div class="row clearfix" >
					
					                    <div class="grid_12" >					
											<div class="clearfix title-center" >
					                        	<h2 class="col-title" >Our Members</h2>
					                        </div>
										</div> 
										
									
					                </div>

									<div class="row clearfix" >
					
				                    <div class="grid_4 alpha" >
										
				                        <div class="member" >
											
				                            <div class='member-img hover-fx zoom grayscale'>
												<img src='<?=base_url();?>assets/images/420x280.jpg' alt='Image Alt' />
											</div>
											<h4>John Doe</h4>
											
				                            <div class="member-role" >CEO</div>Lorem ipsum dolor sit ait, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.
											
				                            <div class="member-social" >
												
				                                <ul>
													<li><a href="#" target="_blank" title="Facebook" class="toptip"><i class="icon-facebook"></i></a></li>
													<li><a href="#" target="_blank" title="Twitter" class="toptip"><i class="icon-twitter"></i></a></li>
													<li><a href="#" target="_blank" title="LinkedIn" class="toptip"><i class="icon-linkedin"></i></a></li>
													<li><a href="#" target="_blank" title="Skype" class="toptip"><i class="icon-skype"></i></a></li>
													<li><a href="#" target="_blank" title="Instagram" class="toptip"><i class="icon-instagram"></i></a></li>
													<li><a href="#" title="Mail" class="toptip"><i class="icon-envelope-alt" ></i></a></li>
												</ul>
											
				                            </div>
										
				                        </div>
									
				                    </div> 
									
				                    <div class="grid_4" >
										
				                        <div class="member" >
											
				                            <div class='member-img hover-fx zoom grayscale'>
												<img src='<?=base_url();?>assets/images/420x280.jpg' alt='Image Alt' />
											</div>
											<h4>Jane Someone</h4>
											
				                            <div class="member-role" >Web Developer</div>Lorem ipsum dolor sit ait, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.
											
				                            <div class="member-social" >
												
				                                <ul>
													<li><a href="#" target="_blank" title="Facebook" class="toptip"><i class="icon-facebook"></i></a></li>
													<li><a href="#" target="_blank" title="Twitter" class="toptip"><i class="icon-twitter"></i></a></li>
													<li><a href="" target="_blank" title="Dribbble" class="toptip"><i class="icon-dribbble"></i></a></li>
													<li><a href="#" target="_blank" title="Flickr" class="toptip"><i class="icon-flickr"></i></a></li>
													<li><a href="#" target="_blank" title="Instagram" class="toptip"><i class="icon-instagram"></i></a></li>
													<li><a href="#" title="Mail" class="toptip"><i class="icon-envelope-alt" ></i></a></li>
												</ul>
											
				                            </div>
										
				                        </div>
									
				                    </div> 
									
				                    <div class="grid_4 omega" >
										<div class="member" >
				                        	<div class='member-img hover-fx zoom grayscale'>
												<img src='<?=base_url();?>assets/images/420x280.jpg' alt='Image Alt' />
											</div>
											<h4>Mark Brown</h4>
											
				                            <div class="member-role" >Sales Manager</div>Lorem ipsum dolor sit ait, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.
											
				                            <div class="member-social" >
												
				                                <ul>
													<li><a href="#" target="_blank" title="Facebook" class="toptip"><i class="icon-facebook"></i></a></li>
													<li><a href="#" target="_blank" title="Twitter" class="toptip"><i class="icon-twitter"></i></a></li>
													<li><a href="#" target="_blank" title="LinkedIn" class="toptip"><i class="icon-linkedin"></i></a></li>
													<li><a href="#" target="_blank" title="Google+" class="toptip"><i class="icon-google-plus"></i></a></li>
													<li><a href="#" target="_blank" title="Skype" class="toptip"><i class="icon-skype"></i></a></li>
													<li><a href="#" title="Mail" class="toptip"><i class="icon-envelope-alt" ></i></a></li>
												</ul>
											
				                            </div>
										
				                        </div>
									
				                    </div><div class="gap clearfix custom-h50" ></div>  
								
				                </div>
								</li>
							</ul>
						</div>							
					
                    </div> 
					
                </div>
	
	
</div><!-- end page-content -->




</div><!-- end layout -->
	
    </div><!-- end frame -->

	<div id="toTop"><i class="icon-angle-up"></i></div><!-- Back to top -->
				
				
	<!-- Javascripts -->
	<script type='text/javascript' src='<?=base_url();?>assets/js/jquery/jquery.js?ver=1.11.0'></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/themetor.js?ver=1.0'></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/jquery.nicescroll.min.js?ver=3.5.1'></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/jquery.prettyPhoto.js?ver=3.1.6'></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/countdown.js?ver=3.9.6'></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/custom.js?ver=1.0'></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/owl.carousel.min.js?ver=2.0.0'></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/tt_carousel.js?ver=4.3.2'></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/jquery.li-scroller.1.0.js?ver=4.0'></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/tt_composer_front.js?ver=4.3.2'></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/waypoints.min.js?ver=4.3.2'></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/jquery.flexslider-min.js?ver=2.1'></script>

	<script language="javascript">
		jQuery(document).ready(function($) {
			try {
				$('.flexslider').flexslider({
					animation: "slide",
					direction: "horizontal",
					slideshowSpeed: 4000,
					animationSpeed: 700,
					prevText: "",
					nextText: "",
					controlNav: false,
					keyboardNav: true,
					start: function(slider) {
						$('.flex-active-slide').find('h3').delay(100).addClass('effect').fadeIn(400);
						$('.flex-active-slide').find('p').delay(100).addClass('effectt').fadeIn(400);
					},
					after: function(slider) {
						$('.flex-active-slide').find('h3').delay(100).addClass('effect').fadeIn(400).removeClass('Out');
						$('.flex-active-slide').find('p').delay(100).addClass('effectt').fadeIn(400).removeClass('Out');
					}
				});
			} catch(e){}
		});
        </script>

	<script language="javascript">
	
		jQuery(document).ready(function($) {
			
			// Clients Carousel /////////////////////////////
			try {
				
				$("#cc_tt1").owlCarousel({
						items:4,
						loop: true,
						margin:12,
						nav:true,
						navSpeed:1000,
						navText:['<i class="icon-angle-right"></i>','<i class="icon-angle-left"></i>'],
						dots:false,
						autoplay:true,
						autoplayTimeout:4000,
						autoplaySpeed:1000,
						autoplayHoverPause:true,
						responsive : {0 : {items : 1,nav : false}, 480 : {items : 2}, 768 : {items : 4}}
						
					});
		
			} catch(e){}

		});	
	</script>
	<script language="javascript">
	
		jQuery(document).ready(function($) {
			
			// Clients Carousel /////////////////////////////
			try {
				
				$("#cc_tt2").owlCarousel({
						items:5,
						loop: true,
						margin:12,
						nav:true,
						navSpeed:1000,
						navText:['<i class="icon-angle-right"></i>','<i class="icon-angle-left"></i>'],
						dots:false,
						autoplay:true,
						autoplayTimeout:4000,
						autoplaySpeed:1000,
						autoplayHoverPause:true,
						responsive : {0 : {items : 1,nav : false}, 480 : {items : 2}, 768 : {items : 5}}
						
					});
		
			} catch(e){}

		});	
	</script>
	<script language="javascript">
	
		jQuery(document).ready(function($) {
			
			// Clients Carousel /////////////////////////////
			try {
				
				$("#cc_tt3").owlCarousel({
						items:6,
						loop: true,
						margin:12,
						nav:true,
						navSpeed:1000,
						navText:['<i class="icon-angle-right"></i>','<i class="icon-angle-left"></i>'],
						dots:false,
						autoplay:true,
						autoplayTimeout:4000,
						autoplaySpeed:1000,
						autoplayHoverPause:true,
						responsive : {0 : {items : 1,nav : false}, 480 : {items : 2}, 768 : {items : 6}}
						
					});
		
			} catch(e){}

		});	
	</script>
	<script language="javascript">
	
		jQuery(document).ready(function($) {
			
			// Clients Carousel /////////////////////////////
			try {
				
				$("#cc_tt4").owlCarousel({
						items:3,
						loop: true,
						margin:12,
						nav:true,
						navSpeed:1000,
						navText:['<i class="icon-angle-right"></i>','<i class="icon-angle-left"></i>'],
						dots:false,
						autoplay:true,
						autoplayTimeout:4000,
						autoplaySpeed:1000,
						autoplayHoverPause:true,
						responsive : {0 : {items : 1,nav : false}, 480 : {items : 2}, 768 : {items : 3}}
						
					});
		
			} catch(e){}

		});	
	</script>
	<script language="javascript">
	
		jQuery(document).ready(function($) {
			
			// Clients Carousel /////////////////////////////
			try {
				
				$("#cc_tt5").owlCarousel({
						items:2,
						loop: true,
						margin:12,
						nav:true,
						navSpeed:1000,
						navText:['<i class="icon-angle-right"></i>','<i class="icon-angle-left"></i>'],
						dots:false,
						autoplay:true,
						autoplayTimeout:4000,
						autoplaySpeed:1000,
						autoplayHoverPause:true,
						responsive : {0 : {items : 1,nav : false}, 480 : {items : 2}, 768 : {items : 2}}
						
					});
		
			} catch(e){}

		});	
	</script>

	<script language="javascript">
	
		jQuery(document).ready(function($) {	
			// News Ticker /////////////////////////////
			try {
				jQuery("ul#nt_tt1").liScroll({travelocity: 0.08});
			} catch(e){}
		});	
	</script>
	<script language="javascript">
	
		jQuery(document).ready(function($) {	
			// News Ticker /////////////////////////////
			try {
				jQuery("ul#nt_tt2").liScroll({travelocity: 0.08});
			} catch(e){}
		});	
	</script>
	<script language="javascript">
	
		jQuery(document).ready(function($) {	
			// News Ticker /////////////////////////////
			try {
				jQuery("ul#nt_tt3").liScroll({travelocity: 0.08});
			} catch(e){}
		});	
	</script>

</body>
</html>