<?php
require_once ('interfacePostre.php');
class Bizcochuelo implements Postre {
	var $ingredientes = array();
	public function set_ingredientes() {
		$this->ingredientes = array('harina'=>'2 tazas', 'leche'=>'1 taza','azucar'=>'1 taza', 'huevo'=>1);
	}

	public function get_ingredientes(){
		foreach ($this->ingredientes as $campo=>$valor):
			echo "<strong>ingrediente: </strong>" . $campo . ' <strong>cantidad:</strong> ' . $valor . '<br>';
		endforeach;
	}
}
?>