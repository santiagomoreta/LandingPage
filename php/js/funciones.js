function modifica(id){
  //alert("hola  "+id);
  location.href='./modifica_cliente.php?id='+id;

}
function elimina(id){
  //alert("hola  "+id);
  if(confirm("Esta seguro")){
     location.href='./elimina_cliente.php?id='+id;
  }else{
   
  }
    

}