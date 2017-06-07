<?php

$title = "Careers";
$name = "careers";
$section = "About Us";

//Meta Data
$description = "*to do*";

$ogtitle = "*to do*";
$ogtype = "*to do*";
$ogdesription = "*to do*";
$ogurl = "*to do*";
$ogimage = "*to do*";
$ogsitename = "*to do*";

include('../../../includes/header.php');

?>


<div id="breadcrumbs"></div>

<div id="careers-hero">

	<div id="careers-hero-content">	

			<h1>Careers</h1>
			
		<p>Praesent aliquam ultricies lectus, non faucibus nibh scelerisque aliquam. In a pellentesque leo. Nulla dapibus magna quis auctor pretium. Quisque pharetra diam nisl, in luctus quam aliquet in. Aenean tempus, metus nec ultrices suscipit, risus risus semper sapien, a congue elit lacus quis erat.</p>
	   
	</div> 
      
</div>

<div id="basic-about">

	<div id="basic-about-content">	

		<!-- BEGIN HIREBRIDGE JOBS PORTAL -->
<IFRAME name="I1" src="http://www.hirebridge.com/v3/jobs/list.aspx?cid=7100&m=0" width="940" frameBorder="0" allowtransparency="true" marginwidth="1" scrolling="no" marginheight="1" id="I1" class="job-openings">
</IFRAME>		
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="http://css.hirebridge.com/script/iframeheight.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#I1').iframeHeight({
			ebugMode : false
			});
		 });
</script>
<!-- END HIREBRIDGE JOBS PORTAL -->
		
		<div class="blue-button"><a href="<?=$url;?>/about-us/working-here/">&lt; Back </a></div>

	</div> 
	
</div>  

<?php include('../../includes/footer.php'); ?>

    
