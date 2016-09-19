<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class empleado {
    private $nombre;
    private $sueldo;
   
    
    public function inicializar($nom,$sueldo)
    {
      $this->nombre=$nom;
      $this->sueldo=$sueldo;
    }
    public function imprimir()
    {
        echo $this->nombre;
        if ($this->sueldo>3000){
          echo " tiene que pagar impuestos porque gana " . $this->sueldo . "<br>";
        }
        else{
         echo " NO tiene que pagar impuestos porque gana " . $this->sueldo . "<br>";
        }
        
       
    }
}

$per1=new empleado();
$per1->inicializar('Juan',1500);
$per1->imprimir();
$per2=new empleado();
$per2->inicializar('Ana',3500);
$per2->imprimir();
?>
</body>
</html>