<?php
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];


	$IMC=($peso/($altura*$altura));
	echo "El imc es:".$IMC;



?>