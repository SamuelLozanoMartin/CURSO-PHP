<?php
require_once ('interfacePostre.php');

class Alfajor implements Postre {
	public function set_ingredientes() {
		$this->ingredientes = array('Tapas de maizena' => 2,
		'dulce de leche'=>'1 cda. sopera',
		'coco rallado'=>'1 cdta. de te');
	}

	public function get_ingredientes(){
		foreach ($this->ingredientes as $campo=>$valor):
			echo "<strong>ingrediente: </strong>" . $campo . ' <strong>cantidad:</strong> ' . $valor . '<br>';
		endforeach;
	}
	function __construct() {
		$this->set_ingredientes();
	}
}
?>