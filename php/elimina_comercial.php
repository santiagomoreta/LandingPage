<?php
include "connect_bd.php";


		$sql="DELETE FROM comercial WHERE ID=".$_GET['ID'];

		if ($conn->query($sql) === TRUE) {
		  	echo true;

		} else {
		    echo "Error: <br>" . $conn->error;
		}

$conn->close();
?>