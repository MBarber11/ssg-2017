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


<title>Social Solutions Global | Case Management Software</title>


<meta name="description" content="*to do*">

<?php if($detect->isTablet()) { ?>
<meta name="viewport" content="width=960, user-scalable=yes">
<?php } else { ?>
<meta name="viewport" content="width=750, user-scalable=no">
<?php } ?>

<meta property="og:title" content="Social Solutions Global | Case Management Software" />
<meta property="og:type" content="cause" />
<meta property="og:description" content="*to do*" />
<meta property="og:url" content="http://www.socialsolutions.com" />
<meta property="og:image" content="*to do*" />
<meta property="og:site_name" content="Social Solutions Global | Case Management Software" />

<script type="text/javascript" src="<?=$url;?>/js/modernizr.js"></script>

<script src="https://use.typekit.net/dvp5bpg.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<link rel="shortcut icon" type="image/x-icon" href="<?=$url;?>/images/favicon.ico" />
<link rel="stylesheet" media="all" href="http://localhost:8888/ssg-2017/css/ui.css" />


<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://localhost:8888/ssg-2017/js/jquery.slicknav.js"></script>

<script type="text/javascript" src="http://localhost:8888/ssg-2017/js/jquery.sticky.js "></script>

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
        
            <h1><a href="<?=$url;?>/">Social Solutions Global</a></h1>
        
        </div><!--header-wrapper-->

        
        <ul class="primary-nav">
            
            <li class="primary-nav"><a href="<?=$url;?>/solutions/" <?php if($name == "solutions") { ?> class="active"<? } ?> class="primary">Solutions</a>
          
					<ul id="nav-double">
						
						<div id="nav-eto">
						
							<ul>

								<li id="nav-eto-logo"><a href="http://localhost:8888/ssg-2017/solutions/eto/index.php">ETO</a></li>

								<li ><a href="http://localhost:8888/ssg-2017/solutions/eto/eto-impact.php">ETO Impact</a></li>

								<li ><a href="http://localhost:8888/ssg-2017/solutions/eto/eto-collaborate.php">ETO Collaborate</a></li>

							</ul>

						</div>
						
						<div id="nav-apricot">

							<li id="nav-apricot-logo"><a href="http://localhost:8888/ssg-2017/solutions/apricot/">Apricot</a></li>

							<li><a href="http://localhost:8888/ssg-2017/solutions/apricot/apricot-core.php">Apricot Core</a></li>

							<li><a href="http://localhost:8888/ssg-2017/solutions/apricot/apricot-essentials.php">Apricot Essentials</a></li>

							<li><a href="http://localhost:8888/ssg-2017/solutions/apricot/apricot-plus.php">Apricot Plus</a></li>
	
					</ul>	
				
           		
             </li>
            
            <li class="primary-nav"><a href="<?=$url;?>/services/" <?php if($name == "services") { ?> class="active"<? } ?> class="primary ">Services</a></li>
            
            <li class="primary-nav"><a href="#" <?php if($name == "our-clients") { ?> class="active"<? } ?> class="primary">Our Clients</a>
            
            	<ul>
				
					<li><a href="http://localhost:8888/ssg-2017/our-clients/who-we-serve/index.php">Who We Serve</a></li>
						
					<li><a href="http://localhost:8888/ssg-2017/our-clients/client-success/index.php">Client Success</a></li>
					
				
           		</ul>
            
            </li>
            
            <li class="primary-nav"><a href="#" <?php if($name == "resources") { ?> class="active"<? } ?> class="primary">Resources</a>
            
            	<ul>
				
					<li><a href="resources/blog/index.php">Blog</a></li>
						
					<!--<li><a href="resources/events/index.php">Events</a></li>-->
					
					<li><a href="resources/resource-library/index.php">Resource Library</a></li>
					
				
           		</ul>
            
            
            </li>
            
            <li class="primary-nav"><a href="<?=$url;?>/about-us/" <?php if($name == "about-us") { ?> class="active"<? } ?> class="primary">About Us</a></li>
               
            <li class="primary-nav"><a href="#">Search</a></li>   
                
        </ul>
        
    </nav>

</header>

<div class="clear"></div><!--clear-->

<div id="wrapper"> 



