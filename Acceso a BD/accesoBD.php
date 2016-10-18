<!DOCTYPE html>
<html>
<head>
    <title>Acceso de BD</title>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, email from MyGuests";
$result = $conn->query($sql);
if ($result->num_rows > 0): ?>
    <div class="w3-container">
        <table class="w3-table-all w3-card-4">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
        </tr>
       <?php 
       while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["firstname"]?></td>
                <td><?= $row["lastname"]?></td>
                <td><?= $row["email"]?></td>
            </tr>
             
        <?php
        endwhile ?>
        </table>
    </div>
<?php 
else:?>
     0 results;
<?php 
endif ?>

<?php $conn->close();
?>
</body>
</html>

