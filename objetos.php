<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Persona {
  private $nombre;
  private $edad;
  public function inicializar($nom,$edad)
  {
    $this->nombre=$nom;
    $this->edad=$edad;
  }
  public function imprimir()
  {
    echo "feliz cumpleaños <br>" . $this->nombre . "-" . $this->edad . "<br>";
  }
  public function cumpleaños()
  {
   
    $this->edad++;

  } 
}

$per1=new Persona();
$per1->inicializar('Juan',25);
$per1->cumpleaños();
$per1->imprimir();

$per2=new Persona();
$per2->inicializar('Ana',35);
$per2->cumpleaños();
$per2->imprimir();

?>
</body>
</html>