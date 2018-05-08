<?php 
	$salario = $_GET['salario'];
	$vendas = $_GET['vendas'];
		
	$conta1 = $vendas*0.4;
	$conta2 = $salario + $conta1;
		
	$comissão = number_format($conta1);
	$salarioFinal = number_format($conta2);

	echo "sua comissão é:".$comissão."<br>";
	
	echo "salario final é: ".$salarioFinal;
?>