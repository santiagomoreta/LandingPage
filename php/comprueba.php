<?php
session_start();
if(isset($_SESSION['usuario_id']) && isset($_SESSION['usuario_nombre'])){
	$bool=true;
}else{
	$bool=false;
}
echo $bool;


?>