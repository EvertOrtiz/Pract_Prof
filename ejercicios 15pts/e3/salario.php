<?php
	$sal = $_POST['sal'];
	$hr = $_POST['hr'];
	$inss=0.06;
	$ir=15;
	

	$total = ($sal * $hr);

	echo "El salario total es:".$total.'<br>';

	$renta =( $total - $inss  );

	echo "El salario con ir es:".$renta.'<br>';

	$in =( $total -$ir  );


	echo "El salario con inss es:".$in.'<br>';



?>
