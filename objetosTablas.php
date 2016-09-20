<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
class Tabla {
  private $mat=array();
  private $cantFilas;
  private $cantColumnas;
  private $solor;

  public function getCantFilas(){
      return $this->cantFilas;
  }

  public function getCantColumnas(){
      return $this->cantColumnas;
  }

  public function __construct($fi,$co,$color)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
    $this->color=$color;
  }

  public function cargar($fila,$columna,$valor)
  {
    $this->mat[$fila][$columna]=$valor;
  }

  private function inicioTabla()
  {
    echo '<table border="1" style="color:' . $this->color . ';">';
  }
    
  private function inicioFila()
  {
    echo '<tr>';
  }

  private function mostrar($fi,$co)
  {
    
    echo '<td>'.$this->mat[$fi][$co].'</td>';
  }

  private function finFila()
  {
    echo '</tr>';
  }

  private function finTabla()
  {
    echo '</table>';
  }

  public function graficar()
  {
    $this->inicioTabla();
    for($f=1;$f<=$this->cantFilas;$f++)
    {
      $this->inicioFila();
      for($c=1;$c<=$this->cantColumnas;$c++)
      {
        $this->mostrar($f,$c);
      }
      $this->finFila();
    }
    $this->finTabla();
  }
}


$valor=1;
$fila=20;   //numero de filas
$col=20;    //numero de columnas
$color="blue";  //color del texto de la tabla

$tabla1=new Tabla($fila,$col,$color);
for($x=1;$x<=$fila;$x++)
{
    for($y=1;$y<=$col;$y++)
    {
      $tabla1->cargar($x,$y,$valor);
      $valor++;
    }
}


$tabla1->graficar();

echo "Hay " . $tabla1->getCantFilas() . " filas. <br>";
echo "Hay " . $tabla1->getCantColumnas() . " columnas."

?>
</body>
</html>