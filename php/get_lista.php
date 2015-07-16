<?php
include "connect_bd.php";



$arr = array();
$i=0;



$sql = "SELECT * FROM cliente order by fecha_asig";
$result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row echo "<tr>";
    while($row = $result->fetch_assoc()) {
     $arr[$i] = $row;
        $i++;
          
    }

  } else {
    echo "0 results";
  }
echo '' . json_encode($arr) . '';



$conn->close();


?>