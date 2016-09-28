<?php
require_once ('interfaceBizcocho.php');
class BizcochueloVainilla extends Bizcochuelo{
	public function set_ingredientes() {
			$this->ingredientes['escencia de vainilla'] = 'a gusto';
	}


	function __construct() {
		parent::set_ingredientes();
		$this->set_ingredientes(); 
	}
}
?>