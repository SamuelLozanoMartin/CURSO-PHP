<!DOCTYPE html>
<html>
<head>
  <title>Formulario PHP</title>
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>

<style type="text/css">
  .error{
    color: red;
  }
</style>

  
  <?php
      function test_input($data){
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
      }


      $nombreErr = $apellidosErr = $sexoErr = "";
      $nombre = $apellidos = $sexo="";
      if ($_SERVER["REQUEST_METHOD"] == "POST"){
          if (empty($_POST["nombre"])){
              $nombreErr="Falta introducir el nombre";
          }  
          else {
              $nombre=test_input($_POST["nombre"]);
              if (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
                  $nombreErr = "Solo esta permitido letras y espacios"; 
              }
          }

          if (empty($_POST["apellidos"])){
              $apellidosErr="Falta introducir los apellidos";
          }
          else{
              $apellidos=test_input($_POST["apellidos"]); 
              if (!preg_match("/^[a-zA-Z ]*$/",$apellidos)) {
                  $apellidosErr = "Solo esta permitido letras y espacios"; 
              }
          }

           if (empty($_POST["sexo"])){
              $sexoErr="Falta marcar sexo";
          }
          else{
              $sexo=test_input($_POST["sexo"]); 
          }

          if(empty($nombreErr) && empty($apellidosErr)){
              echo ("nombre: " . $nombre);
              echo "<br>";
              echo ("apellidos: " . $apellidos);
              echo "<br>";
              echo ("sexo: " . $sexo);
              echo "<br>";
          }
      }
  
 ?> 


<body>
    <h2>PHP Form Validation Example</h2>
    <span class="error">* Campos requeridos</span>
    <br><br>
    <form method="post" action="validacionFormulario.php"> 
          Nombre: <input type="text" name="nombre" value="<?= $nombre ?>" >
        <span class="error">* <?php echo $nombreErr;?></span>
        <br><br>
        Apellidos: <input type="text" name="apellidos" value="<?= $apellidos ?>" >
        <span class="error">* <?php echo $apellidosErr;?></span>
        <br><br>
        Sexo:
        <input type="radio" name="sexo" <?php if ($sexo=="Femenino") echo "checked"; ?> value="Femenino" >Femenino
        <input type="radio" name="sexo" <?php if ($sexo=="Masculino") echo "checked"; ?> value="Masculino">Masculino
        <span class="error">* <?php echo $sexoErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">  
  </form>
</body>
</html>



