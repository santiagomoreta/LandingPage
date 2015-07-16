<?php

include "connect_bd.php";
$sql="ALTER TABLE comercial ADD token varchar(400);";

if ($conn->query($sql) === TRUE) {
  	 ECHO"OPERACION CORRECTA null";
} else {
    echo "Error: " . $alta . "<br>" . $conn->error;
}

?>