<?php
require_once('customFunctions.php'); 
require_once('mobile.php');
$detect = new Mobile_Detect;

?>

<!doctype html>
<html lang="en">
<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- hidesearch start -->


<title>Social Solutions Global | <?=$title;?></title>


<meta name="description" content="<?=$description;?>">

<?php if($detect->isTablet()) { ?>
<meta name="viewport" content="width=960, user-scalable=yes">
<?php } else { ?>
<meta name="viewport" content="width=750, user-scalable=no">
<?php } ?>

<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

<meta property="og:title" content="Social Solutions Global | <?=$ogtitle;?>" />
<meta property="og:type" content="<?=$ogtype;?>" />
<meta property="og:description" content="<?=$ogdescription;?>" />
<meta property="og:url" content="<?=$ogurl;?>" />
<meta property="og:image" content="<?=$ogimage;?>" />
<meta property="og:site_name" content="Social Solutions Global | <?=$ogsitename;?>" />


<script type="text/javascript" src="<?=$url;?>/js/modernizr.js"></script>

<script src="https://use.typekit.net/dvp5bpg.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<link rel="shortcut icon" type="image/x-icon" href="<?=$url;?>/images/favicon.ico" />
<link rel="stylesheet" media="all" href="<?=$url;?>/css/ui.css" />


<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?=$url;?>/js/jquery.slicknav.js"></script>

<script type="text/javascript" src="<?=$url;?>/js/jquery.sticky.js "></script>

<script>
    $(window).load(function(){
      $("#sticky-nav").sticky({ topSpacing: 0 });
    });
  </script>



<body class="<?=$lang;?> <?=$env;?> page-<?=$name;?> section-<?=$section;?>">

<header id="sticky-nav">
	
    <a href="#content" id="skip">Skip to content</a>
    
	<nav id="utility">

		   <ul class="utility-nav">

				<li class="secondary"><a href="<?=$url;?>/learn-more/" <?php if($name == "learn-more") { ?> class="active"<? } ?> class="secondary utility-button">Learn More</a></li>

				<li class="secondary"><a href="<?=$url;?>/login/" <?php if($name == "login") { ?> class="active"<? } ?> class="secondary">Login</a></li>

				<li class="secondary"><a href="<?=$url;?>/contact/" <?php if($name == "contact") { ?> class="active"<? } ?> class="secondary">Contact</a></li>

		   </ul>

	</nav>

    <nav id="primary">
		
        <div id="logo">
        
            <div id="logo-header"><a href="<?=$url;?>/">Social Solutions Global</a></div>
        
        </div><!--header-wrapper-->

        
        <ul class="primary-nav">
            
            <li class="primary-nav"><a href="<?=$url;?>/solutions/" <?php if($section == "solutions") { ?> class="active"<? } ?> class="primary-nav">Solutions</a>
          
					<ul class="no-float">
						
						
						<li id="nav-essentials-logo"><a href="<?=$url;?>/solutions/apricot-essentials/index.php">Apricot Essentials</a></li>
						
						<li id="nav-apricot-logo"><a href="<?=$url;?>/solutions/apricot/index.php">Apricot</a></li>
						
						<li id="nav-eto-logo"><a href="<?=$url;?>/solutions/eto/index.php">ETO</a></li>
	
					</ul>	
				
           		
             </li> 
            
            <li class="primary-nav"><a href="<?=$url;?>/services/" <?php if($section == "services") { ?> class="active"<? } ?> class="primary ">Services</a></li>
            
            <li class="primary-nav"><a href="<?=$url;?>/who-we-serve/" <?php if($section == "who-we-serve") { ?> class="active"<? } ?> class="primary">Who We Serve</a>
            
            	<!--<ul>
									
         		
         			<li><a href="<?=$url;?>/who-we-serve/child-services.php">Child Services</a></li>
         			
         			<li><a href="<?=$url;?>/who-we-serve/collaboratives.php">Collaboratives</a></li>
         			
         			<li><a href="<?=$url;?>/who-we-serve/health-and-human-services.php">Health &amp; Human Services</a></li>
         			
         			<li><a href="<?=$url;?>/who-we-serve/homelessness.php">Homelessness</a></li>
         			
         			<li><a href="<?=$url;?>/who-we-serve/foundations.php">Foundations</a></li>
         			
         			<li><a href="<?=$url;?>/who-we-serve/reentry.php">Reentry</a></li>
         			
         			<li><a href="<?=$url;?>/who-we-serve/victim-services.php">Victim Services</a></li>
						
					<li><a href="<?=$url;?>/who-we-serve/workforce.php">Workforce</a></li>
         			
          		
           		</ul>-->
            
            </li>
            
            <li class="primary-nav"><a href="#" <?php if($section == "resources") { ?> class="active"<? } ?> class="primary">Resources</a>
            
            	<ul>
				
					<li><a href="resources/blog/index.php">Blog</a></li>
						
					<!--<li><a href="resources/events/index.php">Events</a></li>-->
					
					<li><a href="<?=$url;?>/resources/featured-resources/index.php">Featured Resources</a></li>
					
				
           		</ul>
            
            
            </li>
            
            <li class="primary-nav"><a href="<?=$url;?>/about-us/" <?php if($section == "about") { ?> class="active"<? } ?> class="primary">About Us</a></li>
               
            <li class="primary-nav"><a href="#">Search</a></li>   
                
        </ul>
        
    </nav>

</header>

<div class="clear"></div><!--clear-->

<div id="wrapper"> 



