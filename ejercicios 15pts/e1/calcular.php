<?php
	$valor = $_POST['valor'];
	$convertir = $_POST['Combo'];

	if ($convertir=="cordoba"){
		$Calcular=$valor/29;
		echo 'La conversion es: '.$Calcular;
	}else{
		$Calcular=$valor*1;
		echo 'La conversion es: '.$Calcular;
	}


?>