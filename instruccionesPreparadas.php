<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mecanico";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO piezas (piez_nom) 
    VALUES (:piez_nom)");
    $stmt->bindParam(':piez_nom', $piez_nom);
    

    // insert a row
    $piez_nom= "Carburador";
    $stmt->execute();

    // insert another row
    $piez_nom= "Bujia";
    $stmt->execute();

    // insert another row
    $piez_nom= "Orquilla";
    $stmt->execute();

    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>