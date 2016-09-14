<?php
$nombre = $apellidos = $sexo="";
if ($_SERVER["REQUEST_METHOD"] == "POST"):
		
		$nombre=test_input($_POST["nombre"]);
		$apellidos=test_input($_POST["apellidos"]);
		$sexo=test_input($_POST["sexo"]); ?>
 	 	<h2>Datos</h2>
		<?php  echo $nombre ?>
		<br>
		<?php echo $apellidos ?>
		<br>
		<?php echo $sexo ?>
	
<?php endif ?>

<?php function test_input($data){
	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
}
  
?>
