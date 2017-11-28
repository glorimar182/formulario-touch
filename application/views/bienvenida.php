<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url('public/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('public/bootstrap/js/bootstrap.min.js') ?>">
	<link rel="stylesheet" href="<?php echo base_url('public/css/style.css') ?>">
</head>
<body>
	<?php
	if(count($registros)>0){		
		foreach ($registros as $dato) {
			echo "<br>";
			echo "<div align='center'><img src='".$dato['foto']."'></div>";
			echo "<div align='center'><h2>".$dato['nombre'].".</h2></div>";
			echo "<div align='center'><h3>Bienvenido al proceso de reclutamiento de Mc Donald´s</h3></div>";
			$id=$dato['id'];	
			echo "<META HTTP-EQUIV='refresh' CONTENT='15; URL=mostrar'>";
		}
	}else{
		echo "<br>";
		echo"<h2>Bienvenidos al Centro de Reclutamiento!!!</h2>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='15; URL=mostrar'>";
	}

	?>
</body>
