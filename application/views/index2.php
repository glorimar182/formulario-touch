<?php
include('funciones_bdmysql.php');
include('sql.php');

if($conexion=conexion()){
	$sql=selectRegistro();
	$result=ejecutar($conexion,$sql);

	if(mysql_num_rows($result)>0){
		while($dato=mysql_fetch_array($result)){
			echo "Bienvenidos <br>";
			echo $dato['nombre']."<br>";
			echo "<img src='".$dato['foto']."'>";
			$id=$dato['id'];

			$sql2=updateRegistro($id);
			$result2=ejecutar($conexion,$sql2);
			if($result2){
				echo "<META HTTP-EQUIV='refresh' CONTENT='15; URL=index.php'>";
			}
		}
	}else{
		echo"<h1>Bienvenidos al Centro de Reclutamiento!!!</h1>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='15; URL=index.php'>";
	}

}
?>
