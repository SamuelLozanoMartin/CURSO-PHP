<?php
	require_once ('interfaceBizcocho.php');
	require_once ('interfaceBizcochoVainilla.php');
	require_once ('interfaceAlfajor.php');
	$bizcocho= new Bizcochuelo();
	echo 'INGREDIENTES DEL BIZCOCHUELO <hr>';
	$bizcocho->set_ingredientes();
	$bizcocho->get_ingredientes();

	echo 'INGREDIENTES DEL BIZCOHUELO DE VAINILLA <hr>';
	$bizcochoVainilla = new BizcochueloVainilla();
	//no hace falta llamar al set porque lo llama desde el constructor
	$bizcochoVainilla -> get_ingredientes();

	echo 'INGREDIENTES DEL ALFAJOR <hr>';
	$alfajor1 = new alfajor();
	$alfajor1 -> set_ingredientes();
	$alfajor1 -> get_ingredientes();

?>
