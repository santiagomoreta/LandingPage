<?php
include "connect_bd.php";

$sql="UPDATE comercial SET nombre='".$_POST['nombre']."',email='".$_POST['email']."',telefono='".$_POST['telefono']."' WHERE ID='".$_POST['id']."'";
echo $sql;
if ($conn->query($sql) === TRUE) {
  	
} else {
    echo "Error: " . $alta . "<br>" . $conn->error;
}

$conn->close();


?>