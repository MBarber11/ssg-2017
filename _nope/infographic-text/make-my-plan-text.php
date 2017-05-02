<?php

$title = "Making my Plan Infographic";
$name = "making-my-plan-infographic";
$section = "general";

include('../includes/header.php');

?>

<div id="content" class="infograph">

	<?php if($lang == "en") { ?>

		<h2>Making my Plan Infographic Text</h2>
        
        <h3>Which long-term care funding options might work for me?</h3>

        <p>Talk to your insurance agent or financial planner about funding options that may work for you based on your age, health, and financial concerns.</p>

        <p>If you are healthy, active, and still working, you might consider long-term care insurance, retirement community buy-in, or your personal income and savings.</p>

        <p>If you are healthy, active, and retired, you might consider long-term care insurance, retirement community buy-in, annuities, home equity, a trust, or a life settlement.</p>

        <p>If you are in poor health, regardless of your age, you might consider personal income and savings, home equity, or an accelerated death benefit.</p>

        <p>If you are concerned about protecting your family’s assets, regardless of your age or health, you might consider long-term care insurance, annuities, home equity, a trust, or a life settlement.</p>
       
        <p class="arrow"><a href="<?=$url;?>/making-my-plan/index.php">Back to Infograph</a></p>
        
    <?php } 
    
    else if($lang == "es") { ?>
            
        <h2>Texto explicativo de la infográfica Cómo Crear un Plan</h2>
        
        <h3>¿Cuáles opciones de financiamiento para los cuidados a largo plazo podrían funcionar en mi caso?</h3>

        <p>Hable con su agente de seguros o asesor financiero sobre las opciones de financiamiento que podrían funcionar para usted según su edad, salud y preocupaciones financieras.</p>

        <p>Si está saludable, activo y aún trabaja, podría considerar el seguro de cuidados a largo plazo, comprar en una comunidad para jubilados o usar sus ingresos o ahorros personales.</p>

        <p>Si está saludable, activo y jubilado, podría considerar el seguro de cuidados a largo plazo, comprar en una comunidad para jubilados, anualidades, el capital acumulado de su casa, un fideicomiso o una liquidación de seguro de vida.</p>

        <p>Si no tiene buena salud, sin importar su edad, podría considerar sus ingresos y ahorros personales, el capital acumulado de su casa, o un beneficio acelerado por muerte.</p>

        <p>Si le preocupa proteger los activos de su familia, sin importar su edad o estado de salud, podría considerar un seguro de cuidados a largo plazo, anualidades, el capital acumulado de su casa, un fideicomiso o una liquidación de seguro de vida.</p>


       
        <p class="arrow"><a href="<?=$url;?>/making-my-plan/index.php">Regresar a la infográfica</a></p>
    
    
    <?php } ?>

</div>

<?php include('../includes/footer.php'); ?>