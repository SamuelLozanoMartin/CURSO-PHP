<!DOCTYPE html>
<html>
<head>
	<title>Funcion clonacion</title>
</head>
<body>
<?php
	class Persona {
	  private $nombre;
	  private $edad;

	  public function fijarNombreEdad($nom,$ed){
	    $this->nombre=$nom;
	    $this->edad=$ed;
	  }

	  public function retornarNombre(){
	    return $this->nombre;
	  }

	  public function retornarEdad(){
	    return $this->edad;
	  }

	  public function __clone(){
	    $this->edad++;
	  }
	}

	$persona1=new Persona();
	$persona1->fijarNombreEdad('Juan',20);
	for ($i=0; $i <10 ; $i++) { 
		$persona2=clone($persona1);
		echo 'Datos de $persona' . ($i+1) . ": " ;
		echo $persona2->retornarNombre().' - '. $persona2->retornarEdad() .'<br>';
		$persona1=$persona2;
	}
	
?>
</body>
</html>