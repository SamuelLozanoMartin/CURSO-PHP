<?php
require_once('usuarios_model.php');
require_once('shops_model.php');
# Traer los datos de un usuario

/*$usuario1 = new Usuario();
$usuario1->get('juangutierrez@gmai.com');
if ($usuario1->nombre!="" && $usuario1->apellido !=""):
	print $usuario1->nombre . ' ' . $usuario1->apellido . ' existe<br>';
endif;
*/
/*
# Crear un nuevo usuario
$new_user_data = array(
 'nombre'=>'Alberto',
 'apellido'=>'Jacinto',
 'email'=>'albert2000@gmail.com',
 'clave'=>'jacaranda'
);
$usuario2 = new Usuario();
$usuario2->set($new_user_data);
$usuario2->get($new_user_data['email']);
print $usuario2->nombre . ' ' . $usuario2->apellido . ' ha sido creado<br>';
*/
# Editar los datos de un usuario existente
/*
$edit_user_data = array(
 'nombre'=>'pepe',
 'apellido'=>'perez',
 'email'=>'albert2000@gmail.com',
 'clave'=>'69274'
);
$usuario3 = new Usuario();
$usuario3->edit($edit_user_data);
$usuario3->get($edit_user_data['email']);
if ($usuario3->nombre!="" && $usuario3->apellido!=""):
	print $usuario3->nombre . ' ' . $usuario3->apellido . ' ha sido editado<br>';
endif;
*/
/*
#Borra un usuario existente
$usuario4 = new Usuario();
$usuario4->get('albert2000@gmail.com');
$usuario4->delete('albert2000@gmail.com');
if ($usuario4->nombre!="" && $usuario4->apellido!=""):
	print $usuario4->nombre . ' ' . $usuario4->apellido . ' ha sido eliminado';
endif;
*/
#mostrar un shop por su nif
$shop1 =  new Shop();
$shop1->get("99887654R");
if ($shop1->nif !=''):
	print "nombre: " . $shop1->nombre . "/tipo: " . $shop1->tipo . "/Ubicacion: " . $shop1->ubicacion . "/codigo: " . $shop1->codigo . "<br>";
endif;

#insertar un shop 
$new_shop = array(
'nombre'=>'PcComponenetes',
'tipo'=>'informatica',
'ubicacion'=>'calle 45',
'codigo'=>'08521',
'nif'=>'54125784B',
'alta'=>"2012/10/25",
'idUser'=>'3'
);
$shop2=new Shop();
$shop2->set($new_shop);
$shop2->get($new_shop['nif']);
print "insertada nueva tienda " . $shop2->nombre . "<br>"; 

#editar un registro de shop

$edit_shop = array(
'nombre'=>'Mango',
'tipo'=>'Ropa',
'ubicacion'=>'calle 39',
'codigo'=>'08536',
'nif'=>'7256985B',
'alta'=>"2014/11/02",
'idUser'=>'3'
);
$shop2=new Shop();
$shop2->edit($edit_shop);

/*
#borrar un registro shop
$shop4 = new Shop();
$shop4->get('54125784B');
$shop4->delete('54125784B');*/

?>
