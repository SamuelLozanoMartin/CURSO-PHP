<!DOCTYPE html>
<html>
<head>
	<title>Clonacion de objetos</title>
</head>
<body>

	<?php
		class Cuadrado {
		  private $lado;

		  public function lado($lado){
		  	$this->lado=$lado;
		  }
		  public function CalcularPerimetro()
		  {
		    return $this->lado * 4 ;
		  }
		  public function CalcularSuperficie()
		  {
		    return $this->lado * $this->lado;
		  }
		  
		}

		$cuad1=new Cuadrado();
		$cuad1->lado(5);
		echo "Superficie de cuad1 es " . $cuad1->CalcularSuperficie() . "<br>";
		echo "Perimetro de cuad1 es " . $cuad1->CalcularPerimetro() . "<br>";
		echo "Asignamos el objeto a una nueva variable  y modificamos el lado de cuad1<br>";
		$cuad2=$cuad1;
		$cuad1->lado(6);
		echo "Superficie de cuad2 es " . $cuad2->CalcularSuperficie() . "<br>";
		echo "Perimetro de cuad2 es " . $cuad2->CalcularPerimetro() . "<br>";

		echo "Clonamos el objeto cuad2 y le modificamos<br>";
		$cuad2= clone $cuad1;
		$cuad2->lado(5);
		echo "Superficie de cuad2 es " . $cuad2->CalcularSuperficie() . "<br>";
		echo "Perimetro de cuad2 es " . $cuad2->CalcularPerimetro() . "<br>";
	?>
</body>
</html>
