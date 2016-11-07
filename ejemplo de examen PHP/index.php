<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de examen</title>
</head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

</script>
<body >
    <div class="w3-card-4">
        <div class="w3-container w3-brown">
          <h2>Registre d'empleats</h2>
        </div>
        <form class="w3-container" method="POST" action="index.php">

        <p>
        <label class="w3-label w3-text-brown"><b>Nombre</b></label>
        <input class="w3-input w3-border w3-sand" name="nombre" type="text"></p>

        <p>
        <label class="w3-label w3-text-brown"><b>Apellidos</b></label>
        <input class="w3-input w3-border w3-sand" name="apellidos" type="text"></p>
        <p>

        <p>
        <label class="w3-label w3-text-brown"><b>Fecha de nacimiento</b><i> (format: 2016-07-17)</i></label>
        <input class="w3-input w3-border w3-sand" name="fechaNacimiento" type="text"></p>
        
        <p>
        <label class="w3-label w3-text-brown"><b>Ciudad de nacimiento</b></label>
        <input class="w3-input w3-border w3-sand" name="ciudad" type="text"></p>
        
        <p><button class="w3-btn w3-brown">registrar</button></p>
        </form>
    </div>



    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "personas";
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        //mysql_query("SET NAMES 'utf8'");
         
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $sql="INSERT INTO personas (nombre, apellidos,fechaNacimiento,ciudad) 
            VALUES ('".$_POST["nombre"]."','". $_POST["apellidos"]."','". $_POST["fechaNacimiento"]. "','" . $_POST["ciudad"] . "')";
            if ($conn->query($sql) === TRUE) {
                echo "Nuevo registro insertado";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            //$conn->close();
           
        }
    ?>
        <div class='w3-container w3-responsive'>
            <table class='w3-table w3-bordered w3-striped w3-large'>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>apellidos</th>
                    <th>Fecha Nacimiento</th>
                    <th>Ciudad Nacimiento</th>
                </tr>
                <?php
                    
                    if ($_GET["id"]!=null && $_GET["del"]=="true"){
                        $sql="DELETE FROM personas WHERE id=". $_GET["id"];
                       
                        if ($conn->query($sql) === TRUE) {
                        echo "Borrado del usuario con id " . $GET["id"];
                        } else {
                            echo "Error al borrar: " . $conn->error;
                        }
                    }
                    
                        $sql="SELECT id, nombre, apellidos,fechaNacimiento,ciudad FROM personas order by id DESC";
                    
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
                                <td><?= $row["ciudad"]?></td>
                                <td><a href="index.php?id=<?= $row['id'] ?>&del=true">Eliminar</td>
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