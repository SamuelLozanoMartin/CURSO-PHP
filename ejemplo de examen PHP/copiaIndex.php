<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de examen</title>
</head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<script type="text/javascript">
    function actualizar($id){
        
        
        var node=document.getElementsByTagName("td");
        var elementos = [];
        for (var i = 0;i< node.length;i++) {
            if (node[i].textContent==$id){
                
               for (var x=0;x<5;x++){
                    elementos[x]=node[i + x].textContent;
                    
                    
                }
            }
        }

        document.formu.id.value=elementos[0];
        document.formu.nombre.value=elementos[1];
        document.formu.apellidos.value=elementos[2];
        document.formu.fechaNacimiento.value=elementos[3];
        document.formu.ciudad.value=elementos[4];
        
    }
    
   
</script>
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

        <p>
        <label class="w3-label w3-text-brown"><b>Apellidos</b></label>
        <input class="w3-input w3-border w3-sand" name="apellidos" type="text" ></p>
        <p>

        <p>
        <label class="w3-label w3-text-brown"><b>Fecha de nacimiento</b><i> (format: 2016-07-17)</i></label>
        <input class="w3-input w3-border w3-sand" name="fechaNacimiento" type="text" ></p>
        
        <p>
        <label class="w3-label w3-text-brown"><b>Ciudad de nacimiento</b></label>
        <input class="w3-input w3-border w3-sand" name="ciudad" type="text" ></p>
        
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
        
        
        if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['id']==""){
            $sql="INSERT INTO personas (nombre, apellidos,fechaNacimiento,ciudad) 
            VALUES ('".$_POST["nombre"]."','". $_POST["apellidos"]."','". $_POST["fechaNacimiento"]. "','" . $_POST["ciudad"] . "')";
            if ($conn->query($sql) === TRUE) {
                echo "Nuevo registro insertado";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            }
        elseif ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['id']!=""){
            $sql="UPDATE personas SET nombre= '". $_POST['nombre'] . "',apellidos= '" . $_POST['apellidos'] . "', fechaNacimiento='" . $_POST['fechaNacimiento'] . "' , ciudad= '" . $_POST['ciudad'] . "' WHERE id= " . $_POST['id'];
            if ($conn->query($sql)===TRUE){
                echo "Registro actualizado";
            }
            else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
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

                   /* if ($_GET["id"]!=null && $_GET["update"]=="true"){
                        echo("dfdsfsd");
                        $sql="select nombre,apellidos from personas where id=" . $_GET['id'];
                        echo ($sql);
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo($row['nombre']);
                                echo ($row['apellidos']);
                                document.getElementById("nombre").value="$id";
                            }
                        }
                    }*/
                    
                        $sql="SELECT id, nombre, apellidos,fechaNacimiento,ciudad FROM personas order by id DESC";
                    
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                ?>
                            <tr>
                                <td id=<?= $row["id"]?>><?= $row["id"]?></td>
                                <td <?= $row["nombre"]?>><?= $row["nombre"]?></td>
                                <td><?= $row["apellidos"]?></td>
                                <td><?= $row["fechaNacimiento"]?></td>
                                <td><?= $row["ciudad"]?></td>
                                <td><a href="index.php?id=<?= $row['id'] ?>&del=true" style="text-decoration:none">Eliminar</a></td>
                                <td>
                                    <a href="javascript:actualizar(<?= $row['id']?>)" style="text-decoration:none">actualizar</a>
                                </td>
                               
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
