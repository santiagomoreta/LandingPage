<?php	
 session_start();
?>
<html>
<head>
	<title>App Clientes</title>
	<style type="text/css">
		body{
			background-color: lightgrey;
			background: url("./img/pattern.jpg");
		}
		#sign{
			width: 400px;
			height: 250px;
			border:2px solid grey;
			border-radius: 7px;
			margin-left: 35%;
			margin-top: 10%;
			background-color: white;
			-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
			box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);


		}
		#title{
			font-size: 200%;
			margin-left: 20%;
		}
		#icon{
			width: 40%;
			//border:1px solid green;
			height: 60%;
			float: left;
			margin-left: 4%;

		}
		#user{
			width: 50%;
			border:1px solid lightgrey;
			 margin-left: 46%;
			height: 50%;
			background-color:#E6E6E6;
			border-radius: 5px;
			padding-left: 2%;
			padding-top: 2%;
		}
		#imguser{
			width: 50%;
			height: 50%;
			margin-top: -10%;

		}
		p{
			 font-size: 12px;
 		 font-family: arial, sans-serif;
		}
		.loginButton {
		  background-image: url("./img/key.png");
		  background-repeat: no-repeat;
		  padding-left: 17px;
		  background-position: 2px center;
		}
		input{
			border-radius: 5px;
		}
		span#copy{
			font-size: 11px;
 		 	font-family: arial, sans-serif;
 		 	color: gray;
		}
		@media only screen and (max-width: 990px) {
		#sign{
			width: 70%;
			height: auto;
			border:2px solid grey;
			border-radius: 7px;
			margin-left: 15%;
			margin-top: 7%;
			background-color: white;
			-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
			box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
			font-size: 300%;
			padding: 1%;

		}
		#title{
			margin-left: 5%;
		}
		input.inn{
			width:80%;
			height:50px;
			padding:8%;
			font-size: 100%;
		}
		#user{
			width: 80%;
			border:1px solid lightgrey;
			 margin-left: 10%;
			height: auto;
			background-color:#E6E6E6;
			border-radius: 5px;
			padding-left: 2%;
			padding-top: 2%;
		}
		#icon{
			width: 0%;
		
			height: 0%;
			float: left;
			margin-left: 1%;

		}
		#text{
			border:1px solid green;
			display: none;
		}
		.loginButton{
			font-size: 80%;
		}
		#copy{
			font-size: 80%;
		}


		}		
		
	</style>
</head>
<body>
<?php	
  if(isset($_SESSION['usuario_nombre'])) {
  //header('Location: ./home.html');
  echo "<script>location.href='home.html'</script>";
  }else{

?>
<div id="sign">
		<span id="title">App Clientes</span>
		<p style="margin-left: 20%;">Posibles Clientes</p>
		<div id="icon" >
			<div>
				<img id="imguser"src="img/user.png" />
			</div>
			<div id="text">
				<p>Welcome to App Clientes !</p>

				<p>Use a valid username and password to access to GesDoc user Desktop.</p>
			</div>	
		</div>
		<div id="user">
			<form id="contacto" name="contacto" method="post" action="php/enviar.php"> 
				<label class="pad"><b>User:</b>
					<span  style="color:red;">
						<?php
						if (isset($_GET['errorusuario']) )
						{
						     echo "Invalid user";

						}
						?>

					</span>	
					<input class="inn" type="text" name="user" required/><br>
				</label>
				<label class="pad"><b>Password:</b>
					<span  style="color:red;">
						<?php
						if (isset($_GET['errorpass']) )
						{
						     echo "Invalid password";

						}
						?>

					</span>	
					<input class="inn" type="password" name="pass" required/>
				</label>
				<center><input type="submit" value="Login" style="margin-top:8%;" class="loginButton"></center>
			</form>
		</div>	

			<div>
			<br><center><span id="copy"> &copy; 2015 CostePagina. All rights reserved.</span></center>
			</div>	
</div>
</body>
<script>
</script>
</html>
<?php
}
?>