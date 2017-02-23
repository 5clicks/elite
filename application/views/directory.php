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
		
        <div class="grid_3 bigletter" >
        	A
        </div>
        <div class="grid_3 bigletter">
        	B
        </div>
        <div class="grid_3 bigletter" >
        	C
        </div>
        <div class="grid_3 bigletter">
        	D
        </div>

        <div style="padding-top:150px;">

        <div class="grid_3 bigletter" >
        	E
        </div>
        <div class="grid_3 bigletter">
        	F
        </div>
        <div class="grid_3 bigletter" >
        	J
        </div>
        <div class="grid_3 bigletter">
        	H
        </div>

        <div style="padding-top:150px;">

        <div class="grid_3 bigletter" >
        	I
        </div>
        <div class="grid_3 bigletter">
        	J
        </div>
        <div class="grid_3 bigletter" >
        	K
        </div>
        <div class="grid_3 bigletter">
        	L
        </div>

        <div style="padding-top:150px;">

        <div class="grid_3 bigletter" >
        	M
        </div>
        <div class="grid_3 bigletter">
        	N
        </div>
        <div class="grid_3 bigletter" >
        	O
        </div>
        <div class="grid_3 bigletter">
        	P
        </div>

        <div style="padding-top:150px;">

        <div class="grid_3 bigletter" >
        	Q
        </div>
        <div class="grid_3 bigletter">
        	S
        </div>
        <div class="grid_3 bigletter" >
        	T
        </div>
        <div class="grid_3 bigletter">
        	U
        </div>

        <div style="padding-top:150px;">

        <div class="grid_3 bigletter" >
        	V
        </div>
        <div class="grid_3 bigletter">
        	W
        </div>
        <div class="grid_3 bigletter" >
        	X
        </div>
        <div class="grid_3 bigletter">
        	Y
        </div>

        <div style="padding-top:150px;padding-bottom:150px;">

        <div class="grid_3 bigletter" >
        	Z
        </div>

   </div>

</div>


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