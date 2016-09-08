<?php


/*listado de 5 estudiantes donde cada estidiante tinene 4 notas definitr si el estudiante
 gana o pierde n asignaturas donde para ganar o perder debe star en un rango promedio de 3.5}*/
$estudiante=1;
$promedio=0;

while ($estudiante < 5) 
{
	$n1=rand(0,5);
	$n2=rand(0,5);
	$n3=rand(0,5);
	$n4=rand(0,5);

	echo "estas son las notas de los estudiantes $estudiante <br>";
	echo "la primera nota : $n1<br>";
	echo "la segunda nota : $n2<br>";
	echo "la tercera nota : $n3<br>";
	echo "la cuarta nota : $n4<br>";
	$promedio=($n1+$n2+$n3+$n4)/4;

	if ($promedio==3.5) {
		echo "ganado $promedio";
	}elseif ($promedio<3.5){
	
		echo "perdido $promedio<br>";
	}elseif ($promedio>3.5) {
		echo "ganado $promedio<br>" ;
	}
	$estudiante++;
}
?>