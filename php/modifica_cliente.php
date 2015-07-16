
<?php
include "connect_bd.php";




$arr="";
$token="";    

$sql_email="SELECT email, token from comercial where ID=".$_POST['id_com'];
  $result_email = $conn->query($sql_email);
  if ($result_email->num_rows > 0) {
         while($row = $result_email->fetch_assoc()) {
        $arr = $row['email'];
        $token = $row['token'];
     

         }
   }else{
    echo "0 results";
  }  


$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$asunto="Informacion ".$_POST['producto'];
$fecha= date ("Y-n-j H:i:s");
$cuerpo='
<html>
<head>

</head>
<body>
<div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 13px;">
  <h1>Informacion de Producto '.$_POST['producto'].'.</h1>
  <div >

    <b>Datos del Cliente</b<br>
    Nombre:'.$_POST['nombre'].'<br>
    Email:'.$_POST['email'].'<br>
    Telefono:<a href="tel:'.$_POST['telefono'].'">'.$_POST['telefono'].'</a><br>
    Fecha y Hora de Solicitud:'.$fecha.'<br>
    Link: http://costepag.com/landingpage/app/index.html#'.$token.'

     </div>


</div>
</body>
</html>';





echo  '<br>Link: http://costepag.com/landingpage/app/index.html#'.$token.'<br>';
$sql="Update cliente Set id_com='$_POST[id_com]',comentarios='$_POST[comentarios]',fecha_asig=now(),nombre='$_POST[nombre]',email='$_POST[email]',telefono='$_POST[telefono]',fecha_alta='$_POST[fecha_alta]',producto='$_POST[producto]' Where ID='$_POST[id]'";
echo $sql;
if ($conn->query($sql) === TRUE) {
  	 mail($arr,$asunto,$cuerpo,$headers); 
} else {
    echo "Error: " . $alta . "<br>" . $conn->error;
}










$conn->close();
?>
