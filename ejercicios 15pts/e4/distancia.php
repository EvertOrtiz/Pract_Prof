<?php
	$valor = $_POST['valor'];
	$convertir = $_POST['Combo'];
	
	if ($convertir=="cm"){
		$pul=($valor/2.54);
		$mt=($valor/100);
		$km=($valor/100000);
		echo 'PULGADAS:'.$pul.'<br>';
		echo 'METRO:'.$mt.'<br>';
		echo 'kILOMETRO:'.$km;

	}
	if ($convertir=="pul"){
		$cm=($valor*2.54);
		$mt=($valor*0.0254);
		$km=($valor*0.000254);
		echo 'Centimetro:'.$cm.'<br>';
		echo 'METRO:'.$mt.'<br>';
		echo 'kILOMETRO:'.$km;

	}
	if ($convertir=="mt"){
		$cm=($valor*1000);
		$pul=($valor/39.3701);
		$km=($valor/100000);
		echo 'Centimetro:'.$cm.'<br>';
		echo 'Pulgada: '.$pul.'<br>';
		echo 'kILOMETRO:'.$km;

	}
	if ($convertir=="km"){
		$cm=($valor*100000);
		$pul=($valor*39370.1);
		$mt=($valor*1000);
		echo 'Centimetro:'.$cm.'<br>';
		echo 'Pulgada: '.$pul.'<br>';
		echo 'METRO:'.$mt;

	}



	

?>