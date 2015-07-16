<?php
include "connect_bd.php";
include "md5.php";
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$token = encryptIt( $_POST['email'] );
echo $token;




 $alta = "INSERT INTO comercial(nombre,email,telefono,token) value('".$_POST['nombre']."','".$_POST['email']."','".$_POST['telefono']."','".$token."')";

if ($conn->query($alta) === TRUE) {



  






} else {
    echo "Error: " . $alta . "<br>" . $conn->error;
}

$conn->close();


///------------------------

?>