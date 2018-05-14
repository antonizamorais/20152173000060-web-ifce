<?php 
	$peso = $_GET['peso'];
	$altura = $_GET['altura'];
		
	$conta1 = $altura*$altura;
	$conta2 = $peso/$conta1;
		
	$resultado = number_format($conta2);

		if($resultado < 16){
			echo "Magreza grave";
		}
		if ($resultado >= 16 && $resultado < 17) {
			echo "Magreza moderada";
		}
		if ($resultado >= 17 && $resultado < 18.5) {
			echo "Magreza leve";
		}
		if ($resultado >= 18.5 && $resultado < 25) {
			echo "Saúdavel";
		}
		if ($resultado >= 25 && $resultado < 30) {
			echo "Sobrepeso";
		}
		if ($resultado >=30 ) {
			echo "Obesidade";
		}
?>