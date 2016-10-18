<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql=$conn->prepare("DELETE FROM myguests WHERE id=:id");
    $sql->bindParam(':id',$id);
    $id=$_GET['id'];
   
    $sql->execute();
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>