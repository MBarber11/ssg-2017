<?php

$title = "Costs to Consider Infographic";
$name = "costs-to-consider-infographic";
$section = "general";

include('../includes/header.php');

?>

<div id="content" class="infograph">

	<?php if($lang == "en") { ?>

		<h2>Costs to Consider Infographic Text</h2>
        
        <h3>What is the cost of various long-term care options?</h3>
        
        <p>Care may be provided in three locations. The first is your home, where you may receive personal care or skilled care services. The second is at the site of community organizations that you visit to receive services. The third is a residential facility in which you live full time.</p>

        <p>The cost of services depends on their location and frequency. Four hours per day of personal care in your home costs $3,422 per month in 2016 and is projected to cost $4,407 in 2031. Four hours of skilled care per day in your home costs $3,432 per month in 2016 and is projected to cost $4,047 in 2031. A private room in an assisted living facility costs $3,336 in 2016 and is projected to cost $7,469 in 2031. A semi-private room in a nursing home costs $3,961 in 2016 and is projected to cost $5,574 in 2031. A private room in a nursing home costs $5,111 in 2016 and is projected to cost $7,177 in 2031. A private room in a memory care residential facility costs $4,520 in 2015 and is projected to cost $6,320 per month in 2030. </p>
       
        <p class="arrow"><a href="<?=$url;?>/costs-to-consider/index.php">Back to Infograph</a></p>
        
    <?php } 
    
    else if($lang == "es") { ?>
    
    <h2>Texto explicativo de la infográfica Costos a Considerar</h2>
        
        <h3>¿Cuánto cuestan las distintas opciones de cuidados a largo plazo?</h3>
        
        <p>Los cuidados se pueden proveer en tres lugares distintos. El primero es su casa, en donde puede recibir servicios de cuidado personal o especializado. El segundo son las organizaciones comunitarias que visita para recibir los servicios. El tercero es un centro residencial en el que puede vivir todo el tiempo.</p>
        
        <p>El costo de los servicios depende de la ubicación y frecuencia. Cuatro horas al día de cuidado personal en su casa cuestan $3,422 al mes en el año 2016 y se proyecta que cuesten $4,407 en el año 2031. Cuatro horas de cuidado especializado en su casa cuestan $3,432 al mes en el año 2016 y se proyecta que cuesten $4,047 en el año 2031. Una habitación privada en un centro de vida asistida cuesta $3,336 en el año 2016 y se proyecta que cueste $7,469 en el año 2031. Una habitación semi-privada en una casa de reposo cuesta $3,961 en el año 2016 y se proyecta que cueste $5,574 en el año 2031. Una habitación privada en una casa de reposo cuesta $5,111 en el año 2016 y se proyecta que cueste $7,177 en el año 2031. Un
       
        <p class="arrow"><a href="<?=$url;?>/costs-to-consider/index.php">Regresar a la infográfica</a></p>
    
    
    <?php } ?>

</div>

<?php include('../includes/footer.php'); ?>