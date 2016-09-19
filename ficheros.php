
<!DOCTYPE html>
<html>
<head>
	<title>Uso de ficheros</title>
</head>
<body>
	<?php

		$fichero=readfile("ficheros.txt"); // readline muestra todo el fichero y el numero total de caracteres. si lo asignamos a una variable, esta guarda el numero total de caracteres y no el contenido del fichero
		echo ("<hr>");
		echo "numero de caracteres del fichero es: " . $fichero;
		echo ("<hr>");

		$fichero =file_get_contents("ficheros.txt");  // abre el fichero completo y lo puedes asignar a una variable

		$fichero =explode(":", $fichero); //separar el user de la psw, es david:1234 
		//crea un array con las diferentes palabras separadas por ":"

		if ($_GET["user"]==$fichero[0] && $_GET["psw"]==$fichero[1]){  //comparamos las variables obtenidas del GET con el array
			echo "Usuario y password correcta";
		}
		else{
			echo "Usuario y/o password incorrecta";
		}
		echo "<hr>";

		$fichero = fopen("ficheros.txt", "r") or die("Unable to open file!");
		while(!feof($fichero)) {     //es para que lea hasta ek final del fichero
		  	echo fgetc($fichero) . " ";   // fgetc muestra el fichero caracter a caracter
		}
		fclose($fichero);
		echo "<hr>";

		$fichero=fopen("fichero2.txt", "r") or die ("No ha sio posible abrir el fichero");
		echo fread($fichero,4);  //lee solo los 4 primeros caracteres, para que lea el fichero entero en lugar de 4, filesize("fichero.txt")
		fclose($fichero);

	?>

</body>
</html>

