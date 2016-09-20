<!DOCTYPE html>
<html>
<head>
	<title>Parametros opcionales en objetos</title>
</head>
<body>
<?php
	class Empleado{
		private $nombre;
		private $sueldo;

		public function __construct ($nombre,$sueldo="1000")
		{
			$this->nombre=$nombre;
			$this->sueldo=$sueldo;
		}

		public function imprimir()
		{
			echo $this->nombre . " cobra " . $this->sueldo . "<hr>";
		}
	}

	$emple1=new Empleado("paco","2000");
	$emple1->imprimir();
	$emple2=new Empleado("luis");
	$emple2->imprimir();

?>
</body>
</html>