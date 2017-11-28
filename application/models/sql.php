<?php
function selectRegistro(){
	$sql="SELECT * FROM registro where estatus='INACTIVO' order by fecha asc limit 1";	
	return $sql;
}

function updateRegistro($id){
	$sql="update registro set estatus='ACTIVO' where id='$id'";
	return $sql;
}
?>