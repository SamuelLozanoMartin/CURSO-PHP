<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta http-equiv="refresh" content="30">  <!--REFRESCAR LA PAGINA CADA 30 SEGUNDOS   -->
</head>

<body>
	<?php

  
  require "clases compuestas/celda.php";
class Tabla {
    


    private $mat=array();
    private $cantFilas;
    private $cantColumnas;
   


    public function getCantFilas(){
        return $this->cantFilas;
    }

    public function getCantColumnas(){
        return $this->cantColumnas;
    }

    public function __construct($fi,$co)
    {
      $this->cantFilas=$fi;
      $this->cantColumnas=$co;
      
    }

    public function insertar($fila,$columna,$celda)
    {
      
      $this->mat[$fila][$columna]=$celda;
    }

    private function inicioTabla()
    {
      echo '<table border="1">';
    }
      
    private function inicioFila()
    {
      echo '<tr>';
    }

    private function mostrar($fi,$co)
    {
     $this->mat[$fi][$co]->graficar();
      
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
$colorFondo=array ("blue","red","green","yellow","black");  //color del texto de la tabla
$colorFuente="white";  //color del fondo de la celda

$tabla1=new Tabla($fila,$col);
for($x=1;$x<=$fila;$x++)
{
    for($y=1;$y<=$col;$y++)
    {
      $celda1=new Celda($valor,$colorFondo[mt_rand(0,count($colorFondo)-1)],$colorFuente);
      $tabla1->insertar($x,$y,$celda1);
      $valor++;
    }
}


$tabla1->graficar();

echo "Hay " . $tabla1->getCantFilas() . " filas. <br>";
echo "Hay " . $tabla1->getCantColumnas() . " columnas."

?>
</body>
</html>