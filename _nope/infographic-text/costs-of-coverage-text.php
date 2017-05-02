<?php

$title = "Costs of Coverage Infographic";
$name = "costs-of-coverage-infographic";
$section = "general";

include('../includes/header.php');

?>

<div id="content" class="infograph">

	<?php if($lang == "en") { ?>

		<h2>Costs of Coverage Infographic Text</h2>
        
        <h3>What are the requirements for public care coverage?</h3>
        
        <p>Medicare does not cover long-term care. It pays for short-term medical expenses based on age and other qualifications. There are three ways to qualify for Medicare. The first is to be 65 or older. The second is to be disabled, regardless of your age. The third is to have end-stage renal disease, regardless of your age.</p>

        <p>Medicaid may pay for specific long-term care services based on income and other qualifications. In 2016, you must have monthly income of $2,199 or less for a single person and $4,398 or less for a couple. Your savings must be $2,000 or less for a single person or $3,000 or less for a couple. Your home equity must be $552,000 or less. You may not have transferred income or assets during the past 60 months. You must have a medical necessity for the services.</p>
        
        <h3>What are the requirements for private care coverage?</h3>
        
        <p>Medicare supplement insurance may pay for long-term care expenses. To purchase a policy, you must qualify for Medicare and pay the policy’s premiums.</p>

        <p>Long-term care insurance is the best way to protect your family and make sure your long-term needs are met. To obtain coverage, you must select a policy that meets your needs, meet the policy’s health requirements, and pay the premiums.</p>
       
        <p class="arrow"><a href="<?=$url;?>/costs-to-consider/index.php">Back to Infograph</a></p>
        
    <?php } 
    
    else if($lang == "es") { ?>
    
    <h2>Texto explicativo de la infográfica Costos a Considerar</h2>
        
        <h3>¿Cuáles son los requisitos para la cobertura de atención pública?</h3>
        
        <p>El ingreso suplementario de Medicare podría pagar los gastos de cuidados a largo plazo. Para comprar una póliza, debe calificar para Medicare y pagar las primas de la póliza.</p>

        <p>Medicaid puede pagar los servicios de cuidados a largo plazo específicos de acuerdo con sus ingresos y otros requisitos. En el 2016, usted debe tener un ingreso mensual de $2,199 o menos para una sola persona y $4,398 o menos por pareja. Sus ahorros deben ser de $2,000 o menos para una sola persona o $3,000 o menos para una pareja. El capital acumulado de su casa debe ser de $552,000 o menos. No puede haber transferido ningún ingreso o activo durante los últimos 60 meses. Tiene que tener una necesidad médica para los servicios.</p>
        
        <h3>¿Cuáles son los requisitos para la cobertura de atención privada?</h3>
        
        <p>El ingreso suplementario de Medicare podría pagar los gastos de cuidados a largo plazo. Para comprar una póliza, debe calificar para Medicare y pagar las primas de la póliza.</p>

        <p>El seguro de cuidados a largo plazo es la mejor manera de proteger a su familia y cerciorarse de que se satisfagan sus necesidades de cuidados a largo plazo. Para obtener cobertura, debe seleccionar una póliza que satisfaga sus necesidades, debe cumplir con los requisitos de salud de la póliza y pagar las primas.</p>

       
        <p class="arrow"><a href="<?=$url;?>/costs-to-consider/index.php">Regresar a la infográfica</a></p>
    
    
    <?php } ?>

</div>

<?php include('../includes/footer.php'); ?>