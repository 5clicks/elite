<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="breadcrumb-place ">
    <div class="row clearfix">
        <h1 class="page-title"><?=$page;?> Elite School YearBook</h1>
    </div><!-- row -->
</div><!-- breadcrumb -->

<div class="page-content">
   <div class="row clearfix">
			<p>This is an example page. It&#8217;s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>
        <blockquote><p>Hi there! I&#8217;m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin&#8217; caught in the rain.)</p></blockquote>
        <p>&#8230;or something like this:</p>
        <blockquote><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>
        <p>As a newHTML5 user, you should go to <a href="#">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>
   </div><!-- end row -->  

   <br>

   <div class="row clearfix">
                    
        <div class="grid_12">
           
            <div class="action mbf style1 light clearfix">
                
                <div class="inner">
                    <i class="action-icon icon-heart custom-color-icon16" ></i>
                    <div class="flr">
                        <a class='tbutton medium tbutton1 color2' href='<?=base_url();?>publik/pricing' target='_blank' ><span><i class="icon-heart"  ></i> I Love It</span></a>
                    </div>
                    <div class="matn">
                        <h4>Elite is an online digital &amp; clean yearbook</h4>
                        <p>Phasellus vehicula justo eget diam posuere sollicitudin eu tincidunt nulla.</p>
                    </div>
                </div>
            
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