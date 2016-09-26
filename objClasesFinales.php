<!DOCTYPE html>
<html>
<head>
	<title>Metodos y Clases finales</title>
</head>
<body>
	
	<?php
	class Operacion {
		  protected $valor1;
		  protected $valor2;
		  protected $resultado;
		  public function __construct($v1,$v2)
		  {
		    $this->valor1=$v1;
		    $this->valor2=$v2;
		  }
		  public final function imprimirResultado()
		  {
		    echo $this->resultado.'<br>';
		  }
	}

	final class Suma extends Operacion{
		  private $titulo;
		  public function __construct($v1,$v2,$tit)
		  {
		    Operacion::__construct($v1,$v2);
		    $this->titulo=$tit;
		  }
		  public function operar()
		  {
		    echo $this->titulo;
		    echo $this->valor1.' + '.$this->valor2.' es ';
		    $this->resultado=$this->valor1+$this->valor2;
		  }
		  public function imprimirResultado() //dara error porque no puedes sobreescribir un metodo FINAL
		  {
		  	parent::imprimirResultado(); 
		  }
	}

	class sumaValores extends Suma
	{
			// esto dara error porque no se puede heredad de una clase FINAL
			// en este caso SUMA es FINAK.
	}	

	$suma=new Suma(10,10,'Suma de valores:');
	$suma->operar();
	$suma->imprimirResultado();  //dara error porque no puedes sobreescribir un metodo FINAL
	?>

</body>
</html>