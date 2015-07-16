<?php
include "connect_bd.php";
$arr = array();
$i=0;
      
  $sql_com="SELECT * from cliente where ID=".$_GET['ID']."";;
  $result_com = $conn->query($sql_com);
  if ($result_com->num_rows > 0) {
         while($row = $result_com->fetch_assoc()) {
        $arr[$i] = $row;
        $i++;

         }
   }else{
    echo "0 results";
  }    
echo '' . json_encode($arr) . '';

$conn->close();

?>