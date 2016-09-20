<!DOCTYPE html>
<html>
<head>
	<title>Herencia de objetos 2</title>
</head>
<body>
<?php
	class Persona
	{
		protected $nombre;
		protected $edad;
		public function cargarPersona($nombre,$edad)
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

		public function cargarEmpleado($sueldo)
		{
			$this->sueldo=$sueldo;
		}

		public function imprimir()
		{
			echo parent::imprimirPersona();
			echo " y cobra " . $this->sueldo . "<hr>";
		}
	}

	$per1=new persona();
	$per1->cargarPersona("paco","35");
	//$per1->imprimirPersona();

	$emple=new Empleado();
	$emple->cargarPersona("paco","35");
	$emple->cargarEmpleado("3000");
	$emple->imprimir();
		

	
?>
</body>
</html>