<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="breadcrumb-place ">
    <div class="row clearfix">
        <h1 class="page-title"><?=$page;?></h1>
    </div><!-- row -->
</div><!-- breadcrumb -->

<div class="page-content">
			   
   <div class="row clearfix" >
		
        <div class="grid_6" >
			
            <div class="clearfix title-left">
                <h2 class="col-title" ><i class="title-icon icon-edit custom-icon-color25" ></i>Contact Form</h2>
                <span class="liner"></span>
            </div>
			
            <div class="ttcf7" id="ttcf7-f5-p261-o2" lang="en-US" dir="ltr">
				
                <div class="screen-reader-response" ></div>
				
                <form name="" action="#" method="POST" class="ttcf7-form" novalidate>								
					<p>Your Name (required)<br />
						<span class="ttcf7-form-control-wrap your-name"><input type="text" name="your-name" id="your-name" value="" size="40" class="ttcf7-form-control ttcf7-text ttcf7-validates-as-required" aria-required="true" aria-invalid="false" required="required" /></span></p>
					<p>Your Email (required)<br />
						<span class="ttcf7-form-control-wrap your-email"><input type="email" name="your-email" id="your-email" value="" size="40" class="ttcf7-form-control ttcf7-text ttcf7-email" required="required"/></span></p>
					<p>Subject<br />
						<span class="ttcf7-form-control-wrap your-subject"><input type="text" name="your-subject" id="your-subject" value="" size="40" class="ttcf7-form-control ttcf7-text" aria-invalid="false" /></span></p>
					<p>Your Message<br />
						<span class="ttcf7-form-control-wrap your-message"><textarea name="your-message" id="your-message" cols="40" rows="10" class="ttcf7-form-control ttcf7-textarea" aria-invalid="false" required="required"></textarea></span> </p>
					<p><input type="submit" value="Send" class="ttcf7-form-control ttcf7-submit" /></p>
					
				</form>
			
            </div>
		
        </div> 
		
        <div class="grid_6">
						
            <div class="clearfix title-left"><h2 class="col-title" >
				<i class="title-icon icon-globe custom-icon-color25" ></i>Our Address</h2><span class="liner"></span>
			</div>
			
            <p class="tal"><strong>65 KK 21 Ave<br>Kicukiro<br>Kigali &#8211; Rwanda</strong></p>
			<i class="icon-phone icon-xs custom-icon-color26" ></i><strong>Tel 1</strong>: +250 783 180400<br>
			<i class="icon-phone icon-xs custom-icon-color26" ></i><strong>Tel 2</strong>: +250 784 589841<br>
			
            <div class="clearfix" ></div>
			<i class="icon-envelope-alt icon-xs custom-icon-color26" ></i><strong>Email 1:</strong> info@5clicksltd.com<br>
			<i class="icon-envelope-alt icon-xs custom-icon-color26" ></i><strong>Email 2:</strong> 5cliksltd@gmail.com
			
            <div class="clearfix" ></div>
			
            <div class="gap clearfix custom-h100"> </div>

		</div>  
	
    </div><!-- end row -->    

</div><!-- end page-content -->


</div><!-- end layout -->
	
    </div><!-- end frame -->

	<div id="toTop"><i class="icon-angle-up"></i></div><!-- Back to top -->

	<!-- Javascripts -->
	<script type='text/javascript' src='<?=base_url();?>assets/js/jquery/jquery.js?ver=1.11.0'></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/themetor.js?ver=1.0'></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/tt_composer_front.js?ver=4.3.2'></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/jquery.nicescroll.min.js?ver=3.5.1'></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/jquery.prettyPhoto.js?ver=3.1.6'></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/countdown.js?ver=3.9.6'></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/custom.js?ver=1.0'></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/owl.carousel.min.js?ver=2.0.0'></script>
	<script type='text/javascript' src='<?=base_url();?>assets/js/tt_carousel.js?ver=4.3.2'></script>
	
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

</body>
</html>