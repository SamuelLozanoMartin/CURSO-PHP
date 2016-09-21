<!DOCTYPE html>
<html>
<head>
	<title>Metodos abstractos</title>
</head>
<body>
<?php

	abstract class Trabajador
	{
		protected $nombre;
		protected $sueldo;

		public function __construct($nombre)
		{
			$this->nombre=$nombre;
		}

		protected abstract function calcularSueldo();

	}

	class Empleado extends Trabajador
	{
		protected $valorHora;
		protected $horasTrabajadas;

		public function __construct($valorHora,$horasTrabajadas,$nombre)
		{
			$this->valorHora=$valorHora;
			$this->horasTrabajadas=$horasTrabajadas;
			parent::__construct($nombre);

		}		

		public function calcularSueldo()
		{
			$this->sueldo=$this->valorHora * $this->horasTrabajadas;
			return $this->nombre . " es empleado y cobra " . $this->sueldo . "<hr>";
		}


	}

	class Gerente extends Trabajador
	{
		protected $ganancias;

		public function __construct($ganancias,$nombre)
		{


			$this->ganancias=$ganancias;
			parent::__construct($nombre);
		}

		public function calcularSueldo()
		{
			$this->valorHora=$valorHora;
			$this->horasTrabajadas=$horasTrabajadas;
			parent::__construct($nombre);
			$this->sueldo=$this->ganancias / 10;
			return $this->nombre . "es gerente y cobra " . $this->sueldo . "<hr>";
		}
	}
	$valorHora=3.5;
	$horasTrabajadas=160;
	$ganancias=5000;
	
	$emple1=new Empleado($valorHora,$horasTrabajadas,"juan");
	echo $emple1->calcularSueldo();

	$gerent1= new Gerente($ganancias,"luis");
	echo $gerent1->calcularSueldo();
?>

</body>
</html>