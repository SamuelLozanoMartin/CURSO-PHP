<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de examen</title>
</head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<script type="text/javascript">
    
    
   
</script>

<?php
        $apellidosErr="";
        $nameErr="";
        $fechaErr="";

        function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
        }

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_empl";
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        //solucion a los acentos en phpMyadmin
        $conn->query("SET NAMES 'utf8'");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        
        if ($_SERVER["REQUEST_METHOD"] == "POST" ){
            
            //validacion nombre
            if (empty($_POST["nombre"])) {
                $nameErr = "Nombre obligatorio <br>";
                
            } 
            else {
                $name = test_input($_POST["nombre"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                  $nameErr = "Solo esta permitido letras y espacions en blanco <br>"; 
                }
                
            }
           
            //validacion apellidos
            if (empty($_POST["apellidos"])) {
                $apellidosErr = "Apellidos obligatorios <br>";
               
                
            } 
            else {
                $name = test_input($_POST["apellidos"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                  $apellidosErr = "Solo esta permitido letras y espacios en blanco <br>"; 
                }
                
            }

            //validacion de fecha

            if (empty($_POST['fechaNacimiento'])){
                $fechaErr = "la fecha es obligatoria <br>";
            }
            else{
                $fecha=$_POST['fechaNacimiento'];
                $fecha=explode("-", $fecha);
                if (sizeof($fecha) !=3){
                    $fechaErr="Fecha incorrecta <br>";

                }
                elseif ($fecha[0]> date(Y)){
                    $fechaErr="Todavia no has nacido <br>";
                }

                elseif (checkdate($fecha[1],$fecha[2],$fecha[0])==false){
                    $fechaErr="Fecha incorrecta <br>";
                }
            }

            if ($apellidosErr=="" && $nameErr=="" && $fechaErr==""){
                $sql="INSERT INTO empleados (nombre, apellidos,fechaNacimiento) 
                    VALUES ('".$_POST["nombre"]."','". $_POST["apellidos"]."','". $_POST["fechaNacimiento"]. "')";
                    if ($conn->query($sql) === TRUE) {
                        echo "Nuevo registro insertado";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    } 
            }
        }
    ?>
<body >
    <div class="w3-card-4">
        <div class="w3-container w3-brown">
          <h2>Registre d'empleats</h2>
        </div>
        <form class="w3-container" method="POST" action="index.php" name="formu">

        <p>
        <input class="w3-input w3-border w3-sand" name="id" type="hidden"></p>

        <label class="w3-label w3-text-brown"><b>Nombre</b></label>
        <input class="w3-input w3-border w3-sand" name="nombre" type="text" ></p>
        <span ><?= $nameErr?></span>
        <p>
        <label class="w3-label w3-text-brown"><b>Apellidos</b></label>
        <input class="w3-input w3-border w3-sand" name="apellidos" type="text" >
        <span ><?= $apellidosErr?></span>
        </p>
        

        <p>
        <label class="w3-label w3-text-brown"><b>Fecha de nacimiento</b><i> (format: 2016-07-17)</i></label>
        <input class="w3-input w3-border w3-sand" name="fechaNacimiento" type="text" >
        <span ><?= $fechaErr?></span></p>
               
        <p><button class="w3-btn w3-brown">registrar</button></p>
        </form>
    </div>



    
        <div class='w3-container w3-responsive'>
            <table class='w3-table w3-bordered w3-striped w3-large'>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>apellidos</th>
                    <th>Fecha Nacimiento</th>
                    
                </tr>
                <?php
                    
                    
                    $sql="SELECT id, nombre, apellidos,fechaNacimiento FROM empleados order by id DESC";
                    
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                ?>
                            <tr>
                                <td><?= $row["id"]?></td>
                                <td><?= $row["nombre"]?></td>
                                <td><?= $row["apellidos"]?></td>
                                <td><?= $row["fechaNacimiento"]?></td>
                            </tr>
                    <?php 
                        }
                    }
                    else{
                        echo "No hay datos para mostrar";
                    }
                    
                    ?>
            </table>
        </div>
    <?php
        $conn->close();
    ?>
</body>
</html>
