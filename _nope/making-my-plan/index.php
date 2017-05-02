<?php

$title = "Making My Plan";
$name = "making-my-plan";
$section = "general";

include('../includes/header.php');

?>

<div id="content" class="plan">

	<?php if($lang == "en") { ?>

		<h2>Making my Plan</h2>
        
        <h3>It’s time to develop a plan.</h3>
        
        <p>Your plan depends on your age, health considerations, and priorities. No matter what your situation, you have funding options that are better than depending on Medicaid to cover your long-term expenses.</p>
        
        <p>Your options may include paying “out of pocket,” purchasing long-term care insurance, using your home equity, life insurance, or annuity contracts. A financial planner or insurance agent who specializes in long-term care can help you decide what works best for you.</p>
        
        <div class="infograph-desktop" class="infograph">
        
        <img class="last-image" src="<?=$url;?>/images/infograph-plan-1.jpg" alt="Which long-term care funding options might work for me? Talk to your insurance agent or financial planner about funding options that may work for you based on your age, health, and financial concerns. If you are healthy, active, and still working, you might consider long-term care insurance, retirement community buy-in, or your personal income and savings. If you are healthy, active, and retired, you might consider long-term care insurance, retirement community buy-in, annuities, home equity, a trust, or a life settlement. If you are in poor health, regardless of your age, you might consider personal income and savings, home equity, or an accelerated death benefit. If you are concerned about protecting your family’s assets, regardless of your age or health, you might consider long-term care insurance, annuities, home equity, a trust, or a life settlement.">

        <p><a href="<?=$url;?>/infographic-text/make-my-plan-text.php">View text version of infographic.</a></p>
        
        </div>
        
        <div class="infograph-mobile" class="infograph">
        
        	<img class="last-image" src="<?=$url;?>/images/infograph-plan-mobile-1.jpg" alt="Which long-term care funding options might work for me? Talk to your insurance agent or financial planner about funding options that may work for you based on your age, health, and financial concerns. If you are healthy, active, and still working, you might consider long-term care insurance, retirement community buy-in, or your personal income and savings. If you are healthy, active, and retired, you might consider long-term care insurance, retirement community buy-in, annuities, home equity, a trust, or a life settlement. If you are in poor health, regardless of your age, you might consider personal income and savings, home equity, or an accelerated death benefit. If you are concerned about protecting your family’s assets, regardless of your age or health, you might consider long-term care insurance, annuities, home equity, a trust, or a life settlement.">
        
                    
            <p><a href="<?=$url;?>/infographic-text/make-my-plan-text.php">View text version of infographic.</a></p>
            
        </div>
        
        <div class="download-box">
        
        	<p class="arrow"><a href="<?=$url;?>/downloads/long-term-kit-tool-kit.pdf" rel="external" onclick="_gaq.push(['_trackEvent', 'Make my Plan', 'English', 'First', 'Download kit']);">Download</a> <span class="file-size">(PDF, 8 MB)</span> or <a class="no-arrow" href="<?=$url;?>/request-a-kit/">order Your Long-Term Planning Kit</a> to learn more about how to talk with your family and what topics to cover.</p>
        
        </div>
        
        <div class="download-box">
        
        	<p class="arrow"><a href="<?=$url;?>/downloads/checklist-english.pdf" rel="external" onclick="_gaq.push(['_trackEvent', 'Make my Plan', 'English', 'Download Checklist']);">Download a checklist</a> <span class="file-size">(PDF, 185 KB)</span> so you know what topics to discuss when you consult a professional.</p>
        
        </div>
        
        <h3>Long-term care insurance may be an important part of your plan.</h3>	
        
        <p>Long-term care insurance can be customized to cover the services you need in the settings that suit you best. Purchasing a policy when you are relatively young and healthy gives you the most options at the most affordable price.</p>
                 
        <p class="arrow"><a href="<?=$url;?>/about-the-partnership/">Learn more about the Texas Long-Term Care Partnership</a> and the advantages of Partnership-qualified policies.</p>
                
        <h3>Long-term care is family business. Make <span class="italic">the talk</span> part of your plan.</h3>	
        
        <p>Talking about aging, finances, and health care is uncomfortable, awkward, and <span class="italic">necessary</span>. Discuss your plan and priorities with loved ones before a health problem occurs.</p>
        
        	<div class="download-box">
        
        	<p class="arrow"><a href="<?=$url;?>/downloads/long-term-kit-tool-kit.pdf" rel="external" onclick="_gaq.push(['_trackEvent', 'Make my Plan', 'English', 'Second', 'Download kit']);">Download</a> <span class="file-size">(PDF, 8 MB)</span> or <a class="no-arrow" href="<?=$url;?>/request-a-kit/">order Your Long-Term Planning Kit</a> to learn more about how to talk with your family and what topics to cover.</p>
        
        	</div>
        	
            <div class="button">
    
        		<a href="<?=$url;?>/making-my-plan/profiles">View Profiles</a> 
        
        	</div>

            
       <!-- <p class="arrow"><a href="<?=$url;?>/making-my-plan/profiles">Meet others who are ready to plan and find out how they are preparing to own their future.</a></p>-->
    
    <?php } 
    
    else if($lang == "es") { ?>
    
    	<h2>Cómo Crear Un Plan</h2>
        
        <h3>Llegó la hora de crear un plan.</h3>
        
        <p>El plan que usted elija dependerá de su edad, consideraciones de salud y prioridades. Independientemente de su situación, usted tiene mejores opciones de financiamiento que depender de Medicare para cubrir sus gastos de cuidados a largo plazo.</p>
        
        <p>Sus opciones pueden incluir pagar los “gastos de su bolsillo”, comprar un seguro de cuidados a largo plazo, usar el capital acumulado de su casa, un seguro de vida o contratos de anualidades. Un asesor financiero o un agente de seguros especializado en cuidados a largo plazo puede ayudarle a decidir lo que es mejor para usted. </p>
        
        <div class="infograph-desktop" class="infograph">
        
        <img class="last-image" src="<?=$url;?>/images/infograph-plan-1-es.jpg" alt="¿Cuáles opciones de financiamiento para los cuidados a largo plazo podrían funcionar en mi caso? Hable con su agente de seguros o asesor financiero sobre las opciones de financiamiento que podrían funcionar para usted según su edad, salud y preocupaciones financieras. Si está saludable, activo y aún trabaja, podría considerar el seguro de cuidados a largo plazo, comprar en una comunidad para jubilados o usar sus ingresos o ahorros personales. Si está saludable, activo y jubilado, podría considerar el seguro de cuidados a largo plazo, comprar en una comunidad para jubilados, anualidades, el capital acumulado de su casa, un fideicomiso o una liquidación de seguro de vida. Si no tiene buena salud, sin importar su edad, podría considerar sus ingresos y ahorros personales, el capital acumulado de su casa, or un beneficio acelerado por muerte. Si le preocupa proteger los activos de su familia, sin importar su edad o estado de salud, podría considerar un seguro de cuidados a largo plazo, anualidades, el capital acumulado de su casa, un fideicomiso o una liquidación de seguro de vida.">

        <p><a href="<?=$url;?>/infographic-text/make-my-plan-text.php">Ver versión en texto de la infográfica.</a></p>
        
        </div>
        
        <div class="infograph-mobile" class="infograph">
        
        	<img class="last-image" src="<?=$url;?>/images/infograph-plan-mobile-1-es.jpg" alt="¿Cuáles opciones de financiamiento para los cuidados a largo plazo podrían funcionar en mi caso? Hable con su agente de seguros o asesor financiero sobre las opciones de financiamiento que podrían funcionar para usted según su edad, salud y preocupaciones financieras. Si está saludable, activo y aún trabaja, podría considerar el seguro de cuidados a largo plazo, comprar en una comunidad para jubilados o usar sus ingresos o ahorros personales. Si está saludable, activo y jubilado, podría considerar el seguro de cuidados a largo plazo, comprar en una comunidad para jubilados, anualidades, el capital acumulado de su casa, un fideicomiso o una liquidación de seguro de vida. Si no tiene buena salud, sin importar su edad, podría considerar sus ingresos y ahorros personales, el capital acumulado de su casa, or un beneficio acelerado por muerte. Si le preocupa proteger los activos de su familia, sin importar su edad o estado de salud, podría considerar un seguro de cuidados a largo plazo, anualidades, el capital acumulado de su casa, un fideicomiso o una liquidación de seguro de vida.">
        
                    
            <p><a href="<?=$url;?>/infographic-text/make-my-plan-text.php">Ver versión en texto de la infográfica.</a></p>
            
        </div>
        
        <div class="download-box">
        
        	<p class="arrow"><a href="<?=$url;?>/request-a-kit/" onclick="_gaq.push(['_trackEvent', 'Make my Plan', 'English', 'First', 'Download kit']);">Ordene la ‘Guía de planificación para los cuidados a largo plazo'</a> para ver consejos que responden a preguntas como estas antes de crear su plan.</p>
        
        </div>
        
        <div class="download-box">
        
        	<p class="arrow"><a href="<?=$url;?>/downloads/checklist-spanish.pdf" rel="external" onclick="_gaq.push(['_trackEvent', 'Make my Plan', 'Spanish', 'Download Checklist']);">Descargue esta lista de verificación</a> <span class="file-size">(PDF, 185 KB)</span> para saber los puntos que debe cubrir cuando consulte a un profesional.</p>
        
        </div>
        
        <h3>El seguro de cuidados a largo plazo puede ser una parte importante de su plan.</h3>	
        
        <p>El seguro de cuidados a largo plazo se puede personalizar para cubrir los servicios que usted necesita en el lugar que mejor le convenga. Comprar una póliza cuando está relativamente joven y saludable le brinda más opciones, a precios más económicos.</p>
                 
        <p class="arrow"><a href="<?=$url;?>/about-the-partnership/">Aprenda más sobre Texas Long-Term Care Partnership</a> y las ventajas de las pólizas calificadas de la Asociación.</p>
        
        <h3>Los cuidados a largo plazo son un asunto de familia. Hablar sobre esto debe ser parte de su plan.</h3>	
        
        <p>Hablar sobre el envejecimiento, las finanzas y el cuidado médico no es fácil ni agradable, pero es <span class="italic">necesario</span>. Converse sobre su plan y prioridades con sus seres queridos antes de que ocurra un problema de salud. </p>
        
        	<div class="download-box">
        
                <p class="arrow"><a href="<?=$url;?>/request-a-kit/" onclick="_gaq.push(['_trackEvent', 'Make my Plan', 'English', 'Second', 'Download kit']);">Ordene la ‘Guía de planificación para los cuidados a largo plazo'</a> para ver consejos que responden a preguntas como estas antes de crear su plan.</p>
            
            </div>
        	
            <div class="button">
    
        		<a href="<?=$url;?>/making-my-plan/profiles">Ver Perfiles</a> 
        
        	</div>

            
        
    
    <?php } ?>

</div>


<?php include('../includes/footer.php'); ?>