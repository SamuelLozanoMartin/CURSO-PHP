<?php
	require_once ("db_abstract_model.php");

	class Shop extends DBAbstractModel{
		protected $idShop;
		private $idUser;
		public $nombre;
		public $tipo;
		public $ubicacion;
		public $codigo;
		public $nif;
		public $alta;

		function __construct() {
		 	$this->db_name = 'book_example';
		 }
		 public function get($nif='') {
			if(!empty($nif)):
				 $this->query = "
				 SELECT idShop, nombre, tipo, ubicacion, codigo, nif, alta, idUser
				 FROM shops
				 WHERE nif = '$nif'
				 ";
				 $this->get_results_from_query();
			else:
				print "No has mandado ningun NIF a buscar!!!!";
			endif;
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
				 	$this->$propiedad = $valor;
				endforeach;
			endif;
		 }

		  public function set($shop_data=array()) {
			 if(array_key_exists('nif', $shop_data)):
			 	$this->get($shop_data['nif']);
				 if($shop_data['nif'] != $this->nif):
					 foreach ($shop_data as $campo=>$valor):
					 	$$campo = $valor;
					 endforeach;
					$this->query = "
					 INSERT INTO shops
					 (nombre, tipo, ubicacion, codigo, nif, alta, idUser)
					 VALUES
					 ('$nombre', '$tipo', '$ubicacion', '$codigo','$nif','$alta','$idUser')
					 ";
					 $this->execute_single_query();

				else:
					echo "NO SE PUEDE INSERTAR Ya hay un Nif con ese valor";
				 endif;
			else:
				echo "NO SE PUEDE INSERTAR No has introducido un NIF";
			 endif;
		 }

		 public function edit($shop_data=array()) {
			 
		 	if(array_key_exists('nif', $shop_data)):
			 	$this->get($shop_data['nif']);
				 if($shop_data['nif'] == $this->nif):
					foreach ($shop_data as $campo=>$valor):
					 	$$campo = $valor;
					 	if(empty($valor)):
					 		$$campo=$this->$campo;
					 	endif;
					endforeach;
					 $this->query = "
					 UPDATE shops
					 SET nombre='$nombre',
					 tipo='$tipo',
					 ubicacion='$ubicacion',
					 codigo='$codigo',
					 nif='$nif',
					 alta='$alta',
					 idUser='$idUser'
					 WHERE nif = '$nif'
					 ";

					 $this->execute_single_query();
					 echo "tienda actualizada";
				else:
					print "NO SE PUEDE ACTUALIZAR No existe ninguna tienda con ese nif!!!";
				endif;
			else:
				print "NO SE PUEDE ACTUALIZAR No has introducido ninguna tienda para actualizar!!!";
		endif;
		 }

		 public function delete($nif=""){

		 	if($nif!=""):

			 	if($this->nif == $nif):
					 $this->query = "
					 DELETE FROM shops
					 WHERE nif = '$this->nif'
					 ";
					 $this->execute_single_query();
					 echo "se ha borrado la tienda con NIF " . $nif;
				else:
					echo "NO SE HA PODIDO BORRAR Esta tienda no existe!!";
				endif;
			else:
				echo "NO SE HA PODIDO BORRAR No has introducido ningun NIF";
		 	endif;
		 	
		 }
	}
?>