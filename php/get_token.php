<?php
include "connect_bd.php";
include "md5.php";
error_reporting(E_ALL ^ E_NOTICE);
$token=$_POST['token'];
$decrypted = decryptIt( $token );
$arr = array();
$i=0;
      
  $sql_com="SELECT * from comercial WHERE email='".$decrypted."'";
  $result_com = $conn->query($sql_com);
  if ($result_com->num_rows > 0) {
         while($row = $result_com->fetch_assoc()) {
        $arr[$i] = $row;
        $i++;

         }
   }else{
    echo FALSE;
  }    
echo '' . json_encode($arr) . '';

$conn->close();



?>