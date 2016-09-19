<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
	<?php

    class CabeceraPagina {
          private $titulo;
          private $ubicacion;
          private $fondo;
          private $color;

          public function __construct($titulo,$ubicacion,$fondo,$color)
          {
            $this->titulo=$titulo;
            $this->ubicacion=$ubicacion;
            $this->fondo=$fondo;
            $this->color=$color;
           
          }

          public function graficar()
          {
            echo '<div style="font-size:40px;text-align:'. $this->ubicacion .'">';
            echo $this->titulo;
            echo '</div>';
          }

        public function graficar2()
        {

            echo "<div class='w3-container w3-". $this->ubicacion . "' style='color:". $this->color . "; background-color:" . $this->fondo . "'>";
            echo "<h2>" . $this->titulo . "</h2>";
            echo "</div>";
        }

    }

    $cabecera=new CabeceraPagina("titulo objetos","center","red","blue");
   
    $cabecera->graficar2();
    $cabecera->graficar();
    ?>
</body>
</html>