<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $conn->prepare("UPDATE MyGuests SET lastname=:apellido WHERE id=:id");
    $sql->bindParam(':id',$id);
    $sql->bindParam(':apellido',$apellido);

    $apellido="Lozano";
    $id=6;

    $sql->execute();

    echo $sql->rowCount() . " lineas actualizadas satisfactoriamente";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>