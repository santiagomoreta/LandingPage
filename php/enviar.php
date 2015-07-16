
<?php 
session_start(); 
$user = $_POST['user']; 
$pass = $_POST['pass']; 

include "connect_bd.php";

 $buscarUsuario = "SELECT * FROM user WHERE NAME = '$_POST[user]' ";
 $result = $conn->query($buscarUsuario);

 //$result = mysql_query($buscarUsuario);

 //$count = mysql_num_rows($result);
 $count=$conn->affected_rows;
 

 /* if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
          
         }

   }else{
    echo "0 results";
   }  
  
}*/


 if ($count == 1){


 while($row = $result->fetch_assoc())
  {
  $pass_bd= $row['PASS'] ;
  $user_id=$row['id'];
  $user_name=$row['NAME'];

  }
		if ($pass_bd==$pass){
			  	

   			 	$_SESSION['usuario_id'] = $user_id; // creamos la sesion "usuario_id" y le asignamos como valor el campo usuario_id
                $_SESSION['usuario_nombre'] = $user_name; // creamos la sesion "usuario_nombre" y le asignamos como valor el campo usuario_nombre
                echo"<script>
                  location.href='../index.html'
                </script>";


		}else{
				//header("Location: index.html?errorpass=si"); 
                      echo"<script>
                  location.href='../index.html?errorpass=si'
                </script>";

		}

}else{

	 	//header("Location: index.html?errorusuario=si"); 
                  echo"<script>
                  location.href='../index.html?errorpass=si'
                </script>";

}

?> 