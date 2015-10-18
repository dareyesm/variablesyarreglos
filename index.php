<?php

//variables tipo texto
$nombre = 'Fernando Gonzalez:';

$mensaje = 'Usted tiene un mensaje nuevo en el buzon.';

//concatenación
//echo $nombre . ' ' .$mensaje;

$numero1 = 50.5;
$numero2 = 2.7;
$numero2 = 3;
(float)$total = (float)$numero1 * (float)$numero2;

//echo "<br>la operaci&oacute;n da como resultado: " . $total;

$numero3 = array();

$numero3[0] = "H";
$numero3[1] = "O";
$numero3[2] = "L";
$numero3[3] = "A";

$letra_a_buscar = 'A';

$nombres = "F,E,R,N,A,N,D,O";

$nombres = explode(',',$nombres);

//print_r($nombres);

echo "<br>";

for($i=0;$i < count($nombres);$i++){
	
		echo $nombres[$i];
}

?>