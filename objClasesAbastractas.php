<!DOCTYPE html>
<html>
<head>
	<title>Clases abstractas</title>
</head>
<body>
<?php
	abstract class Persona
	{
		protected $nombre;
		protected $edad;
		public function __construct ($nombre,$edad)
		{
			$this->nombre=$nombre;
			$this->edad=$edad;
		}
		public function imprimirPersona()
		{
			echo $this->nombre . " tiene " . $this->edad . " años";
		}
		
	}

	class Empleado extends Persona
	{
		private $sueldo;

		public function __construct($nombre,$edad,$sueldo)
		{
			$this->sueldo=$sueldo;
			parent::__construct($nombre,$edad);
		}

		public function imprimir()
		{
			echo parent::imprimirPersona();
			echo " y cobra " . $this->sueldo . "<hr>";
		}
	}
	$emple=new Empleado("paco","35","3000");
	$emple->imprimir();
	

	$per1=new persona("paco","35");  //dara error porque no se puede llamar a una clase abstracta	

	
?>
</body>
</html>
