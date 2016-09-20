<html>
<head>
<title>herencia de objetos pasando los valores por $_GET</title>
</head>
<body>
<?php

class Operacion {
  protected $valor1;
  protected $valor2;
  protected $resultado;
  public function cargar()
  {
    $this->valor1=$_GET["valor1"];
    $this->valor2=$_GET["valor2"];
  }
  
  public function imprimirResultado()
  {
    echo $this->resultado.'<br>';
  }
}

class Suma extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1+$this->valor2; 
  }
}

class Resta extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1-$this->valor2;
  }
}

class Modulo extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1%$this->valor2;
  }
}

$suma=new Suma();
$suma->cargar();

$suma->operar();
echo 'El resultado de la suma de ' . $_GET["valor1"] . ' + ' .  $_GET["valor2"] .' es:';
$suma->imprimirResultado();

$resta=new Resta();
;
$resta->cargar();
$resta->operar();
echo 'El resultado de la diferencia de ' . $_GET["valor1"] . ' - ' .  $_GET["valor2"] .' es:';
$resta->imprimirResultado();

$modulo=new Modulo();
$modulo->cargar();

$modulo->operar();
echo 'El resultado del modulo de ' . $_GET["valor1"] . ' y ' .  $_GET["valor2"] .' es:';
$modulo->imprimirResultado();

?>
</body>
</html> 