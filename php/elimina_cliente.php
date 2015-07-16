<?php
include "connect_bd.php";


$sql="DELETE FROM cliente WHERE Id=".$_GET['ID'];

if ($conn->query($sql) === TRUE) {
  	echo true;

} else {
    echo "Error: <br>" . $conn->error;
}

$conn->close();
?>