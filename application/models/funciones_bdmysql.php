<?php

function conexion(){ 


 $host="localhost";
 $user="root";
 $password="";

//echo "entro aqui";

 $conexion = mysql_connect($host, $user, $password)or die('No se pudo conectar: '.mysql_error());
 mysql_select_db('bienvenida_mcnews') or die('No se pudo seleccionar la base de datos');
 mysql_query("set names 'utf8'");


 return $conexion;		
}
  
 
function desconectar($conex){  
 $des=mysql_close($conex);  
 return $des;
 }; 

function ejecutar($conex,$sql){
 $result=mysql_query($sql,$conex) or die('Error al Ejecutar. '.mysql_error());
 return $result;	
}


?>
