<!DOCTYPE html>
<html>
<head>
	<title>Sobreescritura del constructor</title>
</head>
<body>
	<?php
			abstract class Operacion {
			  protected $valor1;
			  protected $valor2;
			  protected $resultado;
			  public function __construct($v1,$v2) 
			  {

			    $this->valor1=$v1;
			    $this->valor2=$v2;
			  }
			  public function imprimirResultado()
			  {
			    echo $this->resultado;
			  }
			}

			class Suma extends Operacion{
				public $v1;
				public $v2;
				public $titulo;
				public function __construct($v1,$v2,$titulo)
				{

					$this->titulo=$titulo;
					parent::__construct($v1,$v2);
				}

			  public function operar()
			  {

			    $this->resultado=$this->valor1+$this->valor2;
			  }
			  public function imprimirResultado()
			  {
			  	echo  $this->titulo;
			  	parent::imprimirResultado();
			  	
			  }
		}

		$suma=new Suma(10,10,"la suma es: ");
		$suma->operar();
		$suma->imprimirResultado();
		$Operacion1=new operacion(2,3);
	?>
</body>
</html> 
