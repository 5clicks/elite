<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en-US"><![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en-US"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="en-US"><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html lang="en-US"><!--<![endif]-->
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">	
    <!-- Basic Page Needs -->
	<meta charset="UTF-8">
	
	<title>Elite | <?=$page;?></title>
	
	<meta name="description" content="Elite School YearBook" /> 
        
    	
    <meta name="robots" content="index, follow" />

	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script  type="text/javascript" src="js/excanvas.min.js"></script>
	<![endif]-->
    
    

    <!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        
    <!-- Favicons -->
    <link href="<?=base_url();?>assets/images/favicon.ico" rel="shortcut icon" />         
        
    <!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Marcellus:400,400italic,700,700italic%7CMarcellus:400,400italic,700,700italic%7CMarcellus:400,400italic,700,700italic%7CMarcellus:400,400italic,700,700italic%7CMarcellus:400,400italic,700,700italic%7CMarcellus:400,400italic,700,700italic%7C' rel='stylesheet' type='text/css'>   
  
	<!-- Stylesheets -->
    <link rel='stylesheet' id='stylesheet-css'  href='<?=base_url();?>assets/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='icons-css'  href='<?=base_url();?>assets/css/icons.css' type='text/css' media='all' />
	<link rel='stylesheet' id='responsive-css'  href='<?=base_url();?>assets/css/tt.css' type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css'  href='<?=base_url();?>assets/css/animate.css' type='text/css' media='all' />
    <link rel='stylesheet' id='revslider-css'  href='<?=base_url();?>assets/css/settings.css' type='text/css' media='all' />
	<link rel='stylesheet' id='tt_carousel_css-css'  href='<?=base_url();?>assets/css/tt_carousel.css?ver=4.3.2' type='text/css' media='all' />
	<link rel='stylesheet' id='prettyphoto-css'  href='<?=base_url();?>assets/css/prettyPhoto.css?ver=4.3.2' type='text/css' media='screen' />
    <link rel='stylesheet' id='shortcodes-css'  href='<?=base_url();?>assets/css/shortcodes.css?ver=4.3.2' type='text/css' media='all' />
	
	<!-- Responsive CSS -->
    <link rel='stylesheet' id='responsive-css'  href='<?=base_url();?>assets/css/responsive.css' type='text/css' media='all' />
	<!-- Custom CSS -->
    <link rel='stylesheet' id='custom-css'  href='<?=base_url();?>assets/css/custom-styles.css' type='text/css' media='all' />

    <!--<link href="<?=base_url();?>assets/search/css/style.css" rel="stylesheet" type="text/css">--><!-- CSS File -->

	<!-- These are the required JS Files for this Tutorial -->
	<script type="text/javascript" src="<?=base_url();?>assets/search/js/jquery_1.5.2.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/search/js/post_watermarkinput.js"></script>

	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/music/plugin/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/music/demo/css/demo.css">
    <script type="text/javascript" src="<?=base_url();?>assets/music/demo/js/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/music/plugin/jquery-jplayer/jquery.jplayer.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/music/plugin/ttw-music-player-min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/music/demo/js/myplaylist.js"></script>

    

	<script type="text/javascript">

	var myVideo =  iframe.getElementById('myCoverVideo'); 
	myVideo.mute();

	</script>




    
</head>

    
<body class="home page tt_responsive">
	
	<div id="home" >
	
		<div id="layout" class="full">    
			
			<header id="header" class="header_v8">
            
				<div class="headdown my_sticky">
					
					<div class="row clearfix">
						
						<!-- Menu -->
						<nav class="main">
							<ul id="menu-main" class="sf-menu">
								<li class="menu-item <?php if($page==1){echo 'current-menu-item selectedLava';}?>"> <a href="<?=base_url();?>">Home</a> </li>
								<li class="menu-item <?php if($page==2){echo 'current-menu-item selectedLava';}?>"> <a href="<?=base_url();?>publik/about">About</a> </li>
								<li class="menu-item <?php if($page==3){echo 'current-menu-item selectedLava';}?>"> <a href="<?=base_url();?>publik/directory">Directory</a> </li>
								<li class="menu-item <?php if($page==4){echo 'current-menu-item selectedLava';}?>"> <a href="<?=base_url();?>publik/scholarship">Scholarships</a> </li>
								<li class="menu-item <?php if($page==5){echo 'current-menu-item selectedLava';}?>"> <a href="<?=base_url();?>publik/pricing">Pricing</a> </li>
								<li class="menu-item <?php if($page==6){echo 'current-menu-item selectedLava';}?>"> <a href="<?=base_url();?>publik/contact">Contact Us</a> </li>
							</ul>
							
						</nav><!-- /Menu -->
								
                        <div class="social social-head without_border circular">			
							
							<a href="https://twitter.com/5clicksltd" target="_blank" class="bottomtip"  title="Twitter">
								<i class="icon-twitter"></i>
							</a >	
							<a href="https://facebook.com/5clicksltd" target="_blank" class="bottomtip"  title="Facebook">
								<i class="icon-facebook"></i>
							</a >	
							<a href="https://www.youtube.com/channel/UCmuM3QPM7QMmXqeL8hlN_hw" target="_blank" class="bottomtip"  title="Youtube">
								<i class="icon-youtube"></i>
							</a >	
							<a href="https://instagram.com/5clicksltd"  target="_blank"   class="bottomtip"  title="Instagram">
								<i class="icon-instagram"></i>
							</a >	
							<a href="mailto:5cliksltd@gmail.com"  target="_blank"   class="bottomtip"  title="Email">
								<i class="icon-envelope-alt"></i>
							</a >
						
						</div><!-- end social -->        

					</div><!-- row -->
				
				</div><!-- headdown -->
            
            
				<div class="head">
					
					<div class="row clearfix">
						
						<div class="logo">
							<a href="<?=base_url();?>"><img src="<?=base_url();?>assets/images/logo/logo_elite.png" alt="Elite Yearbook" /></a>
						</div><!-- end logo -->
					
						<div id="searchbox">
                        	
							<!-- Search Box Starts Here -->
							<form action="<?=base_url();?>publik/searchresults" method="POST">
								<input type="text" name="mysearch" class="searchbox" placeholder="Search here..." />
								<input type="submit" value="Search" class="searchbutton" />
							</form>
							<!-- Search Box Ends Here -->                   							
							
						</div><!-- end info -->

					</div><!-- row -->
			
				</div><!-- head -->
			
			</header><!-- end header -->