<!DOCTYPE html>
<html>
<head>
	<title>Clases y metodos finales</title>
</head>
<body>
	
<?php
		//NO puede ser final porque sino no puede ser heredada por persona
	  class Persona  
	{
		protected $nombre;
		protected $edad;

		public final function cargarPersona ($nombre,$edad)
		{
			$this->nombre=$nombre;
			$this->edad=$edad;
		}
		//imprimir NO puede ser final porque se sobreescribe en la clase empleado
		public  function imprimir() 
		{
			echo $this->nombre . " tiene " . $this->edad . " años <hr>";
		}
		
	}

	 class Empleado extends Persona
	{
		private $sueldo;

		public function cargarSueldo ($nombre,$edad,$sueldo)
		{
			parent::cargarPersona($nombre,$edad); 
			
			$this->sueldo=$sueldo;
			
		}

		public function imprimir()
		{
			
			echo parent::imprimir() ." y cobra " . $this->sueldo . "<hr>";
		}
	}
	$pers1=new Persona();
	$pers1->cargarPersona("luis",33);
	$pers1->imprimir();

	$emple1=new Empleado();
	$emple1->cargarSueldo("juan",22,2200);
	$emple1->imprimir();


	
?>
</body>
</html>
