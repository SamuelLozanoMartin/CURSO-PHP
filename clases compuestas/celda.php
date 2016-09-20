<?php
	

	class Celda 
	{
		private $texto;
		private $colorFuente;
		private $colorFondo;

		
		function __construct($texto,$fondo,$fuente)
		{
			$this->texto=$texto;
			$this->colorFondo=$fondo;
			$this->colorFuente=$fuente;
		}

		public function graficar ()
		{
			echo '<td style="background-color:' . $this->colorFondo . ';color:' . $this->colorFuente . '">' . $this->texto . '</td>';
		}

	}

?>