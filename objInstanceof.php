<!DOCTYPE html>
<html>
<head>
	<title>Funcion Instanceof</title>
</head>
<body>
<?php
	abstract class Trabajador {
		  protected $nombre;
		  protected $sueldo;
		  public function __construct($nom,$sue)
		  {
		    $this->nombre=$nom;
		    $this->sueldo=$sue;
		  }
		  public function retornarSueldo()
		  {
		    return $this->sueldo;
		  }
	} 

	class Empleado extends Trabajador {
	}

	class Gerente extends Trabajador {
	}

	$vec[]=new Empleado('juan',1200);
	$vec[]=new Empleado('ana',1000);
	$vec[]=new Empleado('carlos',1000);

	$vec[]=new Gerente('jorge',25000);
	$vec[]=new Gerente('marcos',8000);
	$suma1=0;
	$suma2=0;
	$cont1=0;
	$cont2=0;
	for($f=0;$f<count($vec);$f++)
	{
		  if ($vec[$f] instanceof Empleado){
		  		$suma1=$suma1+$vec[$f]->retornarSueldo();
				$cont1++;
		  }
		    
		  elseif ($vec[$f] instanceof Gerente){
		  		$suma2=$suma2+$vec[$f]->retornarSueldo();
		  		$cont2++;
		  }
	      
	}
	echo 'Gastos en sueldos de ' . $cont1 .' Empleados:'.$suma1.'<br>';
	echo 'Gastos en sueldos de ' . $cont2 . ' Gerentes:'.$suma2.'<br>';

?>
</body>
</html>