<!DOCTYPE html>
<html>
<head>
	<title>Funcion DATE PHP</title>
</head>
<body>
	<?php
		echo "estamos en la semana " . date("W") . " del año " . date("Y");  //muestra la semana del año y el año
		$d=mktime(11, 14, 54, 12, 5, 2014);			//hora-minutos-segundos-mes-dia-año
		echo "<hr>";
		echo "Created date is " . date("Y-m-d h:i:sa", $d);
		$fecha=strtotime("+20 days");
		echo "<hr>";
		echo "dentro de 20 dias es " . date("l d/m/Y", $fecha);
		echo "<hr>";
		$d1=strtotime("July 04");
		$d2=ceil(($d1-time())/60/60/24/30);  //ceil te redondea para arriba los decimales, pj: 2.4-->3
		echo "Han pasado " . $d2 ." meses desde 4th of July.";

	?>
	
</body>
</html>
