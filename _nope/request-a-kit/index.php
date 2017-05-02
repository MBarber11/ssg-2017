<?php

$title = "Request a Kit";
$name = "request-a-kit";
$section = "general";

include('../includes/header.php');

?>

<div id="content">

	<?php if($lang == "en") { ?>

		<h2>Request a Kit</h2>
        
        <h3>Receive it by mail. Or download it.</h3>
        
        <p>Start planning for your long-term care with helpful worksheets, cost charts, information and planning steps. Remember, most long-term care needs are not covered by your health or disability insurance, or Medicare, so make sure you have a plan. Request Your Long-Term Care Planning Kit, now.</p>
        
        <p class="arrow"><a href="<?=$url;?>/downloads/long-term-kit-tool-kit.pdf" rel="external" onclick="_gaq.push(['_trackEvent', 'Request a Kit', 'English', 'Download kit']);">Download kit</a> <span class="file-size">(PDF, 8 MB)</span></p>
        
        <p>Complete the following form to receive a kit by mail.</p>
		
        
        
        
      <div id="survey">
      
      <iframe src="https://www.surveymonkey.com/r/KV77BH3" name="Request a Kit" frameborder="0" scrolling="auto"></iframe>
	  
      <p>The information you provide to order or download the kit will only be used to send you a kit or for inventory planning purposes. Any information (e.g. city, state, zip code) for those who download or order a kit will be aggregated. For more information, see our <a href="http://www.hhsc.state.tx.us/Privacy-Practices.shtml" rel="external">privacy policy</a>.</p>      
	  
      </div>
      
      <script type='text/javascript'>
		// Conversion Name: Request Information - English
		var ebRand = Math.random()+'';
		ebRand = ebRand * 1000000;
		//<![CDATA[ 
		document.write('<scr'+'ipt src="HTTP://bs.serving-sys.com/Serving/ActivityServer.bs?cn=as&amp;ActivityID=54270&amp;rnd=' + ebRand + '"></scr' + 'ipt>');
		//]]>
		</script>
		<noscript>
		<img width="1" height="1" style="border:0" src="HTTP://bs.serving-sys.com/Serving/ActivityServer.bs?cn=as&amp;ActivityID=54270&amp;ns=1"/>
		</noscript> 
               
    <?php } 
    
    else if($lang == "es") { ?>
    
    	<h2>Solicita un Paquete</h2>
        
        <h3>Recíbalo por correo.</h3>
        
        <p>Comience a planificar sus cuidados a largo plazo con la ayuda de hojas de trabajo, tablas de costos y consejos e información de planificación paso por paso. Recuerde que la mayoría de las necesidades de cuidados a largo plazo no están cubiertas por su seguro médico, de discapacidad, ni Medicare. De manera que tiene que asegurarse de tener un plan. Pida gratis su paquete de planificación, ¡hoy mismo!</p>
        
        
      <div id="survey">
      
      <iframe src="https://www.surveymonkey.com/r/PBRCD9J" name="Request a Kit" frameborder="0" scrolling="auto"></iframe>
      
      <p>La información que nos dé para pedir o descargar un paquete de planificación sólo se usará para propósitos de enviarle un paquete de planificación o para inventario. Para más información, vea nuestra <a href="http://www.hhsc.state.tx.us/Privacy-Practices.shtml" rel="external">política de privacidad</a>.</p>
    
    
    	<script type='text/javascript'>
		// Conversion Name: Request Information - Spanish
		var ebRand = Math.random()+'';
		ebRand = ebRand * 1000000;
		//<![CDATA[ 
		document.write('<scr'+'ipt src="HTTP://bs.serving-sys.com/Serving/ActivityServer.bs?cn=as&amp;ActivityID=54273&amp;rnd=' + ebRand + '"></scr' + 'ipt>');
		//]]>
		</script>
		<noscript>
		<img width="1" height="1" style="border:0" src="HTTP://bs.serving-sys.com/Serving/ActivityServer.bs?cn=as&amp;ActivityID=54273&amp;ns=1"/>
		</noscript>

    
    <?php } ?>

</div>

<?php include('../includes/footer.php'); ?>